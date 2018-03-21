$('#form_register').submit(function(event){
    if($('#condition_agree').is(':checked') == false || $('#condition_person').is(':checked') == false){
        alert("By signing up, you must accept our terms and conditions!");
        return false;
    }
});