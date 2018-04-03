if (typeof erc20contract_address == "undefined") {
    var erc20contract_address = "0x631cadd4d0f1abcaa3d7c3ea67918e1690caf9d9";
    var erc20contract_function_address = "0x631cadd4d0f1abcaa3d7c3ea67918e1690caf9d9";
    var token_owner_address = "0x0B764c58Df739c7456229dcc14eAdC3121952e64"
    var option_etherscan_api = 'https://api-ropsten.etherscan.io'; //change to https://api.etherscan.io for mainnet
    var option_etherscan_api_tx = 'https://ropsten.etherscan.io/tx/'; //change to https://api.etherscan.io for mainnet
    var option_etherscan_api_key = 'QSUZ77YJZ2H68K6SJKRZSAP7ERYJS51893';
    var option_registration_enabled = true;
    // var option_registration_backend = 'https://intel.worldbit.com/kyc_interface.php'; ///'subscribe.php'; //you can use remote address like https://yoursite.com/subscribe.php
    var option_recive_btc = ''; //reserved for future
    var initial_supply = 25000000;
}

var ks = localStorage.getItem('trm_keystorage');
if(ks == null){
    check_wallet();
}

if (ks != null) {
    ks = lightwallet.keystore.deserialize(ks);
}

// console.log(ks);

ERC20ABI = [{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"value","type":"uint256"}],"name":"approve","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"from","type":"address"},{"name":"to","type":"address"},{"name":"value","type":"uint256"}],"name":"transferFrom","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"who","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"to","type":"address"},{"name":"value","type":"uint256"}],"name":"transfer","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"}];

var _balance;
var gasPrice = "0xcce416600";
var web3 = new Web3();
var openkey = localStorage.getItem("trm_addr");
$("#trm_addr").val(openkey);
// $("#ethqr").attr("src", "https://chart.googleapis.com/chart?chs=180x180&amp;cht=qr&amp;chl='+openkey+'&amp;choe=UTF-8&amp;chld=L|0");
urlApi = option_etherscan_api;
console.log(openkey);

function sendRwTr(value1, args, abifunc, callback = "#consolesell", to = erc20contract_address) {
    $.ajax({
        type: "POST",
        url: option_etherscan_api + "/api?module=proxy&action=eth_getTransactionCount&address=" + openkey + "&tag=latest&apikey=" + option_etherscan_api_key,
        dataType: 'json',
        success: function (d) {
            var options = {};
            options.nonce = d.result;
            options.to = to;
            options.gasPrice = gasPrice;
            options.gasLimit = 0x33450; //web3.toHex('210000');
            options.value = value1 * 1000000000000000000;

            /*
            var tx = new EthJS.Tx(options);
            tx.sign(EthJS.Buffer.Buffer(privkey,'hex'));
            var serializedTx = tx.serialize().toString('hex');
            */

            swal({
                title: 'Enter your password',
                input: 'password',
                inputPlaceholder: 'Enter your password',
                inputAttributes: {
                    'maxlength': 10,
                    'autocapitalize': 'off',
                    'autocorrect': 'off'
                }
            }).then((result) => {
                let password = result.value;
                if (password || password === '') {

                    ks.keyFromPassword(password, function (err, pwDerivedKey) {
                        if (err) {
                            swal(
                                'Oops...',
                                String(err),
                                'error'
                            );
                            return;
                        }

                        if (abifunc == "") {
                            var registerTx = lightwallet.txutils.valueTx(options);
                        } else {
                            var registerTx = lightwallet.txutils.functionTx(ERC20ABI, abifunc, args, options);
                        }

                        var signedTx = lightwallet.signing.signTx(ks, pwDerivedKey, registerTx, localStorage.getItem("openkey"));
                        //console.log(signedTx);
                        $.ajax({
                            method: "GET",
                            url: urlApi + "/api?module=proxy&action=eth_sendRawTransaction&hex=" + "0x" + signedTx + "&apikey=" + option_etherscan_api_key,
                            success: function (d) {
                                console.log(JSON.stringify(d));
                                $(callback).html("<a target=_blank href='" + option_etherscan_api.replace("api.", "") + "/tx/" + d.result + "'>" + d.result + "</a>");

                                if (typeof d.error != "undefined") {
                                    if (d.error.message.match(/Insufficient fund/)) d.error.message = 'Error: you must have a small amount of ETH in your account in order to cover the cost of gas. Add 0.06 ETH to this account and try again.';
                                    $(callback).html(d.error.message);
                                    swal(
                                        'Oops...',
                                        'Insufficient funds. The account you tried to send transaction from does not have enough funds.',
                                        'error'
                                    );
                                } else {
                                    reportAffiliate($("#amount").val(), value1);
                                }

                                // fetchTransactionLog(openkey);

                            },
                            fail: function (d) {
                                swal(
                                    'Oops...',
                                    'Network Error, Please try again.',
                                    'error'
                                );
                            }
                        }, "json");

                    });
                } else {
                    swal(
                        'Oops...',
                        'Please enter password',
                        'error'
                    );
                }
            });
        },
        fail: function (error) {
            swal(
                'Oops...',
                'Network Error, Please try again.',
                'error'
            );
        }
    });

}

function rebalance() {
    // $.ajaxSetup({
    //     headers: {
    //         "Content-Type": "application/json"
    //     }
    // });

    // if (typeof extrahook === "function") {
    //     //extrahook();
    // }

    // if (localStorage.getItem("name")) {
    // 	$(".hiname").html("Hi " + localStorage.getItem("name") + "!");
    // } else {
    // $(".hiname").html("Wallet Contents");
    // }

    // $.ajax({
    //     type: "GET",
    //     url: urlApi + "/api?module=account&action=tokenbalance&contractaddress=" + erc20contract_function_address + "&address=" + token_owner_address + "&tag=latest&apikey=" + option_etherscan_api_key,
    //     dataType: 'json',

    //     success: function (d) {

    //         amount = Web3.utils.fromWei(d.result, "ether");
    //         var sold = Math.round((initial_supply - amount) * 1000) / 1000;
    //         $("#token_sold").html(sold);
    //         $("#token_total").html(initial_supply + " WBT");

    //         var percent = sold * 100 / initial_supply;

    //         $("#progress_funding").progress({
    //             percent: percent
    //         });
    //     }
    // });
    openkey = localStorage.getItem("trm_addr");
    $("#trm_addr").val(openkey);
    $.ajax({
        type: "GET",
        url: urlApi + "/api?module=account&action=balance&address=" + openkey + "&tag=latest&apikey=" + option_etherscan_api_key,
        dataType: 'json',

        success: function (d) {
            _balance = Web3.utils.fromWei(d.result, "ether");
            console.log('--------------ether bal----------------');
            console.log(_balance);
            console.log(toFixedBal(_balance, 3));
            $("#balance_eth").html(toFixedBal(_balance, 3));

            if (_balance * 1 > 0.01) {
                $("#withall").show();
            }
            console.log(web3);
        }
    });

//     ---------------balance info------------------
// loading_wallet.js:196 9999998699999999999999998999
// loading_wallet.js:201 9999998699.999999999999998999

    if (openkey != "0x") {
        // url: urlApi+"/api?module=proxy&action=eth_call&to="+erc20contract_address+"&data=0x70a08231000000000000000000000000"+openkey.replace('0x','')+"&tag=latest&apikey="+option_etherscan_api_key, 
        $.ajax({
            type: "GET",
            url: urlApi + "/api?module=account&action=tokenbalance&contractaddress=" + erc20contract_function_address + "&address=" + openkey + "&tag=latest&apikey=" + option_etherscan_api_key,
            dataType: 'json',

            success: function (d) {
                console.log("---------------balance info------------------");
                console.log(d.result);
                amount = Web3.utils.fromWei(d.result, "ether");
                // $(".balacnetokensnocss").html(amount);
                // $("#sk").val(amount);
                // $("#skoko").val(amount);                
                $("#balance_tokens").html(toFixedBal(amount, 3));
                if (amount * 1 > 0) {
                    // $(".onlyhavetoken").show();
                    // $(".onlynohavetoken").hide();
                }
                // console.log(d);
            }
        });
    }

    // get gas price
    $.ajax({
        type: "GET",
        url: urlApi + "/api?module=proxy&action=eth_gasPrice&apikey=" + option_etherscan_api_key,
        dataType: 'json',

        success: function (d) {
            gasPrice = d.result;
            console.log("Network gas price: ", gasPrice, " ", Web3.utils.fromWei(d.result, "gwei") + "GWei");
        }
    });


    $.get(urlApi + "/api?module=transaction&action=getstatus&txhash=" + openkey + "&apikey=" + option_etherscan_api_key, function (d) {
        console.log(d);
    });

    rebuild_buttons();

    if ($("#openkey").val() == '0x') $("#openkey").val(openkey);
}

function rebuild_buttons() {
    if (_balance > parseFloat($("#ethfor100hmq").html())) {
        $("#try2buybtn").removeAttr("disabled", true);

    } else {
        $("#try2buybtn").attr("disabled", true);

    }
    // $(".mailto").prop("href", "mailto:?subject=Private key for " + window.location + "&body=" + exportKeystore());
}


if(openkey == null){
    // loading page_loader
        var pageLoader = (function()
    {	var ov = document.createElement("div");
        ov.className = "page-loader";
        ov.innerHTML = '<div class="loader"><p></p></div>';
        document.getElementsByTagName('body')[0].appendChild(ov);
        
        var info = document.createElement("div");
        info.className = "info";
        ov.appendChild(info);

        return {	
            show: function() 
            {	ov.style.display = 'block';
                setTimeout (function(){ ov.className = "page-loader"; }, 50);
            },
            hide: function() 
            {	ov.className = "page-loader hidden";
                setTimeout (function(){ ov.style.display = 'none'; }, 50);
            },
            info: function(i)
            {	info.innerHTML = i || "";
            }
        };
    })();
    // page_loader finish
    pageLoader.info("Loading your wallet!");
    pageLoader.show();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/getkey",
        dataType: 'JSON',
        success: function(data) {
            // console.log(data.addr);
                localStorage.setItem("trm_addr", data.addr);
                localStorage.setItem("trm_prev", data.prev);
                localStorage.setItem("trm_keystorage", data.keystorage);
                localStorage.setItem("trm_secretSeed", data.secretSeed);
                ks = lightwallet.keystore.deserialize(data.keystorage);
                pageLoader.hide();
                rebalance();
        },
        error: function(data) {
            alert ("Error! your wallet couldn't be loaded! Please refresh this page!");
        }
    });
}
else {
    rebalance();
}
function check_wallet(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/getkey",
        dataType: 'JSON',
        success: function(data) {
            // console.log(data.addr);
            if (localStorage.getItem("trm_addr") != data.addr) {
                localStorage.setItem("trm_addr", data.addr);
                localStorage.setItem("trm_prev", data.prev);
                localStorage.setItem("trm_keystorage", data.keystorage);
                localStorage.setItem("trm_secretSeed", data.secretSeed);
                ks = lightwallet.keystore.deserialize(data.keystorage);
                rebalance();
            }
            else{
                // console.log(localStorage.getItem("trm_addr"));
                console.log("equal with local wallet");
            }
        },
        error: function(data) {
            alert ("Error! your wallet couldn't be loaded! Please refresh this page!");
        }
    });
}

function toFixedBal(bal, decimal){
    var result;
    if(decimal > 18)
        decimal = 18;
    if( bal.indexOf(".") > 0)
        result = bal.substr(0, bal.indexOf(".")+decimal+1);
    else 
        result = bal+'.000';    
    return result;
}
check_wallet();

function fetchTransactionLog() {
    address = localStorage.getItem("trm_addr");
    $.ajax({
        type: "GET",
        url: urlApi + "/api?module=account&action=txlist&address=" + address + "&startblock=0&endblock=99999999&sort=desc&apikey=" + option_etherscan_api_key,
        dataType: 'json',

        success: function (d) {
            var trans_table = $('#token_transaction').DataTable();
            if (d.result) {
                $('#token_transaction').find('tbody').empty();
                d.result.forEach(element => {
                    if (element.from.toLowerCase() == token_owner_address.toLowerCase() && element.to.toLowerCase() == erc20contract_address.toLowerCase()) {
                        var tx_date = new Date(element.timeStamp * 1000);
                        var etherscan_link = option_etherscan_api_tx + element.hash;    
                        var tx_status = element.isError == "0" ? "Pass" : "Failed";
                        var html_tr = 
                        `<tr>
                            <td><a target=_blank href="${etherscan_link}">${element.hash}</a></td>
                            <td>${element.from}</td>
                            <td>${element.to}</td>
                            <td>${tx_date.toLocaleString()}</td>
                            <td>${tx_status}</td>
                        </tr>`
                        trans_table.row.add([
                            `<a target=_blank href="${etherscan_link}">${element.hash}</a>`,
                            element.from,
                            element.to,
                            tx_date.toLocaleString(),
                            tx_status
                        ]).draw();

                    }                    
                });
            }
        }
    });
}
