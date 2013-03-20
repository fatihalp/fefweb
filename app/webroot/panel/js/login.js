jQuery(document).ready(function(){
    //http://trevordavis.net/blog/jquery-show-password-plugin/
	jQuery(':password').showPassword({
		linkRightOffset: "7",
		linkTopOffset: "7",
		showPasswordLinkText: 'Show'
	});
	//custom password
    jQuery('.show-password-link').toggle(function(){
		jQuery('.password-showing').removeAttr('style');
		jQuery('.show-password-link').text('Hide');	
	},function(){
		jQuery('.password-showing').hide();
		jQuery('.show-password-link').text('Show');
		});
	jQuery('#password').focus(function(){
		jQuery('.show-password-link').show();
	});
	jQuery('.loader').delay(500).fadeOut(100);
	// bypassing an chrome bug/error
    jQuery('#password').focus(function(){
		jQuery('a.show-password-link').css({visibility : "visible"});   
	});
	jQuery('a.show-password-link').hover(function(){
		jQuery('a.show-password-link').css({visibility : "visible"});
	});
	jQuery('#password').focusout(function(){
		jQuery('a.show-password-link').css({visibility : "hidden"});
	});
	// tabs
	jQuery(".tabs-ui").tabs();
});
 		