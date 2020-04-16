jQuery.fn.inputHints=function(){jQuery(this).each(function(i){jQuery(this).val(jQuery(this).attr('title'));});jQuery(this).focus(function(){if(jQuery(this).val()==jQuery(this).attr('title'))
jQuery(this).val('');}).blur(function(){if(jQuery(this).val()=='')
jQuery(this).val(jQuery(this).attr('title'));});};

jQuery(document).ready(function() {
    jQuery('#edit-name').attr('title','Name');
    jQuery('#edit-subject').attr('title','Subject');
    jQuery('#edit-field-e-mail-und-0-value').attr('title','E-mail');
    jQuery('#user-register-form #edit-mail').attr('title','E-mail');
    jQuery('#edit-field-phone-und-0-value').attr('title','Phone');
    jQuery('#edit-comment-body-und-0-value').attr('title','Comment');
    jQuery('#edit-submit').attr('value','» Submit');
    jQuery('#user-login #edit-pass').attr('value','Password');
    jQuery('#edit-submit').attr('class','submit');
    jQuery('.comment-form .form-item .username').attr('class','comment_username');
    jQuery('#edit-comment-body').append("<p class='hide'>Say something!<br>* Required fields</p>");

	



});


jQuery(document).ready(function() {
    jQuery('input[title], textarea[title]').inputHints();
});