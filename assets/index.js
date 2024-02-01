const ti = gsap.timeline().timeScale(2);

ti.fromTo(
	".header__logo",
	{
		opacity: 0,
		x: -100,
	},
	{
		x: 0,
		opacity: 1,
	},
	1
)
	.fromTo(
		".home",
		{
			scale: 0,
			opacity: 0,
		},
		{
			scale: 1,
			opacity: 1,
			duration: 1,
			stagger: 0.2,
		},
		1
	)
	.fromTo(
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
		".header__right button",
		{
			opacity: 0,
		},
		{
			opacity: 1,
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
		start: "top top",
		scrub: 10,
	},
	x: 160,
	// scale: 1.1,
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
document.querySelector(".nav-shop").addEventListener("click", (event) => {
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
