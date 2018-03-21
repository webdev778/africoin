function make_referral_id() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 10; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

var referral = make_referral_id();

jQuery('#referral_link').val(jQuery('#referral_link').val() + '/' + referral);
jQuery('#referral_link_hidden').val(referral);