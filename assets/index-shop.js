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


document.querySelector(".nav-shop").onclick = function (e) {
	if (e.target.className != "button-delete") return;
	let item = e.target.closest("li");
	item.remove();
};