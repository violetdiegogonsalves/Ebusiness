	function show_text(a_id, text_id, display_type) {		
		if(document.getElementById(text_id).style.display == 'none') {
			document.getElementById(text_id).style.display = display_type;
			document.getElementById(a_id).innerHTML = 'Collape &uArr;';			
		}
		else {
			document.getElementById(text_id).style.display = 'none';
			document.getElementById(a_id).innerHTML = 'Read more ...';
		}		
	}
	
	