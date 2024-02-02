function cart(){
	document.addEventListener("DOMContentLoaded", function () {
		document.getElementById("burger").addEventListener("click", function () {
			document.querySelector("header").classList.add("open");
			document.querySelector("body").classList.add("close");
		});
	});
	document.addEventListener("DOMContentLoaded", function () {
		document.getElementById("burger-2").addEventListener("click", function () {
			document.querySelector("header").classList.remove("open");
			document.querySelector("body").classList.remove("close");
		});
	});
	document.querySelector(".nav-shop, .nav-shop-undefined").addEventListener("click", (event) => {
		event._isClickWithInNav = true;
	});
	document.getElementById("burger").addEventListener("click", (event) => {
		event._isClickWithInNav = true;
	});
	document.body.addEventListener("click", (event) => {
		if (event._isClickWithInNav) return;
		document.querySelector("header").classList.remove("open");
		document.querySelector("body").classList.remove("close");
	});
}

/* modal */
function modal(){
	document.getElementById("modal-button").addEventListener("click", function () {
		document.getElementById("modal").classList.add("open");
	});
	document.getElementById("modal-esc").addEventListener("click", function () {
		document.getElementById("modal").classList.remove("open");
	});
	document.querySelector("#modal .modal__inner").addEventListener('click', event => {
		event._isClickWithInModal = true;
	})
	document.getElementById("modal").addEventListener('click', event => {
		if (event._isClickWithInModal)return;
		event.currentTarget.classList.remove('open');
	})
}
modal()
cart()