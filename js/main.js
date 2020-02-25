  (function(){	
	var menuCollapsed = document.querySelector(".menu-collapsed");
	function hamburgerMenu() {
		menuCollapsed.classList.toggle("menu-expanded");
	}
	menuCollapsed.addEventListener("click", hamburgerMenu, false);	
})();