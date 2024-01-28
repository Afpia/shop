const ti = gsap.timeline()

ti.fromTo(
		".home",
		{
			opacity: 0,
			x: '-100%',
		},
		{
			x: 0,
			opacity: 1,
		}
	).fromTo(".header__logo",
	{
		opacity: 0,
		x: -50,
	},
	{
		x: 0,
		opacity: 1,
	}
).fromTo(
		".nav li",
		{
			opacity: 0,
			x: -50,
		},
		{
			x: 0,
			opacity: 1,
			stagger: 0.05,
		}
	);

