<?php require_once __DIR__ . '/../php/helpers.php';
$cartCount = isset($_SESSION['cart']) ? HasCart($_SESSION['cart']) : 0;
$sum = 0
?>
<header id="header" class="header">
	<div class="header__inner">
		<div class="header__logo">
			<a href="./index.php">
				<img src="./img/Logo.svg" alt="" />
			</a>
		</div>
		<nav class="nav roboto-bold">
			<ul>
				<a href="./index.php">
					<li>Home</li>
				</a>
				<a href="./index.php#about-us">
					<li>About</li>
				</a>
				<a href="">
					<li>Pages</li>
				</a>
				<a href="./shop.php">
					<li>Shop</li>
				</a>
				<a href="">
					<li>Projects</li>
				</a>
				<?php if (empty($_SESSION['user']['id'])) {
					echo '<a href="./login.php"><li>Log in</li></a>';
				} else {
					if($_SESSION['user']['role'] == 2){
					echo '<a href="./profile.php"><li>Admin</li></a>';
					}else{
						echo '<a href="./profile.php"><li>Profile</li></a>';
					}
				} ?>
			</ul>
		</nav>

		<?php if (empty($_SESSION['user']['id'])) {
			echo '<div class="nav-shop-undefined">
					<h2>Shopping Cart (0)</h2>
					<p>Please register to use the shopping cart.</p>
					<a href="../login.php"><button class="nav-shop__buy-undefined">Log in</button></a>
				</div>';
		} else {
			echo '<div class="nav-shop">
					<ul> <h2 id="value2">Shopping Cart (' . $cartCount . ')</h2>';
			if (isset($_SESSION['cart'])) {
				foreach ($_SESSION['cart'] as $row) {
					$productH = ProductSelectOne($row['id']);
					echo '
							<li>
								<div class="nav-shop__item">
									<img src="' . $productH['0']['image'] . '" alt="">
									<div class="nav-shop__title">
										<h3>' . str_replace("_", " ", $productH['0']['name']) . '</h3> 
										<p>' . $row['count'] . 'kg x $' . $productH['0']['price'] - $productH['0']['discountAmount'] . '.00</p>
									</div>
								</div>
								<form method="post" action="'.$_SERVER['PHP_SELF'].'">
									<input type="hidden" id="inputValue" name="itemToDelete" value="' . $row['id'] . '">
									<button class="button-delete" data-value="'.$row['count'] * ($productH['0']['price'] - $productH['0']['discountAmount']).'" type="submit" >
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="svg-cross">
											<g clip-path="url(#clip0_60_313)">
											<path d="M12 23C18.0748 23 23 18.0748 23 12C23 5.92525 18.0748 1 12 1C5.92525 1 1 5.92525 1 12C1 18.0748 5.92525 23 12 23Z" stroke="#CCCCCC" stroke-miterlimit="10" />
											<path d="M16 8L8 16" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M16 16L8 8" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</g>
											<defs>
											<clipPath id="clip0_60_313">
												<rect width="24" height="24" fill="white" />
											</clipPath>
											</defs>
										</svg>
										<hr>
									</button>
								</form>
							</li>
							';
					$sum += $row['count'] * ($productH['0']['price'] - $productH['0']['discountAmount']);
				}
			}
			echo '</ul>
					<div class="nav-shop__footer">
						<div class="nav-shop__sum">
							<p id="value1" class="nav-shop__count">' . $cartCount . ' Product</p>
							<p class="nav-shop__cost" id="target-element">$' . $sum . '.00</p>
						</div>
						<form method="post" action="../checkoutOrder.php">
							<button type="submit" class="nav-shop__buy">Checkout</button>
						</form>
					</div>
				</div>';
		} ?>
		<script src="../assets/updateNumber.js"></script>
		<div class="header__right">
			<div class="input">
				<input type="text" />
				<a href=""><svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="28.791" cy="28" r="28" fill="#7EB693" />
						<path d="M40.4692 35.8921L35.7086 31.1315C36.8547 29.6057 37.4734 27.7485 37.4713 25.8402C37.4713 20.9657 33.5056 17 28.6312 17C23.7567 17 19.791 20.9657 19.791 25.8402C19.791 30.7146 23.7567 34.6803 28.6312 34.6803C30.5395 34.6824 32.3967 34.0637 33.9225 32.9175L38.6831 37.6781C38.9241 37.8936 39.2384 38.0085 39.5615 37.9995C39.8846 37.9905 40.192 37.8581 40.4205 37.6295C40.6491 37.401 40.7815 37.0936 40.7905 36.7705C40.7996 36.4474 40.6846 36.1331 40.4692 35.8921ZM22.3168 25.8402C22.3168 24.5913 22.6871 23.3705 23.3809 22.3321C24.0748 21.2937 25.061 20.4843 26.2148 20.0064C27.3686 19.5285 28.6382 19.4034 29.8631 19.6471C31.0879 19.8907 32.213 20.4921 33.0961 21.3752C33.9792 22.2583 34.5806 23.3834 34.8242 24.6083C35.0679 25.8332 34.9428 27.1028 34.4649 28.2566C33.987 29.4104 33.1777 30.3966 32.1393 31.0904C31.1009 31.7842 29.88 32.1546 28.6312 32.1546C26.9571 32.1526 25.3522 31.4866 24.1684 30.3029C22.9847 29.1192 22.3188 27.5142 22.3168 25.8402Z" fill="#FAFAFA" />
					</svg></a>
			</div>
			<button class="burger-menu roboto-bold" id="burger">
				<svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="28.791" cy="28" r="28" fill="#274C5B" />
					<path d="M25.5689 39.0001C26.2439 39.0001 26.7911 38.4529 26.7911 37.7779C26.7911 37.1029 26.2439 36.5557 25.5689 36.5557C24.8939 36.5557 24.3467 37.1029 24.3467 37.7779C24.3467 38.4529 24.8939 39.0001 25.5689 39.0001Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M34.1246 39.0001C34.7996 39.0001 35.3468 38.4529 35.3468 37.7779C35.3468 37.1029 34.7996 36.5557 34.1246 36.5557C33.4496 36.5557 32.9023 37.1029 32.9023 37.7779C32.9023 38.4529 33.4496 39.0001 34.1246 39.0001Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M15.791 17H19.5729L22.4093 33.0731H37.5369" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M21.9022 29.1837L37.1494 29.2907C37.2587 29.2908 37.3647 29.2529 37.4493 29.1837C37.5339 29.1144 37.5918 29.0179 37.6133 28.9107L39.3151 20.4014C39.3289 20.3328 39.3272 20.262 39.3102 20.1941C39.2933 20.1262 39.2615 20.063 39.2171 20.0089C39.1727 19.9548 39.1169 19.9112 39.0536 19.8813C38.9903 19.8514 38.9212 19.8359 38.8513 19.8359L20.3584 19.8359" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				<p id="value3">Cart (<?php echo $cartCount; ?>)</p>
			</button>
			<button class="burger-menu-2" id="burger-2">
				<span></span>
				<span></span>
			</button>
		</div>
	</div>
</header>