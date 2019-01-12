function bovit(){
	
	let urlap = document.getElementById("beformjs");
	console.log(urlap['szoveg'].value);
	
	let p = document.getElementById("bekezdesjs");
	p.innerHTML = urlap['szoveg'].value;
}
