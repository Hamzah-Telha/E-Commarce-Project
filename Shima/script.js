var settings menu = docoment.querySelector(".settings-menu");
var darkBtn = docoment.getElementById("dark-btn");

function settingsMenuToggle(){
	settings menu.classList.toggle("settings-menu-height")
}
darkBtn.onclick = function(){
	darkBtn.classList.toggle("dark-btn-on");
	docoment.body.classList.toggle("dark-them");

	if (localStorage.getItem("them") == "light"){
		localStorage.setItem("them" , "dark");
	}
	else{
		localStorage.setItem("them" , "light");
	}
	}
}


if (localStorage.getItem("them") == "light"){
	darkBtn.classList.remove("dark-btn-on");
	docoment.body.classList.remove("dark-them");
} 
else if(localStorage.getItem("them") == "dark"){
	darkBtn.classList.add("dark-btn-on");
	docoment.body.classList.add("dark-them");
}

else{
	localStorage.setItem("them" , "light");
}
