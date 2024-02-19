function cart() {
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
	document
		.querySelector(".nav-shop, .nav-shop-undefined")
		.addEventListener("click", (event) => {
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
function modal() {
	document
		.getElementById("modal-button")
		.addEventListener("click", function () {
			document.getElementById("modal").classList.add("open");
		});
	document.getElementById("modal-esc").addEventListener("click", function () {
		document.getElementById("modal").classList.remove("open");
	});
	document
		.querySelector("#modal .modal__inner")
		.addEventListener("click", (event) => {
			event._isClickWithInModal = true;
		});
	document.getElementById("modal").addEventListener("click", (event) => {
		if (event._isClickWithInModal) return;
		event.currentTarget.classList.remove("open");
	});
}
function modalCategories() {
	document
		.getElementById("profile__links-categories")
		.addEventListener("click", function () {
			document.getElementById("modal-categories").classList.add("open");
		});
	document.getElementById("modal-esc-2").addEventListener("click", function () {
		document.getElementById("modal-categories").classList.remove("open");
	});
	document
		.querySelector(".modal__inner-categories")
		.addEventListener("click", (event) => {
			event._isClickWithInModal = true;
		});
	document
		.getElementById("modal-categories")
		.addEventListener("click", (event) => {
			if (event._isClickWithInModal) return;
			event.currentTarget.classList.remove("open");
		});
}
modal();
modalCategories();
cart();

document.querySelector(".modal__inner-categories").onclick = function (e) {
	if (e.target.className != "modal__inner-delete") return;
	let item = e.target.closest("div");
	item.remove();
};
document.querySelector(".nav-shop").onclick = function (e) {
	if (e.target.className != "button-delete") return;
	let item = e.target.closest("li");
	item.remove();
};

// view all

document.querySelector(".view-all").addEventListener("click", function () {
	let area = document.querySelector(".profile__history");
	let order = document.querySelectorAll(".profile__order");
	if (!area.classList.contains("overflow-x") && order.length >= 6) {
		area.classList.add("overflow-x");
	} else {
		area.classList.remove("overflow-x");
	}
});
