(function(){
         
	let bout = document.querySelectorAll('.boutonsCarrousel input');
	let carrousel = document.querySelector('.carrousel')
	let noBouton = 0;
	bout[0].checked = true;

	for (const bt of bout) {
		bt.value = noBouton++;
		bt.addEventListener('mousedown', function() {
			carrousel.style.transform = "translateX(" + (-this.value * 100) + "vw)"
	   })
	}

}())