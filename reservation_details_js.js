// JavaScript Document

function name_check() {
	
	var name = document.getElementById("name").value;
	if (name.length <= 50) {
		
		var pattern = /^[a-zA-Z|\s]+$/;
		if (!name.match(pattern)){
			alert ("Please enter only letters and spaces");
			return false;
		}
		else {
			return true;
		}
	
	}
	else {
		alert ("Too many characters. Maximum number of characters is 50.")
		return false;
	}

}

function nsbID_check() {
	
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

function NIC_check() {
	var nic = document.getElementById("nic").value;
	var pattern = /^[0-9|V|v]+$/;
	if (nic.match(pattern)) {
		if (nic.length == 10) {
			if (nic.indexOf("v") != 9) {
				alert ("Incorrect nic number.");
				return false;
			}
			else {
				return true;
			}
		}
		else {
			alert ("Incorrect length.");
			return false;
		}
	}
	else {
		alert ("Please enter only numbers and a V.");
		return false;
	}
}

function branch_check() {
	
	var branch = document.getElementById("branch").value;
	if (branch.length <= 20) {
		
		var pattern = /^[a-zA-Z|\s]+$/;
		if (!branch.match(pattern)){
			alert ("Please enter only letters and spaces");
			return false;
		}
		else {
			return true;
		}
	
	}
	else {
		alert ("Too many characters. Maximum number of characters is 20.")
		return false;
	}

}

function no_of_people_check() {
	
	var no_of_people = document.getElementById("no_of_people").value;
	var pattern = /^[0-9]+$/;
	if (no_of_people.match(pattern)){
		
		if (no_of_people <= 10) {
			return true;
		}
		else {
			alert ("Too many people");
			return false;
		}
	}
	else {
		alert ("Please enter only integer numbers")
		return false;
	}
	
}