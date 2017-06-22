<?php
    include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feature | 6Parcels - Courier 3.1</title>
	<link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/owl.carousel.min.css?v=<?= $config['version'] ?>">
    <link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/owl.theme.default.min.css?v=<?= $config['version'] ?>">
	<meta property="og:title" content="Feature | 6Parcels - Courier 3.1" />
	<meta name="description" content="">
	<meta property="og:description" content="">
    <meta name="keywords" content="">
	<meta property="fb:app_id" content="" />
	<meta property="og:url" content="https://www.6parcels.com/feature" />
	<meta property="og:type" content="website" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="<?= $config['cdn_loc'] ?>images/favicon.ico?v=<?= $config['version'] ?>">
    <link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/font-awesome.min.css?v=<?= $config['version'] ?>">
    <link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/bootstrap.min.css?v=<?= $config['version'] ?>">
	<link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/main.css?v=<?= $config['version'] ?>">
	<script src="<?= $config['cdn_loc'] ?>js/jquery.min.js?v=<?= $config['version'] ?>"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<?php
	include_once('common/header.php'); 
?>
<section id="feature_header" class="page_header fixed_section1">
	<div class="container text-right">
		<p class="name">6Parcels</p>
		<h1 class="sub_title">Features</h1>
		<!-- <p class="txt">Manage your deliveries and customers with ease.</p> -->
	</div>
</section>

<div id="wrapper">

<section id="feature_dashboard">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<img src="<?= $config['cdn_loc'] ?>images/laptop_orders.png?v=<?= $config['version'] ?>" alt="laptop" class="img-responsive laptop_img">
			</div>
			<div class="col-sm-5">
				<div class="txt_block">
					<h2 class="sub_title">Dashboard</h2>
					<p class="txt">Provides you and your team with a quick overview of your current delivery status for today, this week or this month.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="feature_proof">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="txt_block">
					<h2 class="sub_title">Consignment with Proof-of-Delivery</h2>
					<p class="txt">Every consignment comes with its own proof-of-delivery which support signature, timestamp and stamping. Courier can also upload any images to show defects discovered during collection for evidence.</p>
				</div>
			</div>
			<div class="col-sm-7">
				<img src="<?= $config['cdn_loc'] ?>images/screenshot33.png?v=<?= $config['version'] ?>" alt="laptop" class="img-responsive screenShot_img">
			</div>
		</div>
	</div>
</section>


<section id="mobile_block">
	<div class="container text-center">
		<h2 class="sub_title">Driver App Included</h2>
		<div class="txt">With the Android driver app, courier is able to know the consignments’ status real-tie and do last-min pickup based on drivers’ GPS locations.</div>
		<div class="show_app_block">
			<div class="loop owl-carousel owl-theme">
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_first.jpg?v=<? $config['version'] ?>" alt="Driver's app - 6Parcels" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_menu.jpg?v=<? $config['version'] ?>" alt="Driver's app - menu" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_login.jpg?v=<? $config['version'] ?>" alt="Driver's app - Login" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_orders.jpg?v=<? $config['version'] ?>" alt="Driver's app - Orders" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_orderdetails_info.jpg?v=<? $config['version'] ?>" alt="Driver's app - Order detail - info" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_orderdetails_message.jpg?v=<? $config['version'] ?>" alt="Driver's app - Order detail - message" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
				<div class="item">
					<div class="mobile_box">
						<img src="<?= $config['cdn_loc'] ?>images/app_orderdetails_pod.jpg?v=<? $config['version'] ?>" alt="Driver's app - Order detail - pod" class="screen_shot">
						<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="downlaod_app" class="text-center bg_light_linear">
	<p>Download App !</p>
	<a href="https://play.google.com/store/apps/details?id=com.sixconnect.drivers#details-reviews"><img src="<?= $config['cdn_loc'] ?>images/googlePlayBtn_b.svg?v=<?= $config['version'] ?>" alt="google play"></a>
</section>

<section id="leave_mail_block">
	<div class="container">
		<h2 class="sub_title text-center">Contact us for <span class="fc_yellow">Free 30 Days</span> trail now !</h2>
		<div class="size">
			<form action="">
				<input type="email" name="guest_mail" id="guest_mail" required onblur="checkLabel()" onfocus="labelZindex()">
				<label for="guest_mail">Enter your email here</label>
				<button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
</section>




<?php
	include_once('common/footer.php'); 
?>
</div>


<script src="<?= $config['cdn_loc'] ?>js/parallax.min.js?v=<? $config['version'] ?>"></script>
<script src="<?= $config['cdn_loc'] ?>js/owl.carousel.js?v=<? $config['version'] ?>"></script>
<script src="<?= $config['cdn_loc'] ?>js/inputEmailBlock.js?v=<? $config['version'] ?>"></script>
<script>
	$("#header li[data-link='feature']").addClass('active');

	const wrapperTop = ($('#feature_header').innerHeight() + 80);
	$('#wrapper').css('top', wrapperTop + 'px');
	
	$(window).scroll(() => {
		const scrollDistance = $(window).scrollTop();
		if (scrollDistance >= wrapperTop) {
			$('#feature_header').css('opacity', '0');
		} else {
			$('#feature_header').css('opacity', '1');
		}
	});



	$('#mobile_block').parallax({imageSrc: '<?= $config['cdn_loc'] ?>images/ryan-hefner-190738_2.png'});

	$('#mobile_block .loop').owlCarousel({
		center: true,
        items: 3,
        loop: true,
        margin: 10,
        autoplay: true,
        responsive: {
          991: {
            items: 4
          }
        }
    });
</script>
</body>
</html>