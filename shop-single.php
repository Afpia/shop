<?php
require_once __DIR__ . '/php/helpers.php';

$product = currentProduct($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop-single</title>
	<link rel="icon" href="./img/favicon.png" />
	<link rel="stylesheet" href="./assets/reset.css" />
	<link rel="stylesheet" href="./assets/shop-single.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap" rel="stylesheet" />
</head>

<body>
	<div class="wrapper">
		<?php include_once __DIR__ . '/components/header.php' ?>
	</div>
	<section class="banner-shop_single">
		<div class="banner-shop_single__inner">
			<div class="wrapper">
				<p>Shop Single</p>
			</div>
		</div>
	</section>
	<section class='product'>
		<div class='wrapper'>
			<div class="product__inner">
				<div class="categories__picture-33">
					<button class="product__button">Millets</button>
				</div>
				<div class="product__about">
					<h2>Health Pistachios</h2>
					<div class="categories__star">
						<svg width="84" height="19" viewBox="0 0 84 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.67806 3.09367C8.98566 2.18997 10.2638 2.18998 10.5714 3.09367L11.5549 5.98313C11.6929 6.3884 12.0735 6.66091 12.5016 6.66091H15.5818C16.5617 6.66091 16.9569 7.92416 16.1517 8.48263L13.7409 10.1546C13.3741 10.409 13.2203 10.8758 13.3642 11.2985L14.3036 14.0586C14.6145 14.9718 13.5798 15.7523 12.7871 15.2025L10.1946 13.4046C9.85187 13.1668 9.39758 13.1668 9.05483 13.4046L6.46235 15.2025C5.66969 15.7523 4.63496 14.9718 4.9458 14.0586L5.88528 11.2985C6.02915 10.8758 5.87539 10.409 5.50851 10.1546L3.09777 8.48263C2.29254 7.92416 2.68772 6.66091 3.66767 6.66091H6.74788C7.17598 6.66091 7.55659 6.3884 7.69454 5.98313L8.67806 3.09367Z" fill="#FFA858" />
							<path d="M24.8607 3.23964C25.16 2.31832 26.4635 2.31832 26.7628 3.23964L27.6499 5.96992C27.7838 6.38194 28.1677 6.66091 28.601 6.66091H31.4717C32.4404 6.66091 32.8432 7.90051 32.0595 8.46992L29.737 10.1574C29.3865 10.412 29.2398 10.8634 29.3737 11.2754L30.2608 14.0058C30.5602 14.9271 29.5057 15.6932 28.722 15.1238L26.3995 13.4364C26.049 13.1817 25.5744 13.1817 25.2239 13.4364L22.9015 15.1238C22.1178 15.6932 21.0633 14.9271 21.3627 14.0058L22.2498 11.2754C22.3837 10.8634 22.237 10.412 21.8865 10.1574L19.564 8.46991C18.7803 7.90051 19.1831 6.66091 20.1518 6.66091H23.0225C23.4558 6.66091 23.8397 6.38194 23.9736 5.96992L24.8607 3.23964Z" fill="#FFA858" />
							<path d="M41.0521 3.09367C41.3597 2.18997 42.6378 2.18998 42.9454 3.09367L43.9289 5.98313C44.0669 6.3884 44.4475 6.66091 44.8756 6.66091H47.9558C48.9357 6.66091 49.3309 7.92416 48.5257 8.48263L46.115 10.1546C45.7481 10.409 45.5943 10.8758 45.7382 11.2985L46.6777 14.0586C46.9885 14.9718 45.9538 15.7523 45.1611 15.2025L42.5686 13.4046C42.2259 13.1668 41.7716 13.1668 41.4289 13.4046L38.8364 15.2025C38.0437 15.7523 37.009 14.9718 37.3198 14.0586L38.2593 11.2985C38.4032 10.8758 38.2494 10.409 37.8825 10.1546L35.4718 8.48263C34.6666 7.92416 35.0617 6.66091 36.0417 6.66091H39.1219C39.55 6.66091 39.9306 6.3884 40.0686 5.98313L41.0521 3.09367Z" fill="#FFA858" />
							<path d="M57.2347 3.23964C57.5341 2.31832 58.8375 2.31832 59.1368 3.23964L60.0239 5.96992C60.1578 6.38194 60.5418 6.66091 60.975 6.66091H63.8457C64.8145 6.66091 65.2172 7.90051 64.4335 8.46992L62.111 10.1574C61.7605 10.412 61.6139 10.8634 61.7477 11.2754L62.6349 14.0058C62.9342 14.9271 61.8797 15.6932 61.096 15.1238L58.7736 13.4364C58.4231 13.1817 57.9485 13.1817 57.598 13.4364L55.2755 15.1238C54.4918 15.6932 53.4373 14.9271 53.7367 14.0058L54.6238 11.2754C54.7577 10.8634 54.611 10.412 54.2605 10.1574L51.938 8.46991C51.1543 7.90051 51.5571 6.66091 52.5258 6.66091H55.3966C55.8298 6.66091 56.2137 6.38194 56.3476 5.96992L57.2347 3.23964Z" fill="#FFA858" />
							<path d="M73.4261 3.09367C73.7337 2.18997 75.0118 2.18998 75.3194 3.09367L76.303 5.98313C76.4409 6.3884 76.8215 6.66091 77.2496 6.66091H80.3298C81.3098 6.66091 81.705 7.92416 80.8997 8.48263L78.489 10.1546C78.1221 10.409 77.9683 10.8758 78.1122 11.2985L79.0517 14.0586C79.3625 14.9718 78.3278 15.7523 77.5351 15.2025L74.9427 13.4046C74.5999 13.1668 74.1456 13.1668 73.8029 13.4046L71.2104 15.2025C70.4177 15.7523 69.383 14.9718 69.6938 14.0586L70.6333 11.2985C70.7772 10.8758 70.6234 10.409 70.2566 10.1546L67.8458 8.48263C67.0406 7.92416 67.4358 6.66091 68.4157 6.66091H71.4959C71.924 6.66091 72.3046 6.3884 72.4426 5.98313L73.4261 3.09367Z" fill="#FFA858" />
						</svg>
					</div>
					<div class="product__left">
						<p class="product__cost">$20.00</p>
						<p class="product__sale">$13.00</p>
					</div>
					<p>Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
					<div class="product__buy">
						<p>Quantity:</p>
						<input type="number" min="0" placeholder="1" step="1" max="10" required>
						<a href="./">
							<button class="shop_now">
								Load More
								<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="9.5" cy="9.5" r="9.5" fill="#335B6B" />
									<path d="M9.47641 6.12891L12.871 9.19342L9.47641 12.2579M12.3995 9.19342H5.51611" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="product__footer">
				<div class="product__buttons">
					<button class="product-green">Product Description</button>
					<button class="product-white">Additional Info</button>
				</div>
				<p>Welcome to the world of natural and organic. Here you can discover the bounty of nature. We have grown on the principles of health, ecology, and care. We aim to give our customers a healthy chemical-free meal for perfect nutrition. It offers about 8–10% carbs. Simple sugars — such as glucose and fructose — make up 70% and 80% of the carbs in raw.</p>
			</div>
		</div>
	</section>
	<section class='categories'>
		<div class='wrapper'>
			<h2>Related Products</h2>
			<div class="categories__inner">
				<a href="./shop-single.php?id=1 ">
					<div class="categories__list">
						<button class="categories__button">Vegetable</button>
						<div class="categories__picture"></div>
						<h3>Calabrese Broccoli</h3>
						<hr class="categories__hr" />
						<div class="categories__footer">
							<div class="categories__left">
								<p class="categories__cost">$20.00</p>
								<p class="categories__sale">$13.00</p>
							</div>
							<div class="categories__star">
								<svg width="84" height="19" viewBox="0 0 84 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.67806 3.09367C8.98566 2.18997 10.2638 2.18998 10.5714 3.09367L11.5549 5.98313C11.6929 6.3884 12.0735 6.66091 12.5016 6.66091H15.5818C16.5617 6.66091 16.9569 7.92416 16.1517 8.48263L13.7409 10.1546C13.3741 10.409 13.2203 10.8758 13.3642 11.2985L14.3036 14.0586C14.6145 14.9718 13.5798 15.7523 12.7871 15.2025L10.1946 13.4046C9.85187 13.1668 9.39758 13.1668 9.05483 13.4046L6.46235 15.2025C5.66969 15.7523 4.63496 14.9718 4.9458 14.0586L5.88528 11.2985C6.02915 10.8758 5.87539 10.409 5.50851 10.1546L3.09777 8.48263C2.29254 7.92416 2.68772 6.66091 3.66767 6.66091H6.74788C7.17598 6.66091 7.55659 6.3884 7.69454 5.98313L8.67806 3.09367Z" fill="#FFA858" />
									<path d="M24.8607 3.23964C25.16 2.31832 26.4635 2.31832 26.7628 3.23964L27.6499 5.96992C27.7838 6.38194 28.1677 6.66091 28.601 6.66091H31.4717C32.4404 6.66091 32.8432 7.90051 32.0595 8.46992L29.737 10.1574C29.3865 10.412 29.2398 10.8634 29.3737 11.2754L30.2608 14.0058C30.5602 14.9271 29.5057 15.6932 28.722 15.1238L26.3995 13.4364C26.049 13.1817 25.5744 13.1817 25.2239 13.4364L22.9015 15.1238C22.1178 15.6932 21.0633 14.9271 21.3627 14.0058L22.2498 11.2754C22.3837 10.8634 22.237 10.412 21.8865 10.1574L19.564 8.46991C18.7803 7.90051 19.1831 6.66091 20.1518 6.66091H23.0225C23.4558 6.66091 23.8397 6.38194 23.9736 5.96992L24.8607 3.23964Z" fill="#FFA858" />
									<path d="M41.0521 3.09367C41.3597 2.18997 42.6378 2.18998 42.9454 3.09367L43.9289 5.98313C44.0669 6.3884 44.4475 6.66091 44.8756 6.66091H47.9558C48.9357 6.66091 49.3309 7.92416 48.5257 8.48263L46.115 10.1546C45.7481 10.409 45.5943 10.8758 45.7382 11.2985L46.6777 14.0586C46.9885 14.9718 45.9538 15.7523 45.1611 15.2025L42.5686 13.4046C42.2259 13.1668 41.7716 13.1668 41.4289 13.4046L38.8364 15.2025C38.0437 15.7523 37.009 14.9718 37.3198 14.0586L38.2593 11.2985C38.4032 10.8758 38.2494 10.409 37.8825 10.1546L35.4718 8.48263C34.6666 7.92416 35.0617 6.66091 36.0417 6.66091H39.1219C39.55 6.66091 39.9306 6.3884 40.0686 5.98313L41.0521 3.09367Z" fill="#FFA858" />
									<path d="M57.2347 3.23964C57.5341 2.31832 58.8375 2.31832 59.1368 3.23964L60.0239 5.96992C60.1578 6.38194 60.5418 6.66091 60.975 6.66091H63.8457C64.8145 6.66091 65.2172 7.90051 64.4335 8.46992L62.111 10.1574C61.7605 10.412 61.6139 10.8634 61.7477 11.2754L62.6349 14.0058C62.9342 14.9271 61.8797 15.6932 61.096 15.1238L58.7736 13.4364C58.4231 13.1817 57.9485 13.1817 57.598 13.4364L55.2755 15.1238C54.4918 15.6932 53.4373 14.9271 53.7367 14.0058L54.6238 11.2754C54.7577 10.8634 54.611 10.412 54.2605 10.1574L51.938 8.46991C51.1543 7.90051 51.5571 6.66091 52.5258 6.66091H55.3966C55.8298 6.66091 56.2137 6.38194 56.3476 5.96992L57.2347 3.23964Z" fill="#FFA858" />
									<path d="M73.4261 3.09367C73.7337 2.18997 75.0118 2.18998 75.3194 3.09367L76.303 5.98313C76.4409 6.3884 76.8215 6.66091 77.2496 6.66091H80.3298C81.3098 6.66091 81.705 7.92416 80.8997 8.48263L78.489 10.1546C78.1221 10.409 77.9683 10.8758 78.1122 11.2985L79.0517 14.0586C79.3625 14.9718 78.3278 15.7523 77.5351 15.2025L74.9427 13.4046C74.5999 13.1668 74.1456 13.1668 73.8029 13.4046L71.2104 15.2025C70.4177 15.7523 69.383 14.9718 69.6938 14.0586L70.6333 11.2985C70.7772 10.8758 70.6234 10.409 70.2566 10.1546L67.8458 8.48263C67.0406 7.92416 67.4358 6.66091 68.4157 6.66091H71.4959C71.924 6.66091 72.3046 6.3884 72.4426 5.98313L73.4261 3.09367Z" fill="#FFA858" />
								</svg>
							</div>
						</div>
					</div>
				</a>
				<a href="./shop-single.php?id=2">
					<div class="categories__list">
						<button class="categories__button">Fresh</button>
						<div class="categories__picture-2"></div>
						<h3>Fresh Banana Fruites</h3>
						<hr class="categories__hr" />
						<div class="categories__footer">
							<div class="categories__left">
								<p class="categories__cost">$20.00</p>
								<p class="categories__sale">$14.00</p>
							</div>
							<div class="categories__star">
								<svg width="84" height="19" viewBox="0 0 84 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.67806 3.09367C8.98566 2.18997 10.2638 2.18998 10.5714 3.09367L11.5549 5.98313C11.6929 6.3884 12.0735 6.66091 12.5016 6.66091H15.5818C16.5617 6.66091 16.9569 7.92416 16.1517 8.48263L13.7409 10.1546C13.3741 10.409 13.2203 10.8758 13.3642 11.2985L14.3036 14.0586C14.6145 14.9718 13.5798 15.7523 12.7871 15.2025L10.1946 13.4046C9.85187 13.1668 9.39758 13.1668 9.05483 13.4046L6.46235 15.2025C5.66969 15.7523 4.63496 14.9718 4.9458 14.0586L5.88528 11.2985C6.02915 10.8758 5.87539 10.409 5.50851 10.1546L3.09777 8.48263C2.29254 7.92416 2.68772 6.66091 3.66767 6.66091H6.74788C7.17598 6.66091 7.55659 6.3884 7.69454 5.98313L8.67806 3.09367Z" fill="#FFA858" />
									<path d="M24.8607 3.23964C25.16 2.31832 26.4635 2.31832 26.7628 3.23964L27.6499 5.96992C27.7838 6.38194 28.1677 6.66091 28.601 6.66091H31.4717C32.4404 6.66091 32.8432 7.90051 32.0595 8.46992L29.737 10.1574C29.3865 10.412 29.2398 10.8634 29.3737 11.2754L30.2608 14.0058C30.5602 14.9271 29.5057 15.6932 28.722 15.1238L26.3995 13.4364C26.049 13.1817 25.5744 13.1817 25.2239 13.4364L22.9015 15.1238C22.1178 15.6932 21.0633 14.9271 21.3627 14.0058L22.2498 11.2754C22.3837 10.8634 22.237 10.412 21.8865 10.1574L19.564 8.46991C18.7803 7.90051 19.1831 6.66091 20.1518 6.66091H23.0225C23.4558 6.66091 23.8397 6.38194 23.9736 5.96992L24.8607 3.23964Z" fill="#FFA858" />
									<path d="M41.0521 3.09367C41.3597 2.18997 42.6378 2.18998 42.9454 3.09367L43.9289 5.98313C44.0669 6.3884 44.4475 6.66091 44.8756 6.66091H47.9558C48.9357 6.66091 49.3309 7.92416 48.5257 8.48263L46.115 10.1546C45.7481 10.409 45.5943 10.8758 45.7382 11.2985L46.6777 14.0586C46.9885 14.9718 45.9538 15.7523 45.1611 15.2025L42.5686 13.4046C42.2259 13.1668 41.7716 13.1668 41.4289 13.4046L38.8364 15.2025C38.0437 15.7523 37.009 14.9718 37.3198 14.0586L38.2593 11.2985C38.4032 10.8758 38.2494 10.409 37.8825 10.1546L35.4718 8.48263C34.6666 7.92416 35.0617 6.66091 36.0417 6.66091H39.1219C39.55 6.66091 39.9306 6.3884 40.0686 5.98313L41.0521 3.09367Z" fill="#FFA858" />
									<path d="M57.2347 3.23964C57.5341 2.31832 58.8375 2.31832 59.1368 3.23964L60.0239 5.96992C60.1578 6.38194 60.5418 6.66091 60.975 6.66091H63.8457C64.8145 6.66091 65.2172 7.90051 64.4335 8.46992L62.111 10.1574C61.7605 10.412 61.6139 10.8634 61.7477 11.2754L62.6349 14.0058C62.9342 14.9271 61.8797 15.6932 61.096 15.1238L58.7736 13.4364C58.4231 13.1817 57.9485 13.1817 57.598 13.4364L55.2755 15.1238C54.4918 15.6932 53.4373 14.9271 53.7367 14.0058L54.6238 11.2754C54.7577 10.8634 54.611 10.412 54.2605 10.1574L51.938 8.46991C51.1543 7.90051 51.5571 6.66091 52.5258 6.66091H55.3966C55.8298 6.66091 56.2137 6.38194 56.3476 5.96992L57.2347 3.23964Z" fill="#FFA858" />
									<path d="M73.4261 3.09367C73.7337 2.18997 75.0118 2.18998 75.3194 3.09367L76.303 5.98313C76.4409 6.3884 76.8215 6.66091 77.2496 6.66091H80.3298C81.3098 6.66091 81.705 7.92416 80.8997 8.48263L78.489 10.1546C78.1221 10.409 77.9683 10.8758 78.1122 11.2985L79.0517 14.0586C79.3625 14.9718 78.3278 15.7523 77.5351 15.2025L74.9427 13.4046C74.5999 13.1668 74.1456 13.1668 73.8029 13.4046L71.2104 15.2025C70.4177 15.7523 69.383 14.9718 69.6938 14.0586L70.6333 11.2985C70.7772 10.8758 70.6234 10.409 70.2566 10.1546L67.8458 8.48263C67.0406 7.92416 67.4358 6.66091 68.4157 6.66091H71.4959C71.924 6.66091 72.3046 6.3884 72.4426 5.98313L73.4261 3.09367Z" fill="#FFA858" />
								</svg>
							</div>
						</div>
					</div>
				</a>
				<a href="./shop-single.php?id=3">
					<div class="categories__list">
						<button class="categories__button">Millets</button>
						<div class="categories__picture-3"></div>
						<h3>White Nuts</h3>
						<hr class="categories__hr" />
						<div class="categories__footer">
							<div class="categories__left">
								<p class="categories__cost">$20.00</p>
								<p class="categories__sale">$15.00</p>
							</div>
							<div class="categories__star">
								<svg width="84" height="19" viewBox="0 0 84 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.67806 3.09367C8.98566 2.18997 10.2638 2.18998 10.5714 3.09367L11.5549 5.98313C11.6929 6.3884 12.0735 6.66091 12.5016 6.66091H15.5818C16.5617 6.66091 16.9569 7.92416 16.1517 8.48263L13.7409 10.1546C13.3741 10.409 13.2203 10.8758 13.3642 11.2985L14.3036 14.0586C14.6145 14.9718 13.5798 15.7523 12.7871 15.2025L10.1946 13.4046C9.85187 13.1668 9.39758 13.1668 9.05483 13.4046L6.46235 15.2025C5.66969 15.7523 4.63496 14.9718 4.9458 14.0586L5.88528 11.2985C6.02915 10.8758 5.87539 10.409 5.50851 10.1546L3.09777 8.48263C2.29254 7.92416 2.68772 6.66091 3.66767 6.66091H6.74788C7.17598 6.66091 7.55659 6.3884 7.69454 5.98313L8.67806 3.09367Z" fill="#FFA858" />
									<path d="M24.8607 3.23964C25.16 2.31832 26.4635 2.31832 26.7628 3.23964L27.6499 5.96992C27.7838 6.38194 28.1677 6.66091 28.601 6.66091H31.4717C32.4404 6.66091 32.8432 7.90051 32.0595 8.46992L29.737 10.1574C29.3865 10.412 29.2398 10.8634 29.3737 11.2754L30.2608 14.0058C30.5602 14.9271 29.5057 15.6932 28.722 15.1238L26.3995 13.4364C26.049 13.1817 25.5744 13.1817 25.2239 13.4364L22.9015 15.1238C22.1178 15.6932 21.0633 14.9271 21.3627 14.0058L22.2498 11.2754C22.3837 10.8634 22.237 10.412 21.8865 10.1574L19.564 8.46991C18.7803 7.90051 19.1831 6.66091 20.1518 6.66091H23.0225C23.4558 6.66091 23.8397 6.38194 23.9736 5.96992L24.8607 3.23964Z" fill="#FFA858" />
									<path d="M41.0521 3.09367C41.3597 2.18997 42.6378 2.18998 42.9454 3.09367L43.9289 5.98313C44.0669 6.3884 44.4475 6.66091 44.8756 6.66091H47.9558C48.9357 6.66091 49.3309 7.92416 48.5257 8.48263L46.115 10.1546C45.7481 10.409 45.5943 10.8758 45.7382 11.2985L46.6777 14.0586C46.9885 14.9718 45.9538 15.7523 45.1611 15.2025L42.5686 13.4046C42.2259 13.1668 41.7716 13.1668 41.4289 13.4046L38.8364 15.2025C38.0437 15.7523 37.009 14.9718 37.3198 14.0586L38.2593 11.2985C38.4032 10.8758 38.2494 10.409 37.8825 10.1546L35.4718 8.48263C34.6666 7.92416 35.0617 6.66091 36.0417 6.66091H39.1219C39.55 6.66091 39.9306 6.3884 40.0686 5.98313L41.0521 3.09367Z" fill="#FFA858" />
									<path d="M57.2347 3.23964C57.5341 2.31832 58.8375 2.31832 59.1368 3.23964L60.0239 5.96992C60.1578 6.38194 60.5418 6.66091 60.975 6.66091H63.8457C64.8145 6.66091 65.2172 7.90051 64.4335 8.46992L62.111 10.1574C61.7605 10.412 61.6139 10.8634 61.7477 11.2754L62.6349 14.0058C62.9342 14.9271 61.8797 15.6932 61.096 15.1238L58.7736 13.4364C58.4231 13.1817 57.9485 13.1817 57.598 13.4364L55.2755 15.1238C54.4918 15.6932 53.4373 14.9271 53.7367 14.0058L54.6238 11.2754C54.7577 10.8634 54.611 10.412 54.2605 10.1574L51.938 8.46991C51.1543 7.90051 51.5571 6.66091 52.5258 6.66091H55.3966C55.8298 6.66091 56.2137 6.38194 56.3476 5.96992L57.2347 3.23964Z" fill="#FFA858" />
									<path d="M73.4261 3.09367C73.7337 2.18997 75.0118 2.18998 75.3194 3.09367L76.303 5.98313C76.4409 6.3884 76.8215 6.66091 77.2496 6.66091H80.3298C81.3098 6.66091 81.705 7.92416 80.8997 8.48263L78.489 10.1546C78.1221 10.409 77.9683 10.8758 78.1122 11.2985L79.0517 14.0586C79.3625 14.9718 78.3278 15.7523 77.5351 15.2025L74.9427 13.4046C74.5999 13.1668 74.1456 13.1668 73.8029 13.4046L71.2104 15.2025C70.4177 15.7523 69.383 14.9718 69.6938 14.0586L70.6333 11.2985C70.7772 10.8758 70.6234 10.409 70.2566 10.1546L67.8458 8.48263C67.0406 7.92416 67.4358 6.66091 68.4157 6.66091H71.4959C71.924 6.66091 72.3046 6.3884 72.4426 5.98313L73.4261 3.09367Z" fill="#FFA858" />
								</svg>
							</div>
						</div>
					</div>
				</a>
				<a href="./shop-single.php?id=4">
					<div class="categories__list">
						<button class="categories__button">Vegetable</button>
						<div class="categories__picture-4"></div>
						<h3>Vegan Red Tomato</h3>
						<hr class="categories__hr" />
						<div class="categories__footer">
							<div class="categories__left">
								<p class="categories__cost">$20.00</p>
								<p class="categories__sale">$17.00</p>
							</div>
							<div class="categories__star">
								<svg width="84" height="19" viewBox="0 0 84 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.67806 3.09367C8.98566 2.18997 10.2638 2.18998 10.5714 3.09367L11.5549 5.98313C11.6929 6.3884 12.0735 6.66091 12.5016 6.66091H15.5818C16.5617 6.66091 16.9569 7.92416 16.1517 8.48263L13.7409 10.1546C13.3741 10.409 13.2203 10.8758 13.3642 11.2985L14.3036 14.0586C14.6145 14.9718 13.5798 15.7523 12.7871 15.2025L10.1946 13.4046C9.85187 13.1668 9.39758 13.1668 9.05483 13.4046L6.46235 15.2025C5.66969 15.7523 4.63496 14.9718 4.9458 14.0586L5.88528 11.2985C6.02915 10.8758 5.87539 10.409 5.50851 10.1546L3.09777 8.48263C2.29254 7.92416 2.68772 6.66091 3.66767 6.66091H6.74788C7.17598 6.66091 7.55659 6.3884 7.69454 5.98313L8.67806 3.09367Z" fill="#FFA858" />
									<path d="M24.8607 3.23964C25.16 2.31832 26.4635 2.31832 26.7628 3.23964L27.6499 5.96992C27.7838 6.38194 28.1677 6.66091 28.601 6.66091H31.4717C32.4404 6.66091 32.8432 7.90051 32.0595 8.46992L29.737 10.1574C29.3865 10.412 29.2398 10.8634 29.3737 11.2754L30.2608 14.0058C30.5602 14.9271 29.5057 15.6932 28.722 15.1238L26.3995 13.4364C26.049 13.1817 25.5744 13.1817 25.2239 13.4364L22.9015 15.1238C22.1178 15.6932 21.0633 14.9271 21.3627 14.0058L22.2498 11.2754C22.3837 10.8634 22.237 10.412 21.8865 10.1574L19.564 8.46991C18.7803 7.90051 19.1831 6.66091 20.1518 6.66091H23.0225C23.4558 6.66091 23.8397 6.38194 23.9736 5.96992L24.8607 3.23964Z" fill="#FFA858" />
									<path d="M41.0521 3.09367C41.3597 2.18997 42.6378 2.18998 42.9454 3.09367L43.9289 5.98313C44.0669 6.3884 44.4475 6.66091 44.8756 6.66091H47.9558C48.9357 6.66091 49.3309 7.92416 48.5257 8.48263L46.115 10.1546C45.7481 10.409 45.5943 10.8758 45.7382 11.2985L46.6777 14.0586C46.9885 14.9718 45.9538 15.7523 45.1611 15.2025L42.5686 13.4046C42.2259 13.1668 41.7716 13.1668 41.4289 13.4046L38.8364 15.2025C38.0437 15.7523 37.009 14.9718 37.3198 14.0586L38.2593 11.2985C38.4032 10.8758 38.2494 10.409 37.8825 10.1546L35.4718 8.48263C34.6666 7.92416 35.0617 6.66091 36.0417 6.66091H39.1219C39.55 6.66091 39.9306 6.3884 40.0686 5.98313L41.0521 3.09367Z" fill="#FFA858" />
									<path d="M57.2347 3.23964C57.5341 2.31832 58.8375 2.31832 59.1368 3.23964L60.0239 5.96992C60.1578 6.38194 60.5418 6.66091 60.975 6.66091H63.8457C64.8145 6.66091 65.2172 7.90051 64.4335 8.46992L62.111 10.1574C61.7605 10.412 61.6139 10.8634 61.7477 11.2754L62.6349 14.0058C62.9342 14.9271 61.8797 15.6932 61.096 15.1238L58.7736 13.4364C58.4231 13.1817 57.9485 13.1817 57.598 13.4364L55.2755 15.1238C54.4918 15.6932 53.4373 14.9271 53.7367 14.0058L54.6238 11.2754C54.7577 10.8634 54.611 10.412 54.2605 10.1574L51.938 8.46991C51.1543 7.90051 51.5571 6.66091 52.5258 6.66091H55.3966C55.8298 6.66091 56.2137 6.38194 56.3476 5.96992L57.2347 3.23964Z" fill="#FFA858" />
									<path d="M73.4261 3.09367C73.7337 2.18997 75.0118 2.18998 75.3194 3.09367L76.303 5.98313C76.4409 6.3884 76.8215 6.66091 77.2496 6.66091H80.3298C81.3098 6.66091 81.705 7.92416 80.8997 8.48263L78.489 10.1546C78.1221 10.409 77.9683 10.8758 78.1122 11.2985L79.0517 14.0586C79.3625 14.9718 78.3278 15.7523 77.5351 15.2025L74.9427 13.4046C74.5999 13.1668 74.1456 13.1668 73.8029 13.4046L71.2104 15.2025C70.4177 15.7523 69.383 14.9718 69.6938 14.0586L70.6333 11.2985C70.7772 10.8758 70.6234 10.409 70.2566 10.1546L67.8458 8.48263C67.0406 7.92416 67.4358 6.66091 68.4157 6.66091H71.4959C71.924 6.66091 72.3046 6.3884 72.4426 5.98313L73.4261 3.09367Z" fill="#FFA858" />
								</svg>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="sub">
		<div class="wrapper">
			<div class="sub__inner">
				<h2>
					Subscribe to <br />
					our Newsletter
				</h2>
				<div class="sub__form">
					<input type="text" placeholder="Your Email Address" />
					<button>Subscribe</button>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="wrapper">
			<div class="footer__inner">
				<div class="footer__contact">
					<h2>Contact Us</h2>
					<div class="footer__contact-in">
						<h3>Email</h3>
						<a href="">
							<h4>needhelp@Organia.com</h4>
						</a>
						<h3>Phone</h3>
						<a href="">
							<h4>666 888 888</h4>
						</a>
						<h3>Address</h3>
						<a href="">
							<h4>88 road, borklyn street, USA</h4>
						</a>
					</div>
				</div>
				<div class="vertborder"></div>
				<div class="footer__main">
					<a href="">
						<h2><img src="./img/Logo.svg" alt="logo" /></h2>
					</a>
					<h4>
						Simply dummy text of the printing and typesetting industry. <br />
						Lorem Ipsum simply dummy text of the printing
					</h4>
					<div class="footer__social">
						<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61" fill="none">
								<circle cx="30" cy="30.7158" r="30" fill="#EFF6F1" />
								<path d="M33.6585 23.2631C34.7231 23.2661 35.7431 23.6747 36.4958 24.3996C37.2486 25.1244 37.6729 26.1067 37.6761 27.1318V34.8685C37.6729 35.8936 37.2486 36.8758 36.4958 37.6007C35.7431 38.3256 34.7231 38.7342 33.6585 38.7372H25.6243C24.5598 38.7342 23.5397 38.3256 22.787 37.6007C22.0342 36.8758 21.6099 35.8936 21.6068 34.8685V27.1318C21.6099 26.1067 22.0342 25.1244 22.787 24.3996C23.5397 23.6747 24.5598 23.2661 25.6243 23.2631H33.6585ZM33.6585 21.7158H25.6243C22.5309 21.7158 20 24.153 20 27.1318V34.8685C20 37.8473 22.5309 40.2845 25.6243 40.2845H33.6585C36.752 40.2845 39.2828 37.8473 39.2828 34.8685V27.1318C39.2828 24.153 36.752 21.7158 33.6585 21.7158Z" fill="#274C5B" />
								<path d="M34.8638 27.1326C34.6254 27.1326 34.3924 27.0645 34.1942 26.937C33.996 26.8095 33.8416 26.6282 33.7504 26.4162C33.6591 26.2041 33.6353 25.9708 33.6818 25.7457C33.7283 25.5205 33.8431 25.3137 34.0116 25.1514C34.1802 24.9891 34.3949 24.8786 34.6287 24.8338C34.8625 24.789 35.1048 24.812 35.325 24.8999C35.5452 24.9877 35.7334 25.1365 35.8659 25.3273C35.9983 25.5182 36.069 25.7425 36.069 25.9721C36.0693 26.1246 36.0384 26.2756 35.9779 26.4166C35.9175 26.5575 35.8287 26.6856 35.7167 26.7934C35.6048 26.9013 35.4718 26.9867 35.3254 27.0449C35.179 27.1031 35.0222 27.1329 34.8638 27.1326ZM29.6415 27.906C30.2772 27.906 30.8986 28.0875 31.4271 28.4276C31.9556 28.7677 32.3676 29.251 32.6108 29.8166C32.8541 30.3821 32.9177 31.0044 32.7937 31.6047C32.6697 32.2051 32.3636 32.7565 31.9141 33.1894C31.4646 33.6222 30.892 33.917 30.2685 34.0364C29.6451 34.1558 28.9989 34.0945 28.4116 33.8603C27.8243 33.626 27.3224 33.2293 26.9692 32.7204C26.6161 32.2114 26.4276 31.6131 26.4276 31.0009C26.4285 30.1804 26.7674 29.3937 27.3699 28.8135C27.9724 28.2333 28.7894 27.9069 29.6415 27.906ZM29.6415 26.3588C28.6881 26.3588 27.756 26.631 26.9633 27.1411C26.1705 27.6512 25.5526 28.3762 25.1878 29.2245C24.8229 30.0727 24.7274 31.0061 24.9134 31.9066C25.0994 32.8071 25.5586 33.6342 26.2328 34.2834C26.9069 34.9327 27.7659 35.3748 28.701 35.5539C29.6362 35.733 30.6054 35.6411 31.4863 35.2897C32.3672 34.9384 33.1201 34.3434 33.6498 33.58C34.1795 32.8166 34.4622 31.9191 34.4622 31.0009C34.4622 29.7698 33.9543 28.589 33.0503 27.7184C32.1462 26.8479 30.92 26.3588 29.6415 26.3588Z" fill="#274C5B" />
							</svg></a>
						<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61" fill="none">
								<circle cx="30" cy="30.7158" r="30" fill="#EFF6F1" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M39.2828 31.0001C39.2828 25.873 34.9657 21.7158 29.6414 21.7158C24.3171 21.7158 20 25.873 20 31.0001C20 35.634 23.5251 39.475 28.1349 40.1721V33.6847H25.6863V31.0001H28.1349V28.9547C28.1349 26.6282 29.5747 25.3421 31.7767 25.3421C32.8317 25.3421 33.9353 25.5236 33.9353 25.5236V27.8087H32.7189C31.5219 27.8087 31.1475 28.524 31.1475 29.2593V31.0001H33.8212L33.3942 33.6847H31.1479V40.173C35.7577 39.4762 39.2828 35.6353 39.2828 31.0001Z" fill="#274C5B" />
							</svg></a>
						<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61" fill="none">
								<circle cx="30" cy="30.7158" r="30" fill="#EFF6F1" />
								<path d="M40.6602 24.6742C39.8852 25.011 39.0652 25.2328 38.2261 25.3328C39.1079 24.8164 39.7711 23.9961 40.0912 23.0257C39.2575 23.5132 38.3469 23.8553 37.3984 24.0372C36.9991 23.6186 36.5187 23.2857 35.9866 23.0585C35.4546 22.8313 34.8818 22.7148 34.3033 22.7158C31.9609 22.7158 30.0654 24.5839 30.0654 26.8866C30.0637 27.2069 30.1004 27.5263 30.1747 27.8378C28.4951 27.7591 26.8504 27.3306 25.3458 26.5798C23.8413 25.829 22.51 24.7724 21.4372 23.4777C21.0608 24.1122 20.8618 24.8361 20.8608 25.5738C20.8608 27.02 21.6154 28.2984 22.7547 29.0473C22.0797 29.0313 21.4185 28.8526 20.8273 28.5265V28.5781C20.8273 30.6011 22.2907 32.2841 24.2276 32.6671C23.8634 32.7642 23.488 32.8134 23.1111 32.8135C22.8436 32.814 22.5767 32.788 22.3144 32.736C22.8528 34.3931 24.42 35.5983 26.2764 35.6327C24.7679 36.7953 22.9159 37.4236 21.0115 37.419C20.6734 37.4185 20.3357 37.3984 20 37.3587C21.9374 38.5958 24.1895 39.2502 26.4882 39.244C34.2943 39.244 38.5589 32.8867 38.5589 27.373C38.5589 27.1922 38.5541 27.0114 38.5455 26.8349C39.3733 26.2462 40.0893 25.5145 40.6602 24.6742Z" fill="#274C5B" />
							</svg></a>
						<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61" fill="none">
								<circle cx="30" cy="30.7158" r="30" fill="#EFF6F1" />
								<path d="M29.7966 20.7158C24.3866 20.7158 20 25.1005 20 30.5081C20 34.5168 22.4142 37.9616 25.8649 39.4785C25.8386 38.7965 25.8605 37.9747 26.0354 37.2315C26.2235 36.4359 27.295 31.8939 27.295 31.8939C27.295 31.8939 26.9801 31.2687 26.9801 30.3463C26.9801 28.895 27.8198 27.8108 28.8695 27.8108C29.7617 27.8108 30.1903 28.4797 30.1903 29.2797C30.1903 30.1758 29.6173 31.5135 29.3243 32.7551C29.0794 33.7955 29.8447 34.6392 30.8725 34.6392C32.7269 34.6392 33.9777 32.2567 33.9777 29.4327C33.9777 27.2863 32.5301 25.6819 29.9016 25.6819C26.932 25.6819 25.0776 27.8983 25.0776 30.3726C25.0776 31.225 25.3313 31.8283 25.7249 32.2917C25.9042 32.5059 25.9305 32.5933 25.8649 32.8381C25.8168 33.0174 25.7118 33.4501 25.6637 33.625C25.5981 33.8742 25.3969 33.9616 25.1738 33.8698C23.8049 33.3102 23.1664 31.8152 23.1664 30.1278C23.1664 27.3475 25.515 24.012 30.1684 24.012C33.9077 24.012 36.37 26.718 36.37 29.6207C36.37 33.4633 34.2314 36.331 31.0824 36.331C30.0241 36.331 29.0313 35.7583 28.6901 35.1113C28.6901 35.1113 28.1216 37.367 27.9991 37.8042C27.7936 38.5605 27.3868 39.3124 27.0151 39.9025C27.9169 40.1684 28.8521 40.3039 29.7923 40.3047C35.2023 40.3047 39.5889 35.9201 39.5889 30.5125C39.5889 25.1049 35.2067 20.7158 29.7966 20.7158Z" fill="#274C5B" />
							</svg></a>
					</div>
				</div>
				<div class="vertborder"></div>
				<div class="footer__pages">
					<h2>Utility Pages</h2>
					<div class="footer__contact-in">
						<a href="">
							<h4>Style Guide</h4>
						</a>
						<a href="">
							<h4>404 Not Found</h4>
						</a>
						<a href="">
							<h4>Password Protected</h4>
						</a>
						<a href="">
							<h4>Licences</h4>
						</a>
						<a href="">
							<h4>Changelog</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__copyright">
			<hr />
			<p>Copyright © <span>Organick</span></p>
		</div>
	</footer>
</body>

</html>