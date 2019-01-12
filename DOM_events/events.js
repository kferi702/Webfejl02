function bovit(){
	
	let urlap = document.getElementById("beformjs");
	console.log(urlap['szoveg'].value);
	
	let p = document.getElementById("bekezdesjs");
	p.innerHTML += '<br/>' + urlap['szoveg'].value;
}


$(document).ready(function(){
	
	$("[name = 'bovitjquery']").click(function(){
		let val = $('#beformjquery input:first').val();
		$('#bekezdesjquery').append(val+'<br/>');
	});
	
	$('input').focus(function(){
		$(this).toggleClass("aktiv");
	});
	
	$('input').blur(function(){
		$(this).toggleClass("aktiv");
	});
});
