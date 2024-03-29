<?php
    include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>6Parcels - Courier 3.1</title>
	<link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/owl.carousel.min.css?v=<?= $config['version'] ?>">
    <link rel="stylesheet" href="<?= $config['cdn_loc'] ?>style/css/owl.theme.default.min.css?v=<?= $config['version'] ?>">
	<meta property="og:title" content="6Parcels - Courier 3.1" />
	<meta name="description" content="6Parcel is a cloud-service designed for courier companies to easily manage their business from day one.">
	<meta property="og:description" content="6Parcel is a cloud-service designed for courier companies to easily manage their business from day one.">
    <meta name="keywords" content="courier software, dispatch software, courier solution, delivery software">
	<meta property="fb:app_id" content="" />
	<meta property="og:url" content="https://www.6parcels.com" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="">
    <meta name="robots" content="index, follow" />

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
	<section id="home_landing">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 pull-right">
					<div class="text-right content_block">
						<p class="name f_f1">6Parcels</p>
						<h1 class="title f_f1">Courier System v3.1</h1>
						<p class="txt">6Parcels is a courier software provider that helps small logistics firms remain competitive against the big players</p>
						<div class="counting_block">
							<h2 class="counting_txt">
								<span class="number_box">1</span><span class="number_box">3</span>,<span class="number_box">9</span><span class="number_box">8</span><span class="number_box">7</span>,<span class="number_box">0</span><span class="number_box">4</span><span class="number_box">5</span> Parcels Delivered and Counting</h2>
						</div>
						<a href="https://app.6parcels.com/app/system#/courier/register" class="cta_btn" rel="nofollow">Sign Up for <b>Free 30 Days</b> trial</a>
					</div>
				</div>
				<div class="col-sm-7">
					<img src="<?= $config['cdn_loc'] ?>images/homepage_bg1.png?v=<? $config['version'] ?>" alt="6Parcels-Courier syetem v3.0" class="img-responsive">
				</div>
			</div>
		</div>
	</section>

<div id="wrapper">
	<div id="partner_block">
		<div class="container-fuild text-center">
			<div class="partner_box">
				<img src="<?= $config['cdn_loc'] ?>images/logo_EWC.png?v=<? $config['version'] ?>" alt="EWC network" height="44">
			</div>
			<div class="partner_box">
				<img src="<?= $config['cdn_loc'] ?>images/logo_SingTel.jpg?v=<? $config['version'] ?>" alt="singTel" height="50">
			</div>
			<div class="partner_box">
				<img src="<?= $config['cdn_loc'] ?>images/logo_JT.jpg?v=<? $config['version'] ?>" alt="jTexpress" height="40">
			</div>
		</div>
	</div>

	<section id="home_features_1">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<div class="content_block">
						<h3 class="sub_title">We give you tool to deliver</h3>
						<p class="txt">6Parcels provides a simple platform to manage your business efficiently. Our mission is to let you focus on your money-making business, while we help to automate all other things.</p>
						<div class="icons3_block">
							<div class="icon_box">
								<span class="icon_num">1.</span>
								<img src="<?= $config['cdn_loc'] ?>images/home_icon_report.svg?v=<? $config['version'] ?>" alt="Sales Charts & Reports">
								<p class="icon_txt">Sales Charts &amp; Reports</p>
							</div>
							<div class="icon_box">
								<span class="icon_num">2.</span>
								<img src="<?= $config['cdn_loc'] ?>images/home_icon_invoice.svg?v=<? $config['version'] ?>" alt="Generate Invoices">
								<p class="icon_txt">Generate Invoices</p>
							</div>
							<div class="icon_box">
								<span class="icon_num">3.</span>
								<img src="<?= $config['cdn_loc'] ?>images/home_icon_portal.svg?v=<? $config['version'] ?>" alt="Customer Order Portal">
								<p class="icon_txt">Customer Order Portal</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 hidden-xs text-right">
					<img src="<?= $config['cdn_loc'] ?>images/homepage_bg2.png?v=<? $config['version'] ?>" alt="We give you tool to deliver" class="img-responsive section_img">
				</div>
			</div>
		</div>
	</section>

	<section id="home_features_2">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="img_border_radious hidden-xs">
						<img src="<?= $config['cdn_loc'] ?>images/homepage_b3.png?v=<? $config['version'] ?>" alt="Bill your customer effortlessly" class="img-responsive">
					</div>
				</div>
				<div class="col-sm-8">
					<div class="content_block">
						<h3 class="sub_title">Bill your customer effortlessly</h3>
						<p class="txt">From the moment you start, it will not take you long before you get used to its simplicity. From managing orders to your drivers' salaries, 6Parcels takes the trouble off you. Our mission is to let you focus on your core business and let us automate the rest from you.</p>
						<div class="icons3_block">
							<div class="icon_box">
								<span class="icon_num">4.</span>
								<img src="<?= $config['cdn_loc'] ?>images/home_icon_assign.svg?v=<? $config['version'] ?>" alt="Assign Jobs to Driver">
								<p class="icon_txt">Assign Jobs to Driver</p>
							</div>
							<div class="icon_box">
								<span class="icon_num">5.</span>
								<img src="<?= $config['cdn_loc'] ?>images/home_icon_track.svg?v=<? $config['version'] ?>" alt="Online Tracking">
								<p class="icon_txt">Online Tracking</p>
							</div>
							<div class="icon_box">
								<span class="icon_num">6.</span>
								<img src="<?= $config['cdn_loc'] ?>images/home_icon_app.svg?v=<? $config['version'] ?>" alt="Driver's Mobile App">
								<p class="icon_txt">Driver's Mobile App</p>
							</div>
						</div>
					</div>
				</div><!-- content_block -->
			</div>
		</div>
	</section>

	<section id="mobile_block">
		<div class="container text-center">
			<h3 class="sub_title">Driver App Included</h3>
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
							<img src="<?= $config['cdn_loc'] ?>images/app_orderdetails_pod.jpg?v=<? $config['version'] ?>" alt="Driver's app - Order detail - pod" class="screen_shot">
							<img src="<?= $config['cdn_loc'] ?>images/cellphone_n.png?v=<? $config['version'] ?>" alt="mobile" class="mobile">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials_block">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="title_block">
						<h3 class="sub_title">People Who <i class="fa fa-heart"></i> Love 6Parcels</h3>
						<p class="txt">Take a look at what they said.</p>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="quote_block">
						<i class="fa fa-quote-left bg_icon"></i>
						<div class="person">
							<div class="photo">
								<img src="<?= $config['cdn_loc'] ?>images/winfredP.jpg?v=<? $config['version'] ?>" alt="Winfred Peng">
							</div>
							<div class="testimonials">
								<p>" Magnificent user experience. "</p>
								<p class="name">— Winfred Peng <i>Owner of Nice Corps</i></p>
							</div>
						</div>
						<div class="person">
							<div class="photo">
								<img src="<?= $config['cdn_loc'] ?>images/allen.jpg?v=<? $config['version'] ?>" alt="Alan Chou">
							</div>
							<div class="testimonials">
								<p>" I really love 6Parcels. I would not turn to any other company. "</p>
								<p class="name">— Alan Chou <i>Owner of Sumoworldwide Courier Service</i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="leave_mail_block">
		<div class="container">
			<h3 class="sub_title text-center">Contact us for <span class="fc_yellow">Free 30 Days</span> trail now !</h3>
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
	
	const wrapperTop = ($('#home_landing').innerHeight() + 80);
	$('#wrapper').css('top', wrapperTop + 'px');
	
	$(window).scroll(() => {
		const scrollDistance = $(window).scrollTop();
		if (scrollDistance >= wrapperTop) {
			$('#home_landing').css('opacity', '0');
		} else {
			$('#home_landing').css('opacity', '1');
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