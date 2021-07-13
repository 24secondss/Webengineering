'use strict';
document.addEventListener('DOMContentLoaded', function () {
	document.Testform.Personen.addEventListener('change', CheckAuswahl);

	function CheckAuswahl() {
		var menu = document.Testform.Personen;
		document.querySelector('output')
			.innerHTML = menu.options[menu.selectedIndex].value;
	}
});