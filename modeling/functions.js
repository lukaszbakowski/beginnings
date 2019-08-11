function share() {
	var share = document.getElementById("share");
	share.style.display = "flex";
}
function welcome() {
	setTimeout(function() {document.getElementById("welcome").style.display="none";}, 4997);
}
function load_img(x) {
	var cont = document.getElementById("main");
	var xyz = document.getElementsByTagName("img");
	let images = xyz.length;
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(images == 0) {
				cont.innerHTML = this.responseText;
			} else {
				let add = xyz[images-1];
				add.insertAdjacentHTML("afterend", this.responseText);
			}
		}
	}
		
	let url = "ajax_load.php?images=" + images + "&location=" + x;
	xhttp.open("GET", url, true);
	xhttp.send();
}