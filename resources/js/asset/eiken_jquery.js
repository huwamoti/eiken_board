$(function(){

	$(".lower_content_two").css("display","none");
	$(".lower_content_three").css("display","none");
	$(".minus_two").css("display","none");
	$(".minus_three").css("display","none");
	
 	$(".upper_content2").click(function(){
 		$(".lower_content_two").slideToggle(500);
 		$(".upper_content2").toggleClass("active");
 	if($(".upper_content2").hasClass("active")){
 		$(".plus_two").hide();
 		$(".minus_two").show();
 	}
 	else{
 		$(".minus_two").hide();
 		$(".plus_two").show();
 	}
 	});
 	
 	$(".upper_content3").click(function(){
 		$(".lower_content_three").slideToggle(500);
 		$(".upper_content3").toggleClass("active");
 	if($(".upper_content3").hasClass("active")){
 		$(".plus_three").hide();
 		$(".minus_three").show();
 	}
 	else{
 		$(".minus_three").hide();
 		$(".plus_three").show();
 	}
 	});
});