function onsubmit_register() {
    event.preventDefault();
    var web3 = new Web3();
    var password = $('#password').val();
    console.log(password);
    var secretSeed = '';

    // the seed is stored encrypted by a user-defined password
// var password = prompt('Enter password for encryption', 'password');

if (secretSeed == '') secretSeed = lightwallet.keystore.generateRandomSeed();

// the seed is stored encrypted by a user-defined password
// var password = prompt('Enter password for encryption', 'password');
lightwallet.keystore.deriveKeyFromPassword(password, function (err, pwDerivedKey) {

var ks = new lightwallet.keystore(secretSeed, pwDerivedKey);

// generate five new address/private key pairs
// the corresponding private keys are also encrypted
ks.generateNewAddress(pwDerivedKey, 1);
var addr = ks.getAddresses();

var prv_key = ks.exportPrivateKey(addr, pwDerivedKey);
var keystorage = ks.serialize();

console.log("0x" + addr);
console.log(prv_key);
console.log(keystorage); 
console.log(secretSeed);

$("#addr").val("0x" + addr);
$("#prev_key").val(prv_key);
$("#keystorage").val(keystorage);
$("#secretSeed").val(secretSeed);

// Create a custom passwordProvider to prompt the user to enter their
// password whenever the hooked web3 provider issues a sendTransaction
// call.
// ks.passwordProvider = function (callback) {
//   var pw = prompt("Please enter password", "Password");
//   callback(null, pw);
// };

// Now set ks as transaction_signer in the hooked web3 provider
// and you can start using web3 using the keys/addresses in ks!
$("#form_register").submit();
});

}