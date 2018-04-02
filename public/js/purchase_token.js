/**
 *  purchase token page module
 *  this page is in form wizard tab mode and have 4 pages
 *  1 - select retailer
 *  2 - barcode scan & add
 *  3 - input discount & quantity
 *  4 - invoice print
 *  
 */
const warning_opts = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-bottom-right",
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

const success_opts = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-bottom-right",
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

var items_selected = []; 	// list with items appended by barcode or history
var cur_item = undefined;	// item selected

/**
 * Data Structure
 * {
        id : 321,
        name : 'Whisky',
        img_url : 'http://127.0.0.1:8000/products/10835/m_5975ad8179309.jpg',
        quantity : 0,
        discount : 0
    }
 */

var g_retailer_id;          // retailer id


function isExist(){
    return $.grep(items_selected, function(item){
        return item.id == cur_item.id;
    }).length > 0;
};

function add_item(){
    // append item to the 'items_selected'
    console.log('----add_item-----');
    
    if(!cur_item)
        return;

    items_selected.push(cur_item);
    
}

function remove_item(index_del){
    if(index_del > -1)
        items_selected.splice(index_del, 1);
    
    updateTotal();
}

function setCurItem(productId, productName, productImg){
    var newItem = {};
    newItem.id = productId;
    newItem.name = productName;
    newItem.img_url = productImg;
    newItem.quantity = 0;
    newItem.discount = 0;

    cur_item = newItem;
}

function updateTotal(){
    cnt = items_selected.length;
    $('#cart_total').val(cnt);
}

function getIndexByItemNo(itemNo){
    var index = items_selected.findIndex((obj) => obj.id == itemNo);
    return index;
}

function updateDataById(id, property, value){
    var index = items_selected.findIndex((obj) => obj.id == id);
    if(index >= 0)
        items_selected[index][property] = value;
}
/**
 * Main Page - Form Wizard
 * Features
 *      
 */


$(function(){

    var $sel_retailer = $('#select2_retailer'),
    opts = {
        allowClear: attrDefault($sel_retailer, 'allowClear', false)
    };
    
    $sel_retailer.select2(opts);
    $sel_retailer.addClass('visible');

    // Form Wizard Setup
    if($.isFunction($.fn.bootstrapWizard))
    {
        var $myWizard = $("#rootwizard-2");

        // $(".form-wizard").each(function(i, el)
        // {
            var $this = $myWizard,
                $progress = $this.find(".steps-progress div"),
                _index = $this.find('> ul > li.active').index();

            // Validation        
            var checkWizardValidaionNext = function(tab, navigation, index){

                if(index == 1 && !g_retailer_id){
                    toastr.warning("Please select a retailer", null, warning_opts);
                    return false;
                }                

                if(index == 2 && !items_selected.length){
                    toastr.warning("Empty cart!, Please add one item at least", null, warning_opts);
                    return false;
                }                
            }

            $this.bootstrapWizard({
                tabClass: "",
                onTabShow: function($tab, $navigation, index)
                {							
                    setCurrentProgressTab($this, $navigation, $tab, $progress, index);

                    if (index == 0){
                        $('#select2_retailer').select2('open');
                        
                    }

                    if (index == 1){
                        $('#txt_barcode').focus();
                        tbl_pre_cart_init();
                        
                    }
                    // Checkout
                    if (index == 2){                        
                        tbl_cart_init();
                        $('.cart-list :input').first().focus();
                        $('.cart-list :input').first().select();
                    }
                },

                onNext: checkWizardValidaionNext,
                onTabClick: function(){return false;}
            });

            $this.data('bootstrapWizard').show( _index );

            /*$(window).on('neon.resize', function()
            {
                $this.data('bootstrapWizard').show( _index );
            });*/

        // });
    }

    // Root Wizard Current Tab
    function setCurrentProgressTab($rootwizard, $nav, $tab, $progress, index)
    {
        $tab.prevAll().addClass('completed');
        $tab.nextAll().removeClass('completed');

        var items      	  = $nav.children().length,
            pct           = parseInt((index+1) / items * 100, 10),
            $first_tab    = $nav.find('li:first-child'),
            margin        = (1/(items*2) * 100) + '%';//$first_tab.find('span').position().left + 'px';

        if( $first_tab.hasClass('active'))
        {
            $progress.width(0);
        }
        else
        {
            if(rtl())
            {
                $progress.width( $progress.parent().outerWidth(true) - $tab.prev().position().left - $tab.find('span').width()/2 );
            }
            else
            {
                $progress.width( ((index-1) /(items-1)) * 100 + '%' ); //$progress.width( $tab.prev().position().left - $tab.find('span').width()/2 );
            }
        }


        $progress.parent().css({
            marginLeft: margin,
            marginRight: margin
        });

        /*var m = $first_tab.find('span').position().left - $first_tab.find('span').width() / 2;

        $rootwizard.find('.tab-content').css({
            marginLeft: m,
            marginRight: m
        });*/
    }    

    function tbl_cart_init() {
        var cart_len = items_selected.length;

        if(cart_len < 1)
            return;

        // initialise cart list
        $('.table-cart table tbody.cart-list').empty();

        // add
        $.each(items_selected, function(i, item){
            console.log(`${i+1}: item: ${item}`);
            addItem2CheckoutList(item);
        })
    }

    function addItem2CheckoutList(item) {
        var tableCart = $(".table-cart");
        
        $("tr.hide td.itemNo").text(item.id);
        $("tr.hide td.itemName").text(item.name);        
        $("tr.hide .itemImage").find("img").attr('src', item.img_url);        
        $("tr.hide td.itemQuantity input").val(item.quantity);
        $("tr.hide td.itemDiscount input").val(item.discount);

        // add row
        var $clone = tableCart.find('tr.hide').clone(true).removeClass('hide');
        tableCart.find('table tbody.cart-list').append($clone);        
    }
});

/**
 * Page 1 - Select Retailer
 * Features
 *      - To select one in the retailer list
 *      - To show some information
 */

$(function(){

    // Select2 setup
    var $this = $('#select2_retailer');
    // opts = {
    //     allowClear: attrDefault($this, 'allowClear', false)
    // };
    
    // $this.select2(opts);
    // $this.addClass('visible');

    // Bind an event
    $this.on('change', function (e) { 			
        var logo_url = $('#select2_retailer').find(':selected').data('logo-attribute');
        $("#retailer_logo").attr('src', logo_url);

        // set retailer id
        g_retailer_id = $('#select2_retailer').val();
        
    });
});


/**
 * Page 2 - Scan Barcode & Add Product
 * Features
 *      - To recognize barcode info and display product image and name
 *      - To add product to the list
 *      - To remove product from the list
 *      - To show preivous transactions 
 */

 $(function(){

     // Select2 setup
     var $this = $('#select2_item_history'),
     opts = {
         allowClear: attrDefault($this, 'allowClear', false)
     };
     
     $this.select2(opts);
     $this.addClass('visible');
 
     // Bind an event
     $this.on('change', function (e) { 			
         // var logo_url = $('#select2_retailer').find(':selected').data('logo-attribute');
         // $("#retailer_logo").attr('src', logo_url);				
     });

     // table with products selected 
     var $table2 = jQuery( "#table-selected" );
    
        // Highlighted rows
        $table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
            var $this = $(el),
                $p = $this.closest('tr');
            
            $( el ).on( 'change', function() {
                var is_checked = $this.is(':checked');
                
                $p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
            } );
        } );
          
    // remove item from the cart
    $('td.item-action a').click(function () {
        var i;
        i = parseInt($(this).parents('tr').find('.item-no').text());
        console.log(i);

        if(i > 0)
            remove_item(i-1);

        // $(this).parents('tr').detach();

        // Re render
        tbl_pre_cart_init();
    });

    $("#txt_barcode").on('keypress', function (e) {
        if (e.which == 13) {
            e.preventDefault();
            // Get all focusable elements on the page
            $('#btn_scan').click();
            $(this).val('');
            $(this).focus();
        }
    });
    
 });

function tbl_pre_cart_init(){
    var cart_len = items_selected.length;

    // if(cart_len < 1)
    //     return;

    // initialise cart list
    $('#table-selected tbody').empty();

    // add
    $.each(items_selected, function(i, item){
        console.log(`${i+1}: item: ${item}`);
        addItem2PreCart(i, item);
    })

    updateTotal();
}

function addItem2PreCart(i, item) {
    // append row to the "table-selected"
    var tableSelected = $("#table-selected");

    // add row
    $("#table-selected tr.hide td.item-no").text(i+1);
    $("#table-selected tr.hide td.item-pic").find("img").attr('src', item.img_url);
    $("#table-selected tr.hide td.item-name").text(item.name);

    var $clone = tableSelected.find('tr.hide').clone(true).removeClass('hide');
    tableSelected.find('tbody').append($clone);    
}

 /**
 * Page 3 - Checkout
 * Features
 *      - To display cart
 *      - To input quantity and discount(AFT) per each item
 *      - To calculate automatically whenever input changes
 *      - To show sum information 
 *              + Total
 *              + Fee 
 *              + Grand Total
 *      - To order purchase
 */

 $(function(){
    
    // Quantity Change Event
    $(".table-cart .itemQuantity > :input").on('input', function(e){
        var item_quantity = $(this).val();
        
        // update data
        var item_id = $(this).parent().siblings(".itemNo").text();    
        updateDataById(item_id, "quantity", item_quantity);

        var item_discount=parseInt($(this).parent().siblings(".itemDiscount").children("input").val());
        var item_total_aft = item_discount * item_quantity;
        // var item_total = item_price * item_quantity;
        // console.log(item_total + ' ' + item_total_aft);
        
        // $(this).parent().siblings(".itemTotal").children("span").text(item_total.toFixed(2));
        $(this).parent().siblings(".itemAFT").children("span").text(item_total_aft);
        updateGrandTotal();
    });

    // Discount Change Event
    $(".table-cart .itemDiscount > :input").on('input', function(e){
        var item_discount = $(this).val();

        // update data
        var item_id = $(this).parent().siblings(".itemNo").text();    
        updateDataById(item_id, "discount", item_discount);


        var item_quantity=parseInt($(this).parent().siblings(".itemQuantity").children("input").val());
        // var item_price =  parseFloat($(this).parent().siblings(".itemPrice").children("span").text());
            
        var item_total_aft = item_discount * item_quantity;
        // var item_total = item_price * item_quantity;
        // console.log(item_total + ' ' + item_total_aft);
        
        // $(this).parent().siblings(".itemTotal").children("span").text(item_total.toFixed(2));
        $(this).parent().siblings(".itemAFT").children("span").text(item_total_aft);

        updateGrandTotal();
    });

    // Remove Item
    $('.itemRemove a').click(function () {
        var itemNo;
        itemNo = parseInt($(this).parents('tr').find('td.itemNo').text());
        console.log(itemNo);

        var i = getIndexByItemNo(itemNo);

        remove_item(i);        

        $(this).parents('tr').detach();

        updateGrandTotal();
    });    



});

function updateGrandTotal(){
    // calcTotal();
    calcAFT();
}
function calcTotal(){
    var totalBill = 0;
    $('.cart-list td.itemTotal').each(function(){
        var value = $(this).find("span").text();
        if(!isNaN(value) && value.length != 0) {
            totalBill += parseFloat(value);
        }
    });
    
    console.log(totalBill);
    $('tr.totalBill .itemTotal span').text(totalBill);
}

function calcAFT(){
    var totalAFT = 0
    $('.cart-list td.itemAFT').each(function(){
        var value = $(this).find("span").text();
        if(!isNaN(value) && value.length != 0) {
            totalAFT += parseInt(value);
        }
    });
    fee = totalAFT * 0.05;
    grand = totalAFT + fee;
    
    console.log('test------------');
    console.log(totalAFT);
    $('#totalAFT').text(displayAFT(totalAFT));
    $('#feeBill').text(displayAFT(fee));
    $('#grandBill').text(displayAFT(grand));
}

function displayAFT(m) {
    return m.toFixed(2);
}

// enter next focus

// select all on focus
$(function(){
	$(".cart-list input").focus(
        function() { 
            $(this).select(); 
        } 
    );
})

// register jQuery extension
jQuery.extend(jQuery.expr[':'], {
    focusable: function (el, index, selector) {
        return $(el).is('.cart-list :input');
    }
});

$(document).on('keypress', 'input', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        // Get all focusable elements on the page
        var $canfocus = $(':focusable');
        var index = $canfocus.index(document.activeElement) + 1;
        if (index >= $canfocus.length) index = 0;
        $canfocus.eq(index).focus();
        $canfocus.eq(index).select();
    }
});

 /**
 * Page 4 - Invoice
 * Features
 *      - To display invoice
 *      - 
 *
 */