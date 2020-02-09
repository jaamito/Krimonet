$(".knet_step").hide();
$(".knet_step:first").show();

$(".knet_register_user_previous_button").on("click", function(){
	$(".knet_user").fadeOut( function(){
		$(".knet_company").fadeIn();	
	});
	
})
$(".knet_register_company_next_button").on("click", function(){
	$(".knet_company").fadeOut( function(){
		$(".knet_user").fadeIn();	
	});
	
})