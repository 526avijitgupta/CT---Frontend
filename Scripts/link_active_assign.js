$(function (){
	url_fname = window.location.href.split('CT---Frontend/');
	fname_active = url_fname[1].split('.php').join("");
	if(fname_active == []) {
		fname_active = '#index';
	}
	else { 
		fname_active = '#' + fname_active; 
	}
	$(fname_active).addClass('active');
	$(fname_active).css('border-right','none');
});