<!DOCTYPE html>
<html lang="en">
<?php 
	require_once __DIR__ . '/php/helpers.php';
?>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Shop</title>
	<link rel="icon" href="./img/favicon.png" />
	<link rel="stylesheet" href="./assets/reset.css" />
	<link rel="stylesheet" href="./assets/shop.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap" rel="stylesheet" />
</head>

<body class="body">
	<div class="root">
		<div class="wrapper">
			<?php include_once __DIR__ . '/components/header.php' ?>
		</div>
		<section class="banner-shop">
			<div class="banner-shop__inner">
				<div class="wrapper">
					<p class="banner__title">Shop<svg xmlns="http://www.w3.org/2000/svg" width="149" height="149" viewBox="0 0 149 149" fill="none" class="svg1">
							<path d="M125.109 87.8423C118.887 85.7006 111.175 81.8867 111.105 74.2581C111.065 69.0814 114.035 64.3067 115.462 59.4497C118.205 50.1057 114.661 39.872 108.691 32.5724C102.564 25.0711 93.5835 19.7752 84.0047 18.1823C79.3001 17.3925 74.4365 17.5287 69.8233 18.7565C65.1912 19.9848 60.7617 22.278 56.6663 24.7392C47.5538 30.2359 39.4582 37.5985 32.9266 45.9919C26.5127 54.2406 21.3246 63.8223 19.3936 74.1836C18.5096 78.9669 18.3093 83.9728 19.1647 88.7853C20.2009 94.5693 23.0461 99.901 26.7763 104.387C34.4122 113.56 45.8152 119.69 57.3626 122.329C68.881 124.941 80.722 121.951 89.0736 113.462C93.4362 109.028 96.3479 103.579 99.1743 98.1041C100.61 95.333 102.312 92.3749 105.457 91.3537C108.554 90.3434 111.743 91.3319 114.61 92.5656C117.078 93.6428 119.422 94.9871 121.889 96.0456C122.327 96.2384 122.746 96.1029 123.015 95.6996C124.207 93.8479 125.63 92.1767 126.372 90.0668C126.717 89.0597 125.098 88.6884 124.754 89.6955C124.082 91.634 122.646 93.221 121.553 94.9286C121.935 94.813 122.298 94.6981 122.68 94.5826C118.079 92.6148 113.53 89.2733 108.324 89.2889C101.85 89.3167 99.1826 94.467 96.5886 99.5585C93.8168 104.975 90.4934 110.184 85.8551 114.213C81.4271 118.057 75.9428 120.581 70.1308 121.34C58.2263 122.903 45.4833 117.793 36.0356 110.783C31.2059 107.197 26.9323 102.766 24.032 97.4732C21.3209 92.5225 20.1735 87.0897 20.2885 81.457C20.491 71.1132 24.6619 61.1598 30.2294 52.5904C36.0662 43.6176 43.7317 35.7237 52.427 29.5073C60.2126 23.9495 69.2136 19.0954 79.0233 19.356C88.7953 19.6177 98.3168 24.1822 105.131 31.1071C111.741 37.8412 116.362 47.9748 114.209 57.5443C113.112 62.4378 110.385 66.857 109.601 71.8439C108.756 77.2838 111.343 82.1727 115.791 85.273C118.5 87.1602 121.584 88.3963 124.69 89.4532C125.754 89.814 126.116 88.1861 125.109 87.8423Z" fill="#D1D1D1" />
							<path d="M119.376 88.4196C115.849 86.8216 112.171 85.5198 108.794 83.607C107.149 82.6821 105.592 81.5852 104.253 80.2371C102.758 78.7059 101.759 76.8207 100.751 74.9451C97.6051 69.0028 95.9319 62.3839 92.3973 56.6418C85.7943 45.9418 73.4167 39.2975 61.0605 38.1408C54.1615 37.4961 47.1862 38.6206 40.9686 41.732C40.0064 42.2138 40.8869 43.6236 41.84 43.1515C53.0822 37.5399 66.7535 38.9837 77.5225 44.9743C83.2514 48.1655 88.2141 52.6967 91.5126 58.3992C94.8008 64.0739 96.4402 70.5153 99.5805 76.2699C101.515 79.8169 103.78 82.5264 107.267 84.6518C110.83 86.8124 114.811 88.1798 118.595 89.8917C119.567 90.3306 120.358 88.8675 119.376 88.4196Z" fill="#D1D1D1" />
							<path d="M100.553 83.6156C81.4402 80.6538 61.057 80.3449 43.4851 71.3759C38.3855 68.7756 33.742 65.4371 29.7607 61.3352C29.0225 60.5693 27.8857 61.7802 28.6239 62.5461C43.0136 77.3302 64.2618 80.6563 83.8187 83.0871C89.2811 83.7682 94.7508 84.3832 100.19 85.2248C101.229 85.3984 101.601 83.7796 100.553 83.6156Z" fill="#D1D1D1" />
							<path d="M91.0317 73.3468C79.1512 58.5673 59.8628 50.9029 41.3232 49.4452C40.2585 49.3569 40.3199 51.0183 41.3749 51.0975C59.2551 52.501 78.1512 59.943 89.6112 74.2003C90.267 75.0346 91.6875 74.1811 91.0317 73.3468Z" fill="#D1D1D1" />
							<path d="M74.7355 69.7125C67.0337 68.6424 59.8338 65.2914 53.3682 61.0806C52.476 60.4982 51.6951 61.9703 52.5873 62.5527C59.1583 66.8259 66.5295 70.2466 74.3633 71.3314C75.411 71.4765 75.8019 69.8571 74.7355 69.7125Z" fill="#D1D1D1" />
							<path d="M94.3841 90.381C86.1345 92.8242 77.6455 94.8239 68.9927 94.5923C59.7281 94.3331 51.1913 91.2033 43.0165 87.0283C37.3151 84.1182 31.5114 80.6381 28.1129 75.0422C27.5578 74.1201 26.1379 74.9923 26.693 75.9144C29.6453 80.7634 34.3274 84.1382 39.1967 86.8869C43.7307 89.4301 48.492 91.731 53.4217 93.4064C61.7619 96.2606 70.521 96.8836 79.2304 95.6192C84.5343 94.8393 89.7272 93.5179 94.8574 91.9917C95.8813 91.6772 95.4085 90.0852 94.3841 90.381Z" fill="#D1D1D1" />
							<path d="M91.7049 96.9602C85.7304 103.635 77.882 108.386 69.033 109.994C58.9689 111.809 48.7566 109.493 40.5588 103.383C35.6129 99.6878 31.4006 95.1139 26.9173 90.887C26.1428 90.1599 24.9963 91.3617 25.7805 92.0979C34.1178 99.961 42.0004 108.91 53.7394 111.364C62.7541 113.248 72.1901 112.083 80.4038 107.893C85.1581 105.467 89.3653 102.072 92.9249 98.1054C93.6324 97.2934 92.4222 96.1573 91.7049 96.9602Z" fill="#D1D1D1" />
							<path d="M65.51 101.93C59.6229 102.09 53.7001 100.812 49.025 97.0615C48.1959 96.3925 47.0591 97.6035 47.8882 98.2725C52.9108 102.313 59.2058 103.776 65.5527 103.592C66.6326 103.567 66.5803 101.896 65.51 101.93Z" fill="#D1D1D1" />
							<path d="M80.4193 87.9879C73.246 87.8877 66.1853 86.5809 59.2266 84.9326C58.1851 84.6839 57.8129 86.3027 58.8544 86.5515C65.9457 88.2331 73.1572 89.5539 80.462 89.6499C81.543 89.6625 81.4913 88.0101 80.4193 87.9879Z" fill="#D1D1D1" />
							<path d="M43.9195 79.5468C40.2393 77.8598 36.6069 76.1995 33.879 73.1101C33.1681 72.3151 32.0313 73.5261 32.7422 74.321C35.5676 77.5201 39.3531 79.2695 43.1574 81.0184C44.1109 81.4578 44.9014 79.9948 43.9195 79.5468Z" fill="#D1D1D1" />
							<path d="M41.754 60.5111C38.3068 59.061 35.0367 57.2669 31.5803 55.8265C30.5996 55.4161 29.8187 56.8882 30.7995 57.2986C34.2467 58.7487 37.5168 60.5428 40.9731 61.9832C41.963 62.3839 42.7445 60.9306 41.754 60.5111Z" fill="#D1D1D1" />
							<path d="M107.206 67.3897C105.307 59.5563 103.957 51.2731 98.9123 44.7146C93.603 37.8169 85.7124 32.8152 77.2933 30.7436C72.3971 29.537 67.314 29.2667 62.2994 29.6803C61.2309 29.7707 61.2826 31.4231 62.3511 31.3326C73.6833 30.3982 84.3503 33.4319 92.995 40.9093C96.9165 44.299 99.893 48.4236 101.727 53.2801C103.5 57.9881 104.418 62.9865 105.614 67.8633C105.872 68.9076 107.454 68.4249 107.206 67.3897Z" fill="#D1D1D1" />
							<path d="M107.687 45.2436C105.527 41.3936 103.375 37.4777 100.451 34.1314C97.4684 30.7118 93.709 28.2943 89.3725 26.9571C88.3571 26.6418 87.9849 28.2606 89.0003 28.5759C93.2041 29.8798 96.748 32.3135 99.5877 35.6719C102.271 38.8286 104.247 42.5246 106.267 46.1158C106.795 47.0482 108.205 46.1856 107.687 45.2436Z" fill="#D1D1D1" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="125" height="129" viewBox="0 0 125 129" fill="none" class="svg2">
							<path d="M81.9532 80.2855C87.7047 72.1359 92.8824 62.4138 93.2897 52.2673C93.6823 42.6435 88.5424 34.6662 80.0074 30.3103C72.24 26.3441 63.0915 25.075 54.4403 24.7474C44.7696 24.382 34.7731 25.2447 25.4613 28.0649C18.873 30.0732 11.8451 33.155 8.75026 39.7234C6.03762 45.4563 7.13117 52.0453 9.17145 57.7719C11.6508 64.7548 15.6758 71.1561 20.0393 77.106C24.1138 82.7003 28.6038 88.4359 33.8049 93.0229C40.4951 98.927 49.1771 102.123 58.0528 99.5534C68.2785 96.5932 75.0818 88.3892 82.0378 80.8935C82.971 79.8849 81.5632 78.2607 80.6144 79.2769C74.7091 85.6494 69.0821 92.5928 60.934 96.2206C53.9132 99.3562 46.339 98.8282 39.824 94.8244C33.8995 91.1628 29.3317 85.4652 25.0302 80.077C20.8506 74.8203 16.9612 69.2503 13.92 63.2478C11.157 57.8161 8.7376 51.5487 9.40115 45.3253C10.0984 38.8944 14.6835 34.712 20.3824 32.1825C28.2585 28.6682 37.1793 27.3369 45.7013 26.9256C54.5249 26.501 63.6521 27.0549 72.1272 29.5496C81.5646 32.32 90.0521 38.4747 91.0477 48.8921C92.0847 59.6712 86.173 70.5339 80.1534 79.0816C79.3495 80.2372 81.1419 81.4257 81.9532 80.2855Z" fill="#D3CBCF" />
							<path d="M82.0457 80.9088C83.7802 78.9368 85.8991 77.1212 88.5412 76.6163C90.7262 76.2005 92.9363 76.7844 94.9019 77.7358C99.4932 79.9659 103.19 83.7969 107.096 86.9911C109.121 88.6579 111.233 90.2638 113.684 91.303C113.832 90.6197 113.973 89.921 114.114 89.2222C103.35 87.404 89.466 89.4167 82.5568 79.1131C81.7916 77.9776 80.1727 79.3968 80.9224 80.5398C88.2257 91.4151 102.611 89.4442 113.946 91.3663C115.226 91.5826 115.436 89.7233 114.391 89.2779C109.696 87.2701 106.004 83.1316 102.105 79.9912C98.3359 76.9594 93.6888 73.7063 88.5552 74.4327C85.3496 74.8877 82.6942 76.9457 80.6068 79.2998C79.7041 80.3316 81.1119 81.9558 82.0457 80.9088Z" fill="#D3CBCF" />
							<path d="M81.3267 82.0421C86.7816 87.861 91.0815 95.6559 89.4406 103.864C90.0007 103.591 90.5608 103.318 91.1209 103.045C87.4639 100.875 84.9184 97.075 83.2622 93.2425C81.606 89.4099 80.5708 84.7973 81.9474 80.7084C82.3826 79.3889 80.3516 78.6985 79.9165 80.0181C78.3946 84.5596 79.401 89.5872 81.19 93.8897C82.9796 98.1537 85.8585 102.44 89.9299 104.829C90.6814 105.264 91.4448 104.816 91.6103 104.01C93.3588 95.2715 88.7666 86.798 82.9767 80.6078C82.0086 79.6094 80.3742 81.0361 81.3267 82.0421Z" fill="#D3CBCF" />
							<path d="M82.0649 80.04C86.8341 67.9393 101.315 62.9243 112.809 68.4535C112.686 67.8452 112.563 67.237 112.463 66.6366C110.31 68.698 108.378 70.9762 106.217 73.0222C104.182 74.969 101.828 77.0137 98.9256 77.34C97.5401 77.4998 97.9446 79.5939 99.3221 79.4572C105.514 78.7686 109.768 72.2081 113.902 68.2456C114.528 67.6347 114.285 66.7796 113.555 66.4287C100.963 60.3846 85.2261 66.2599 80.0571 79.3575C79.5296 80.6456 81.5605 81.336 82.0649 80.04Z" fill="#D3CBCF" />
							<path d="M85.9375 48.4808C84.4537 47.3328 82.5877 47.0203 80.792 46.6545C80.5376 46.6066 80.1878 46.758 80 46.9259C79.8123 47.0938 79.6461 47.3848 79.6424 47.6539C79.6308 47.946 79.6964 48.2386 79.91 48.44C80.1157 48.6643 80.3465 48.7428 80.6395 48.7909C80.5778 48.7828 80.3389 48.7274 80.6395 48.7909C80.7012 48.799 80.7704 48.8226 80.8322 48.8307C80.94 48.8545 81.0635 48.8707 81.1713 48.8945C81.3871 48.9421 81.6184 48.9821 81.8417 49.0451C82.2345 49.14 82.6274 49.2349 83.0122 49.3529C83.1893 49.4002 83.3584 49.4706 83.5274 49.5409C83.6042 49.5799 83.6965 49.6112 83.7733 49.6502C83.8194 49.6659 83.8656 49.6816 83.8962 49.7049C84.0728 49.7906 83.6428 49.5801 83.8194 49.6659C84.157 49.845 84.4635 50.0393 84.762 50.2566C85.1979 50.5979 85.9808 50.4264 86.2655 49.9439C86.5583 49.4384 86.4195 48.8377 85.9375 48.4808Z" fill="#D3CBCF" />
							<path d="M76.0737 66.9591C75.0486 66.7523 74.0723 66.3689 73.1276 65.9319C73.074 65.9008 73.0278 65.8851 72.9741 65.854C73.1046 65.9241 73.0509 65.893 72.951 65.8462C72.8281 65.7915 72.7208 65.7293 72.5979 65.6746C72.3676 65.5577 72.1298 65.4254 71.9151 65.3009C71.4395 65.0363 70.9564 64.7562 70.4733 64.4762C69.9902 64.1961 69.2862 64.2528 68.9698 64.7889C68.6776 65.2559 68.7375 65.9714 69.2743 66.2826C71.1991 67.3874 73.1697 68.5464 75.3738 68.9996C75.6743 69.0632 75.9137 69.0802 76.1937 68.9437C76.4271 68.8299 76.6701 68.5778 76.743 68.3323C76.8812 67.8257 76.6517 67.0784 76.0737 66.9591Z" fill="#D3CBCF" />
							<path d="M60.1302 87.1039C59.9139 87.0948 59.6976 87.0856 59.4814 87.0765C59.381 87.0681 59.2807 87.0597 59.1728 87.0359C59.1111 87.0278 59.0649 87.0121 59.0032 87.004C58.9645 87.0038 58.7874 86.9564 58.9801 86.9962C59.1728 87.0359 58.9957 86.9886 58.957 86.9883C58.8953 86.9802 58.8492 86.9645 58.7874 86.9564C58.6796 86.9326 58.5642 86.8934 58.4563 86.8696C58.2561 86.8144 58.064 86.7362 57.8718 86.658C57.772 86.6112 57.6797 86.5799 57.5798 86.533C57.4263 86.4551 57.5798 86.533 57.6491 86.5566C57.5954 86.5255 57.5492 86.5098 57.4956 86.4787C57.3114 86.3775 57.1198 86.2608 56.9282 86.1442C56.7365 86.0276 56.553 85.8879 56.3769 85.7637C56.2776 85.6785 56.1858 85.6086 56.0865 85.5234C56.0177 85.4614 55.9114 85.3223 56.094 85.5388C56.0483 85.4847 55.9947 85.4536 55.949 85.3994C55.7353 85.1981 55.5131 85.0582 55.2196 85.0485C54.9572 85.0237 54.6234 85.129 54.4276 85.3199C54.0516 85.6941 53.8872 86.4235 54.3221 86.8416C55.1542 87.6007 56.0577 88.2297 57.1027 88.675C58.0017 89.0578 58.9806 89.249 59.9466 89.2555C60.5106 89.267 61.0878 88.8711 61.1192 88.2639C61.1345 87.7028 60.7328 87.1157 60.1302 87.1039Z" fill="#D3CBCF" />
							<path d="M68.8284 52.3709C67.1377 51.6674 65.3853 50.9559 63.5076 50.9355C62.9436 50.924 62.3664 51.3199 62.335 51.9271C62.3122 52.4728 62.7214 53.0753 63.324 53.0871C63.7646 53.0824 64.1966 53.1391 64.6361 53.2113C64.6747 53.2116 64.7209 53.2273 64.7671 53.2429C64.4816 53.2103 64.6592 53.2192 64.7209 53.2273C64.8288 53.2511 64.9367 53.2749 65.0445 53.2987C65.2603 53.3462 65.468 53.4169 65.6682 53.472C66.507 53.7314 67.3062 54.0675 68.1054 54.4035C68.6202 54.63 69.3284 54.2657 69.4746 53.7362C69.668 53.1454 69.3893 52.613 68.8284 52.3709Z" fill="#D3CBCF" />
							<path d="M57.8544 68.9275C56.2513 68.6014 54.7227 67.9144 53.2166 67.2737C52.6863 67.0549 51.9937 67.4116 51.8474 67.9411C51.6695 68.5242 51.9558 69.0721 52.5092 69.2988C54.0077 69.9241 55.5364 70.611 57.147 70.9526C57.4475 71.0161 57.6869 71.0331 57.9669 70.8966C58.2003 70.7828 58.4433 70.5308 58.5161 70.2852C58.597 70.0166 58.6012 69.7091 58.4653 69.4698C58.3525 69.2384 58.1318 68.9832 57.8544 68.9275Z" fill="#D3CBCF" />
							<path d="M61.2005 38.0638C58.3566 37.4833 55.5866 36.5803 52.7428 35.9998C52.1878 35.8884 51.544 36.0685 51.3736 36.6671C51.2123 37.1658 51.4418 37.9132 52.0354 38.0248C54.8792 38.6054 57.6492 39.5083 60.4931 40.0889C61.048 40.2003 61.6919 40.0201 61.8622 39.4215C62.008 38.9304 61.7785 38.1831 61.2005 38.0638Z" fill="#D3CBCF" />
							<path d="M49.9493 54.5652C48.4617 54.2783 46.9312 54.2987 45.4435 54.0118C45.1891 53.964 44.8393 54.1154 44.6516 54.2833C44.4638 54.4511 44.2976 54.7422 44.294 55.0113C44.2823 55.3034 44.3479 55.596 44.5616 55.7973C44.7672 56.0217 44.998 56.1002 45.2911 56.1483C46.7787 56.4352 48.3092 56.4148 49.7969 56.7016C50.0512 56.7495 50.4011 56.5981 50.5888 56.4302C50.7765 56.2623 50.9428 55.9713 50.9464 55.7022C50.9581 55.4101 50.8924 55.1175 50.6788 54.9161C50.4576 54.6993 50.2423 54.6133 49.9493 54.5652Z" fill="#D3CBCF" />
							<path d="M41.4789 77.0052C39.5771 75.9082 37.5804 74.972 35.7735 73.7142C35.3065 73.3881 34.5703 73.5369 34.27 74.027C33.9617 74.54 34.0613 75.1789 34.5745 75.5207C36.3969 76.7709 38.378 77.7147 40.2798 78.8117C40.7629 79.0917 41.467 79.035 41.7833 78.4989C42.0525 78.024 41.9926 77.3086 41.4789 77.0052Z" fill="#D3CBCF" />
							<path d="M41.0324 44.2475C39.0901 43.8576 37.2529 43.1301 35.3031 42.7248C35.0026 42.6612 34.7632 42.6442 34.4832 42.7807C34.2498 42.8945 34.0068 43.1466 33.934 43.3921C33.7727 43.8908 34.0022 44.6382 34.5957 44.7498C36.538 45.1397 38.3752 45.8672 40.325 46.2726C40.6255 46.3361 40.8649 46.3531 41.1449 46.2166C41.3783 46.1029 41.6213 45.8508 41.6941 45.6052C41.8399 45.1141 41.6104 44.3667 41.0324 44.2475Z" fill="#D3CBCF" />
							<path d="M34.6892 62.4426C32.845 61.6613 31.0002 60.9183 29.1083 60.2366C28.5775 60.0562 27.8934 60.3514 27.7391 60.9039C27.5693 61.4641 27.8395 62.0579 28.4009 62.2617C30.2853 62.928 32.1376 63.6863 33.9818 64.4677C34.5121 64.6866 35.2047 64.3299 35.351 63.8003C35.5289 63.2172 35.2426 62.6694 34.6892 62.4426Z" fill="#D3CBCF" />
							<path d="M23.2341 45.9343C21.5896 45.2466 19.9681 44.5667 18.3391 43.8713C17.8088 43.6524 17.1162 44.0091 16.9699 44.5387C16.7921 45.1218 17.0783 45.6697 17.6317 45.8964C19.2607 46.5917 20.8977 47.264 22.5267 47.9594C23.057 48.1783 23.7497 47.8216 23.8959 47.292C24.0813 46.7243 23.795 46.1765 23.2341 45.9343Z" fill="#D3CBCF" />
							<path d="M29.0954 35.4401C28.6549 35.4448 28.2228 35.388 27.7833 35.3159C27.7447 35.3156 27.6985 35.2999 27.6524 35.2842C27.9379 35.3169 27.7602 35.308 27.6985 35.2999C27.5906 35.2761 27.4828 35.2523 27.3749 35.2285C27.1591 35.1809 26.9514 35.1103 26.7513 35.0551C25.9124 34.7957 25.1132 34.4597 24.314 34.1237C23.7837 33.9048 23.0911 34.2615 22.9448 34.791C22.7669 35.3741 23.0532 35.922 23.6066 36.1487C25.2973 36.8522 27.0497 37.5637 28.9274 37.5841C29.4914 37.5956 30.0686 37.1997 30.1 36.5925C30.0997 36.0389 29.6905 35.4364 29.0954 35.4401Z" fill="#D3CBCF" />
							<path d="M22.3804 61.7207C21.8024 61.6015 21.233 61.4208 20.6957 61.148C20.7724 61.187 20.8648 61.2184 20.949 61.2728C20.2888 60.9454 19.6763 60.5183 19.103 60.0531C18.9119 59.8981 18.5571 59.8418 18.3092 59.8863C18.0458 59.9383 17.7496 60.1209 17.6075 60.3429C17.473 60.5803 17.3765 60.8565 17.4346 61.1337C17.5002 61.4263 17.6597 61.635 17.8889 61.8287C19.013 62.7129 20.2551 63.444 21.6655 63.7304C21.9661 63.7939 22.2054 63.8109 22.4855 63.6744C22.7188 63.5607 22.9618 63.3086 23.0347 63.063C23.1156 62.7945 23.1197 62.4869 22.9839 62.2477C22.8786 62.0317 22.6579 61.7764 22.3804 61.7207Z" fill="#D3CBCF" />
							<path d="M47.7697 91.3337C45.9255 90.5523 44.1692 89.5563 42.1888 89.1277C41.8883 89.0641 41.6489 89.0471 41.3689 89.1836C41.1355 89.2974 40.8925 89.5495 40.8196 89.795C40.6584 90.2937 40.8879 91.0411 41.4814 91.1527C43.4698 91.5583 45.2181 92.5774 47.0623 93.3588C47.5771 93.5852 48.2852 93.221 48.4315 92.6914C48.6249 92.1007 48.3306 91.5758 47.7697 91.3337Z" fill="#D3CBCF" />
							<path d="M75.8221 35.787C74.5338 35.0402 73.0964 34.4614 71.6168 34.1516C71.3163 34.088 71.0769 34.071 70.7969 34.2075C70.5635 34.3213 70.3205 34.5734 70.2477 34.8189C70.1667 35.0875 70.1626 35.395 70.2985 35.6343C70.4268 35.8581 70.6475 36.1133 70.9094 36.1766C72.0654 36.4151 73.1727 36.8301 74.2167 37.3523C74.1399 37.3134 74.0476 37.282 73.9633 37.2276C74.1861 37.3291 74.3933 37.4381 74.608 37.5626C74.8533 37.7103 75.1152 37.7736 75.4017 37.7294C75.6652 37.6774 75.9613 37.4949 76.1034 37.2729C76.3957 36.8058 76.3358 36.0903 75.8221 35.787Z" fill="#D3CBCF" />
							<path d="M82.8946 80.4376C86.2265 81.5058 89.6056 82.5128 92.833 83.8802C93.3633 84.0991 94.0328 83.7346 94.2021 83.2129C94.4031 82.6376 94.0707 82.0741 93.5404 81.8552C90.2974 80.4954 86.9414 79.4962 83.5864 78.4201C83.0401 78.2472 82.4102 78.5351 82.2173 79.0874C82.0399 79.6321 82.3327 80.2723 82.8946 80.4376Z" fill="#D3CBCF" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="104" height="104" viewBox="0 0 104 104" fill="none" class="svg3">
							<path d="M88.0905 69.0616C90.8203 60.5705 90.5735 50.1016 87.5425 41.7294C85.4514 35.9666 80.6663 28.46 73.4138 30.0675C67.0621 31.4844 64.4187 39.1146 64.5186 44.8922C64.6408 51.3816 66.5075 58.2527 69.872 63.8291C71.5287 66.5777 73.7668 69.2753 76.7418 70.6864C79.865 72.1737 83.1589 71.8745 86.2389 70.4323C87.9146 69.6502 86.3974 67.221 84.7374 67.9864C73.6932 73.1315 68.2984 54.9408 67.526 47.3386C67.0329 42.4479 67.7403 36.0778 72.5956 33.4131C78.1191 30.3709 82.839 37.3453 84.464 41.6656C87.5733 49.9544 88.0167 59.9798 85.3026 68.4542C84.7415 70.1885 87.5305 70.8283 88.0905 69.0616Z" fill="#E1D4DB" />
							<path d="M85.9028 68.485C82.4028 62.7185 80.7853 56.0501 78.9807 49.6143C78.4878 47.8326 75.7287 48.6654 76.2374 50.4304C78.1137 57.0906 79.852 63.9981 83.4718 69.9712C84.4117 71.5444 86.8749 70.0571 85.9028 68.485Z" fill="#E1D4DB" />
							<path d="M66.4665 76.0824C62.0603 72.9195 57.561 69.8891 52.8758 67.1238C47.5303 63.9584 41.56 60.4891 35.3285 59.5381C33.132 59.2033 30.6868 59.2003 28.8018 60.5396C26.7268 62.0145 26.1608 64.6234 26.22 67.0342C26.3062 70.8206 27.4024 74.8015 29.7309 77.8039C32.3972 81.249 36.2104 83.5725 40.2551 85.0143C48.9173 88.0901 60.9965 87.5594 66.3802 79.0161C67.3679 77.4625 64.8165 76.135 63.8445 77.6719C59.6491 84.3476 50.0434 84.7509 43.2021 82.9449C39.4304 81.9478 35.7462 80.1221 33.0344 77.2938C30.5906 74.7484 29.45 71.4167 29.1308 67.9454C29.0307 66.8151 28.9932 65.618 29.3313 64.5223C29.5365 63.8357 29.9546 63.2232 30.3504 62.9353C31.6004 62.0049 33.482 62.1068 35.1921 62.4248C40.7453 63.4298 45.9886 66.4365 50.8043 69.2301C53.6413 70.8885 56.4167 72.646 59.1451 74.4536C60.2037 75.1648 61.2622 75.8759 62.3218 76.6194C62.7692 76.9451 63.2156 77.2386 63.663 77.5644C64.0604 77.8432 64.3586 78.0604 64.5078 78.169C65.9981 79.2226 67.9735 77.1517 66.4665 76.0824Z" fill="#E1D4DB" />
							<path d="M64.2571 77.4C58.0872 76.3498 52.2358 74.0912 46.2858 72.3053C44.5205 71.7786 43.8791 74.5681 45.6444 75.0947C51.5944 76.8806 57.4459 79.1392 63.6157 80.1894C65.423 80.5042 66.08 77.6981 64.2571 77.4Z" fill="#E1D4DB" />
							<path d="M55.0669 47.1042C53.8957 39.6928 52.3934 31.5309 47.5422 25.5323C44.5776 21.87 40.1708 18.1728 35.4149 17.288C33.3792 16.9157 31.25 17.1779 29.6759 18.6206C27.8657 20.2814 27.3958 22.8549 27.2746 25.1905C26.9797 31.2884 30.8441 36.8003 35.255 40.627C40.0818 44.8128 46.3873 48.1257 52.8624 48.5832C54.6959 48.7029 54.5901 45.8401 52.7733 45.7361C48.0513 45.417 43.3635 43.0889 39.5548 40.3928C35.4312 37.4638 31.579 33.3764 30.4003 28.3132C29.653 25.1309 29.9924 19.4202 34.4971 20.0377C38.432 20.56 42.1255 23.7132 44.6921 26.5623C49.6085 32.0569 51.0922 40.1384 52.2032 47.1792C52.4864 48.9838 55.3501 48.9087 55.0669 47.1042Z" fill="#E1D4DB" />
							<path d="M53.3467 44.9244C49.4429 41.2597 45.9643 37.209 42.0605 33.5443C40.7259 32.2914 38.7505 34.3623 40.1018 35.6309C44.0055 39.2956 47.4842 43.3462 51.388 47.0109C52.7393 48.2795 54.698 46.1929 53.3467 44.9244Z" fill="#E1D4DB" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="150" height="138" viewBox="0 0 150 138" fill="none" class="svg4">
							<path d="M42.3719 100.265C68.8534 111.94 106.435 115.314 129.52 94.6568C130.152 94.0969 130.047 93.1121 129.529 92.5046C123.931 86.0787 115.174 82.648 107.352 79.7846C98.0076 76.3511 88.8213 74.1013 78.8099 74.0089C69.5815 73.9202 61.4139 75.7328 53.1792 79.9441C49.0513 82.0438 45.1086 84.5024 41.2379 87.0307C39.5168 88.1664 37.7837 89.3231 36.0715 90.492C34.8697 91.3111 33.2409 91.9957 32.5008 93.2775C32.0641 94.034 32.3827 94.8904 33.0523 95.333C35.9765 97.3576 39.2866 98.5682 42.3719 100.265C44.0783 101.195 45.6158 98.58 43.8884 97.6387C40.8032 95.9415 37.493 94.7309 34.5777 92.7395C34.7644 93.4357 34.9512 94.1319 35.1291 94.795C35.6265 93.9334 38.0641 92.8192 39.0273 92.1705C40.6368 91.0824 42.2673 90.0065 43.8856 88.9516C47.3819 86.6835 50.9501 84.4849 54.6736 82.6001C62.6156 78.5559 70.445 76.9404 79.3452 77.0637C88.6367 77.1888 97.113 79.3088 105.79 82.4412C113.339 85.1468 121.952 88.4383 127.367 94.6466C127.367 93.9182 127.376 93.2229 127.376 92.4945C116.254 102.435 101.177 106.115 86.5698 106.311C72.0166 106.51 57.2088 103.508 43.8674 97.6266C42.1181 96.8688 40.5806 99.4834 42.3719 100.265Z" fill="#DDD9DA" />
							<path d="M37.663 95.165C53.2709 92.6049 69.1181 91.864 84.9159 92.1313C91.7174 92.2477 98.4841 92.0358 105.286 91.9566C112.393 91.8848 119.736 92.0338 126.479 94.5821C128.298 95.268 129.072 92.3247 127.253 91.6389C120.754 89.2031 113.649 88.8836 106.796 88.9054C99.4968 88.9221 92.236 89.2129 84.9347 89.0882C68.8538 88.8256 52.7955 89.6407 36.9135 92.2387C34.9579 92.5666 35.7617 95.4962 37.663 95.165Z" fill="#DDD9DA" />
							<path d="M118.125 94.7747C101.833 98.2286 85.2686 102.057 68.4979 100.416C66.5626 100.223 66.5771 103.258 68.5124 103.45C85.5208 105.117 102.372 101.229 118.896 97.7132C120.813 97.3068 120.03 94.3894 118.125 94.7747Z" fill="#DDD9DA" />
							<path d="M94.0143 82.9274C84.4527 81.8618 75.0681 83.1118 65.6284 84.5542C63.6972 84.8401 64.5009 87.7697 66.4112 87.4717C75.6308 86.0704 84.738 84.9124 94.0409 85.9406C95.9729 86.1875 95.9375 83.1411 94.0143 82.9274Z" fill="#DDD9DA" />
							<path d="M64.0544 95.973C59.9703 95.5203 55.9364 94.5922 51.8086 94.5065C50.9837 94.4785 50.297 95.2308 50.3026 96.0466C50.2961 96.8833 51.007 97.5459 51.844 97.5529C55.9718 97.6386 60.0057 98.5667 64.0898 99.0194C64.9115 99.1016 65.6046 98.2409 65.5958 97.4793C65.5723 96.5973 64.8639 96.0762 64.0544 95.973Z" fill="#DDD9DA" />
							<path d="M15.6893 72.6721C44.689 71.1475 79.5462 57.1466 90.886 28.2792C91.2177 27.462 90.4801 26.7 89.8008 26.4198C81.784 23.1642 72.1988 24.1303 63.851 25.1384C54.6265 26.2567 46.0401 28.1637 37.5894 32.1663C29.1056 36.1779 22.3483 41.3263 16.6892 48.8459C13.7824 52.7152 11.2509 56.8572 8.82446 61.0598C7.74471 62.93 6.67386 64.8334 5.61514 66.7157C4.87184 68.0517 3.72498 69.4068 3.64322 70.9566C3.60761 71.5525 4.13729 72.3346 4.78428 72.4279C8.42841 72.9629 12.0314 72.5495 15.6893 72.6721C17.6432 72.7355 17.6287 69.7012 15.6748 69.6378C12.3 69.5105 8.90166 69.958 5.54624 69.5057C5.92956 70.0072 6.304 70.4755 6.68731 70.977C6.74559 70.002 8.54675 67.7078 9.14122 66.6782C10.1393 64.9009 11.1374 63.1236 12.1775 61.3707C14.3823 57.6004 16.6922 53.8908 19.3264 50.3965C24.7372 43.2099 31.4297 38.4163 39.5302 34.6317C47.6186 30.8682 55.9001 29.1494 64.7057 28.1254C72.5804 27.2084 81.5178 26.3446 89.0356 29.3962C88.6709 28.7654 88.3151 28.1677 87.9504 27.5369C82.4875 41.4177 70.6301 51.4666 57.6755 58.2202C44.7661 64.944 30.2062 68.8937 15.6959 69.65C13.7323 69.7491 13.7467 72.7833 15.6893 72.6721Z" fill="#DDD9DA" />
							<path d="M8.85167 70.4335C22.02 60.8333 36.2024 52.8272 50.8716 45.7746C56.9178 42.8774 62.7578 39.6089 68.7054 36.5426C74.6862 33.4674 81.022 30.4572 87.7758 29.7335C89.6917 29.5229 89.6983 26.5008 87.7613 26.6993C74.4948 28.1176 63.1349 36.5765 51.3804 42.1739C36.0117 49.467 21.1054 57.7557 7.34512 67.7986C5.78663 68.9441 7.29318 71.579 8.85167 70.4335Z" fill="#DDD9DA" />
							<path d="M80.6772 33.6763C67.8129 44.0124 54.8411 54.8748 39.2969 60.9179C37.4934 61.6137 38.264 64.5522 40.0796 63.8353C56.1576 57.5961 69.5006 46.5278 82.821 35.8387C84.3407 34.6147 82.1847 32.4734 80.6772 33.6763Z" fill="#DDD9DA" />
							<path d="M54.1642 33.8071C45.1321 37.1658 37.3235 42.4357 29.5197 47.9886C27.9402 49.122 29.4467 51.7569 31.0262 50.6235C38.5914 45.2411 46.18 40.0123 54.9469 36.7245C56.7714 36.0408 55.9887 33.1234 54.1642 33.8071Z" fill="#DDD9DA" />
							<path d="M33.3131 58.9482C29.3413 60.4375 25.2119 61.4715 21.3711 63.3166C20.6651 63.6655 20.3957 64.7147 20.7903 65.3909C21.2569 66.1366 22.1053 66.3182 22.8655 65.9726C23.8069 65.5075 24.5429 65.2039 25.4446 64.856C26.4127 64.4903 27.3897 64.1578 28.3666 63.8253C30.2753 63.1901 32.1807 62.6091 34.0715 61.9077C34.8164 61.6373 35.4157 60.8906 35.1392 60.0585C34.9556 59.3081 34.1243 58.6601 33.3131 58.9482Z" fill="#DDD9DA" />
						</svg>
					</p>
				</div>
			</div>
		</section>
		<section class="categories">
			<div class="wrapper">
				<div class="categories__inner">

					<?php foreach(ProductSelect() as $row){
						echo '
							<a href="./shop-single.php?id=' . $row['id'] .' ">
								<div class="categories__list">
									<button class="categories__button">'. currentCategory($row['categoryID']) .'</button>
									<div class="categories__picture" style="background: url('.$row['image'].'), #f9f8f8 20% / cover;"></div>
									<h3>'. str_replace("_", " ", $row['name']) .'</h3>
									<hr class="categories__hr" />
									<div class="categories__footer">
										<div class="categories__left">
												<p class="categories__cost">$' .$row['price'].'.00</p>
												<p class="categories__sale">$'.$row['price'] - $row['discountAmount'].'.00</p>
										</div>
										<div class="categories__star">
											'.drowStars($row['rating']).'
										</div>
									</div>
								</div>
							</a>';
					} ?>
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
		<?php include_once __DIR__ . '/components/footer.php' ?>
	</div>
	<script src="./assets/index-shop.js"></script>

</html>