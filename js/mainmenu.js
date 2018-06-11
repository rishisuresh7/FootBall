$(document).ready(function(){
	flag = 0;
	$("#icon").click(function(){
		if(flag == 0){
			$("#main").css("box-shadow","inset 0px 0px 0px 40px #0e0f11 ,inset 0px -70px 0px 30px #0e0f11");
			$("#main").css("background-color","rgba(0,0,0,0.2)");
			$("#m1").animate({top: '40%'},200);
			$("#m2").animate({top: '40%'},200);
			$("#m3").animate({top: '40%'},200);
			$("#m4").animate({top: '40%'},200);
			$("#main").css("z-index","999");
			$("#lines").css("background-color","black");
			flag = 1;
		}
		else{
			$("#main").css("box-shadow","inset 0px 0px 0px 0px #0e0f11 ,inset 0px 0px 0px 0px #0e0f11");
			$("#main").css("background-color","rgba(0,0,0,0)");
			$("#m1").animate({top: '100%'},200);
			$("#m2").animate({top: '100%'},200);
			$("#m3").animate({top: '100%'},200);
			$("#m4").animate({top: '100%'},200);
			$("#main").css("z-index","0");
			$("#lines").css("background-color","#7380c1");
			flag = 0;
		}
	});
})