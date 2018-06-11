function searchitem() {
	var searchtxt = $("input[type='search']").val();
	$.post("search.php", {searchVal: searchtxt}, function(output){ //serachVal is the variable being posted.
		$("#output").html(output);
	});
}