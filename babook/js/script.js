// ambil elemen
var keyword = document.getElementById('keyword');
var container = document.getElementById('container');

//
keyword.addEventListerner('keyup', function() {

	// object ajax
	var xhr = new XMLHttpRequest();

	//
	xhr.onreadystatechange = function() {
		if( xhr.readyState == 4 && xhr.status == 200 ) {
			container.innerHTML = xhr.responseText;
		}
	}

	xhr.open('GET', '../indexlogin.php?keyword=' keyword.value, true);
	xhr.send();
});