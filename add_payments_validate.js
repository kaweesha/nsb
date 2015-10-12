function nsb_id_check() {
	
	var nsb_id = document.getElementById("nsb_id").value;
	var pattern = /^[0-9]+$/;
	if (nsb_id.match(pattern)){
		
		if (nsb_id.length == 4) {
			return true;
		}
		else {
			alert ("Incorrect ID length");
			return false;
		}
	}
	else {
		alert ("Please enter only numbers")
		return false;
	}

}