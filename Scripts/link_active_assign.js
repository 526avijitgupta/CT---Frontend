$(function (){
	x = window.location.href.split('CT---Frontend/');
	y = x[1].split('.html').join("");
	y = '#' + y; 
	$(y).addClass('active');
	$(y).css('border-right','none');
});