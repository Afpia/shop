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



/* counter */

const counter = document.querySelector("[data-counter]");
const minus = document.querySelector('[data-action="minus"]');
const plus = document.querySelector('[data-action="plus"]');

minus.addEventListener("click", function () {
	if (parseInt(counter.value) > 1) {
		counter.value = --counter.value;
	}
});

plus.addEventListener("click", function () {
	if (parseInt(counter.value) < 10) {
		counter.value = ++counter.value;
	}
});

document.querySelector(".nav-shop").onclick = function (e) {
	if (e.target.className != "button-delete") return;
	let item = e.target.closest("li");
	item.remove();
};
