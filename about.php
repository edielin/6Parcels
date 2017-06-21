<?php
    include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About | 6Parcels - Courier 3.1</title>
	<meta property="og:title" content="About | 6Parcels - Courier 3.1" />
	<meta name="description" content="">
	<meta property="og:description" content="">
    <meta name="keywords" content="">
	<meta property="fb:app_id" content="" />
	<meta property="og:url" content="https://www.6parcels.com/about" />
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
<section id="about_header" class="page_header fixed_section1">
	<div class="container text-right">
		<p class="name">6Parcels</p>
		<h1 class="sub_title">about</h1>
	</div>
</section>

<div id="wrapper">
<section id="about_intro" class="bg_dark_linear relative">
	<div class="container text-center">
		<h2 class="sub_title">Revolutionise Logistics Business</h2>
		<p class="txt">6Parcels is one of the many innovative products developed by Phokki Pte Ltd. We believes in challenging the conventional ways of doing things and using technologies to help re-define how industries works. We discovered the vast amount of resource wasted in this old industry.</p>
		<p class="txt">Together with our partners such as SingTel in Singapore, we began to work to use technologies to help people get their deliveries delivered in an hassle-free way while enabling any hardworking people to start their courier businesses anytime.</p>	
	</div>
	<div class="flex_box_center">
		<button class="join_btn f_f1 text-uppercase" data-href="https://app.6parcels.com/app/system#/couriers/login">Join us <i class="fa fa-angle-right"></i></button>
	</div>
	<img src="<?= $config['cdn_loc'] ?>images/peter-nguyen-128482.png?v=<? $config['version'] ?>" alt="Singapore" class="img_bottom">
</section>

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

<section id="about_team" class="text-center bg_light_linear">
	<div class="container">
		<h2 class="sub_title">Our Leadership Team</h2>
		<p class="txt">Our dedicated team is always there to ensure your logistics operation is optimized in every possible ways.</p>
		<div class="row">
			<div class="col-sm-3 col-xs-4">
				<div class="item_group">
					<div class="photo">
						<img src="<?= $config['cdn_loc'] ?>images/team-01.jpg?v=<? $config['version'] ?>" alt="Sean Seah" class="img-responsive">
					</div>
					<p class="name">Sean Seah</p>
					<p class="job">Technology</p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-4">
				<div class="item_group">
					<div class="photo">
						<img src="<?= $config['cdn_loc'] ?>images/team-03.jpg?v=<? $config['version'] ?>" alt="Jason Cheng" class="img-responsive">
					</div>
					<p class="name">Jason Cheng</p>
					<p class="job">Business</p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-4">
				<div class="item_group">
					<div class="photo">
						<img src="<?= $config['cdn_loc'] ?>images/team-02.jpg?v=<? $config['version'] ?>" alt="Grace Ng" class="img-responsive">
					</div>
					<p class="name">Grace Ng</p>
					<p class="job">Operation</p>
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<div class="item_group">
					<div class="photo">
						<img src="<?= $config['cdn_loc'] ?>images/team-05.jpg?v=<? $config['version'] ?>" alt="Hunt Wu" class="img-responsive">
					</div>
					<p class="name">Hunt Wu</p>
					<p class="job">Developer</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about_contact" class="bg_dark_linear">
	<div class="container">
		<h2 class="sub_title">How To Get In Touch With Us</h2>
		<div class="row">
			<div class="col-sm-6">
				<div class="info_block">
					<div class="list">
						<p class="info_title">Headquarters</p>
						<p class="info_content">
							<span class="bigger">ARK @ Gambas</span><br>
							7 Gambas Crescent #05-24
						</p>
					</div>
					<div class="list">
						<p class="info_title">Office In</p>
						<p class="info_content"><span class="bigger">Singapore 757087</span></p>
					</div>
					<div class="list">
						<p class="info_title">Phone Number</p>
						<p class="info_content">
							<a href="tel:6563975817">+65-6397-5817</a><br>
							<a href="tel:6563975818">+65-6397-5818</a>
						</p>
					</div>
					<div class="hr"></div>
					<div class="list">
						<p class="info_title">Enquiry</p>
						<p class="info_content mail"><a href="mailto:enquiry@6connect.biz">enquiry@6connect.biz</a></p>
					</div>
					<div class="list">
						<p class="info_title">Sales</p>
						<p class="info_content mail"><a href="mailto:sales@6connect.biz">sales@6connect.biz</a></p>
					</div>
					<div class="list">
						<p class="info_title">Partners</p>
						<p class="info_content mail"><a href="mailto:partners@6connect.biz">partners@6connect.biz</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 hidden-xs">
				<img src="<?= $config['cdn_loc'] ?>images/hamburg-office-harbour-city-people-behind-glass.jpg?v=<? $config['version'] ?>" alt="contact" class="img img-responsive">
			</div>
		</div>
	</div>
</section>

<?php
	include_once('common/footer.php'); 
?>
</div>


<script>
	$("#header li[data-link='about']").addClass('active');

	const wrapperTop = ($('#about_header').innerHeight() + 80);
	$('#wrapper').css('top', wrapperTop + 'px');
	
	$(window).scroll(() => {
		const scrollDistance = $(window).scrollTop();
		if (scrollDistance >= wrapperTop) {
			$('#about_header').css('opacity', '0');
		} else {
			$('#about_header').css('opacity', '1');
		}
	});


</script>
</body>
</html>