const ti = gsap.timeline().timeScale(2);

ti.fromTo(
	".header__logo",
	{
		opacity: 0,
	},
	{
		opacity: 1,
		duration: 1.5,
	},
	1
)
	.fromTo(
		".burger-menu",
		{
			opacity: 0,
		},
		{
			opacity: 1,
			duration: 1.5,
		},
		1
	)
	.fromTo(
		".home__title, .home__subtitle, .home__button",
		{
			y: 30,
		},
		{
			y: 0,
			duration: 1.5,
		},
		1
	);
ti.fromTo(
	".nav a",
	{
		opacity: 0,
		x: -100,
	},
	{
		x: 0,
		opacity: 1,
		stagger: 0.15,
	},
	2
)
	.fromTo(
		".input",
		{
			opacity: 0,
		},
		{
			opacity: 1,
			duration: 2,
		},
		3
	)
	.fromTo(
		".input a",
		{
			opacity: 1,
			x: -300,
			rotation: 360,
		},
		{
			x: 0,
			opacity: 1,
			rotation: 0,
			duration: 2,
		},
		4
	)
	.fromTo(
		".home__inner svg",
		{
			scale: 0,
			opacity: 0,
		},
		{
			scale: 1,
			opacity: 1,
			duration: 1,
			stagger: 0.3,
		},
		5
	);

gsap.to(".home__title, .home__subtitle, .home__button", {
	scrollTrigger: {
		trigger: ".header__inner",
		start: "top -30%",
		end: "+=300px",
		scrub: 4,
	},
	x: -160,
	opacity: 0,
});
gsap.from(".banner_get, .banner_get_2", {
	scrollTrigger: {
		trigger: ".get_segment",
		start: "-15% center",
		end: "+=250px",
	},
	scale: 0,
	transformOrigin: "left center",
	// stagger: 1,
});
gsap.from(".img_segment_belive", {
	scrollTrigger: {
		trigger: ".img_segment_belive",
		start: "-30% center",
		end: "+=250px",
	},
	x: -30,
});
gsap.from(".title_block, .main_text, .blocks_segment_belive", {
	scrollTrigger: {
		trigger: ".img_segment_belive",
		start: "top center",
		end: "+=450px",
	},
	y: 20,
	stagger: 0.8,
	
});

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
