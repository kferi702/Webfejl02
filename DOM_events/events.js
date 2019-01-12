function bovit(){
	
	let urlap = document.getElementById("beformjs");
	console.log(urlap['szoveg'].value);
	
	let p = document.getElementById("bekezdesjs");
	p.innerHTML += '<br/>' + urlap['szoveg'].value;
}


$(document).ready(function(){	
	$("[name = 'bovitjquery']").click(function(){
		let val = $('#beformjquery input:first').val();
		$('#bekezdesjquery').html(val);
	});
});
