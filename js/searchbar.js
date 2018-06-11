$(document).ready(function(){
	$("#search-icon").click(function() {
	var random_color = "#";
	var possible = "a12b345c678de90f";
	for (var i = 0; i <= 5; i++)
    	random_color += possible.charAt(Math.floor(Math.random() * possible.length));
	if($("#search").css("width") == "50px")
	{
		$("#search").css("width","450px");
		$("#box3").css("background",random_color);
	}
	else
	{
		$("#search").css("width","50px");
		$("#box3").css("background",random_color);
	}
	})
});
