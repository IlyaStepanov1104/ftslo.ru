function Open_blank(Element) {
	for (var i = 1; i <= 24; i++) {
		var blanks = document.getElementById(String(i));
		if (blanks.classList.contains('close')) {
		  	blanks.classList.remove("close");
		} else {
		  	blanks.classList.add("close");
		};
	};
	return false;
};

function Open_pet(Element) {
	for (var i = 25; i <= 32; i++) {
		var blanks = document.getElementById(String(i));
		if (blanks.classList.contains('close')) {
		  	blanks.classList.remove("close");
		} else {
		  	blanks.classList.add("close");
		};
	};
	return false;
};