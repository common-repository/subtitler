function subtitler(bodies){
	body = bodies.split(',');
	body_string = '';
	for(i in body)
		body_string += '.'+body[i]+' img,';
	
	div = new Array();
	for(i=0;i<$(body_string).length;i++){
		if($(body_string)[i].getAttribute('alt') == '')
			continue;
		
		div[i] = document.createElement('div');
		floating = document.defaultView.getComputedStyle($(body_string)[0],null).getPropertyValue('float');
		div[i].setAttribute('style','width:'+($(body_string)[i].clientWidth-6)+'px;float:'+floating+';');
		div[i].setAttribute('class','subtitle');
		div[i].innerHTML = $(body_string)[i].getAttribute('alt');
		
		$(body_string)[i].parentNode.insertBefore(div[i], $(body_string)[i].nextSibling);
	}
}