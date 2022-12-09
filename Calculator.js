function $(element) {
	return document.getElementById(element);
}

function calcu() {
	$("ans").value = eval($("Qn").value);
}


function check(symbol) {
	var str = $("Qn").value;
	var LastChar = str[str.length - 1];

	var arr = ["(", ")", "/", "+", "-", ".", "*"];
	var symbPos1 = arr.lastIndexOf(LastChar);

	if (symbPos1 == -1) {
		$("Qn").value += symbol;
	}
	else {
		var strNew = str.replace(LastChar, symbol);
		$("Qn").value = strNew;
	}
}