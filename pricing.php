<?php
    include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pricing | 6Parcels - Courier 3.1</title>
	<meta property="og:title" content="Pricing | 6Parcels - Courier 3.1" />
	<meta name="description" content="">
	<meta property="og:description" content="">
    <meta name="keywords" content="">
	<meta property="fb:app_id" content="" />
	<meta property="og:url" content="https://www.6parcels.com/pricing" />
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
<section id="pricing_header" class="page_header fixed_section1">
	<div class="container text-right">
		<p class="name">6Parcels</p>
		<h1 class="sub_title">Pricing</h1>
	</div>
</section>

<div id="wrapper">

<section id="pricing_plans" class="bg_dark_linear">
	<div class="container">
		<h2 class="sub_title text-center">Pricing Guide</h2>
		<p class="txt text-center">Get started with your Courier business in seconds. Already more than 1,000,000 order delivered.</p>
		<div class="txt_good text-center hidden-sm hidden-xs">
			<p><i class="fa fa-check-circle"></i> Ready in Seconds</p>
			<p><i class="fa fa-check-circle"></i> Free 30 Days trial</p>
			<p><i class="fa fa-check-circle"></i> No credit card, No risk</p>
		</div>
		<div class="row plans_block">
			<div class="col-sm-3">
				<div class="plan_box">
					<p class="plan_name">FREE</p>
					<div class="price_box">
						<span class="currency">SGD$</span>
						0
						<spn class="unit">/mo</spn>
					</div>
					<p class="suitable">Logistic firm with</p>
					<div class="condition">
						<p>Less than <b>5 Drivers</b></p>
						<p>Less than <b>300 Deliveries /mo</b></p>
					</div>
					<button class="choose_plan_btn free" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plan="free">CHOOSE PLAN</button>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="plan_box border_left">
					<p class="plan_name">BASIC</p>
					<div class="price_box">
						<span class="currency">SGD$</span>
						89
						<spn class="unit">/mo</spn>
					</div>
					<p class="suitable">Logistic firm with</p>
					<div class="condition">
						<p>Less than <b>10 Drivers</b></p>
						<p>Less than <b>500 Deliveries /mo</b></p>
					</div>
					<button class="choose_plan_btn" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plan="basic">CHOOSE PLAN</button>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="plan_box popular">
					<p class="plan_name">Premium</p>
					<div class="price_box">
						<span class="currency">SGD$</span>
						179
						<spn class="unit">/mo</spn>
					</div>
					<p class="suitable">Logistic firm with</p>
					<div class="condition">
						<p>Between <b>5</b> and <b>15 Drivers</b></p>
						<p>Between <b>500</b> and <b>2,000 Deliveries /mo</b></p>
					</div>
					<button class="choose_plan_btn popular" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plan="premium">CHOOSE PLAN</button>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="plan_box">
					<p class="plan_name">Enterprise</p>
					<div class="price_box">
						<span class="currency">SGD$</span>
						259
						<spn class="unit">/mo</spn>
					</div>
					<p class="suitable">Logistic firm with</p>
					<div class="condition">
						<p>Greater than <b>15 Drivers</b></p>
						<p>Greater than <b>2,000 Deliveries /mo</b></p>
					</div>
					<button class="choose_plan_btn" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plan="enterprise">CHOOSE PLAN</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="pricing_lists">
	<div class="container">
		<div id="detailHeaderPosition"></div>
		<div class="lists_row detail_header">
			<div class="td_info_box">Plan Details</div>
			<div class="td_plan_box text-center">
				<p class="plan_name">FREE</p>
				<p class="price">SGD$ 0 /mo</p>
				<button class="choose_plan_btn free" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plane="free">CHOOSE PLAN</button>
			</div>
			<div class="td_plan_box text-center">
				<p class="plan_name">basic</p>
				<p class="price">SGD$ 89 /mo</p>
				<button class="choose_plan_btn" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plane="basic">CHOOSE PLAN</button>
			</div>
			<div class="td_plan_box text-center">
				<p class="plan_name">premium</p>
				<p class="price popular">SGD$ 179 /mo</p>
				<button class="choose_plan_btn popular" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plane="premium">CHOOSE PLAN</button>
			</div>
			<div class="td_plan_box text-center">
				<p class="plan_name">Enterprise</p>
				<p class="price">SGD$ 259 /mo</p>
				<button class="choose_plan_btn" data-href="https://app.6parcels.com/app/system#/couriers/login" data-plane="enterprise">CHOOSE PLAN</button>
			</div>
		</div>
		<div class="striped">
			<div class="lists_row">
				<div class="td_info_box"><b>Driver App License</b></div>
				<div class="td_plan_box"><b>1</b> Free</div>
				<div class="td_plan_box"><b>5</b> Free</div>
				<div class="td_plan_box"><b>15</b> Free</div>
				<div class="td_plan_box"><b>25</b> Free</div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>Additional Driver App</b></div>
				<div class="td_plan_box"><b>$25</b> /driver</div>
				<div class="td_plan_box"><b>$20</b> /driver</div>
				<div class="td_plan_box"><b>$15</b> /driver</div>
				<div class="td_plan_box"><b>$15</b> /driver</div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>Consumer Booking Page</b></div>
				<div class="td_plan_box"><b>$20</b> /mo</div>
				<div class="td_plan_box"><b>$10</b> /mo</div>
				<div class="td_plan_box"><b>Free</b></div>
				<div class="td_plan_box"><b>Free</b></div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>Electronic Invoice</b></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>Electronic Receipt</b></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>Public Tracking Page</b></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>GPS Tracking</b></div>
				<div class="td_plan_box"><span class="no"></span></div>
				<div class="td_plan_box"><span class="no"></span></div>
				<div class="td_plan_box"><span class="no"></span></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
			</div>
			<div class="lists_row">
				<div class="td_info_box"><b>API Integration</b></div>
				<div class="td_plan_box"><span class="no"></span></div>
				<div class="td_plan_box"><span class="no"></span></div>
				<div class="td_plan_box"><span class="no"></span></div>
				<div class="td_plan_box"><i class="fa fa-check"></i></div>
			</div>
		</div>
		<div id="listsPosition"></div>
	</div>
</section>

<section id="pricing_questions">
	<div class="container">
		<h2 class="sub_title">Frequently Asked Questions</h2>
		<div class="quests_block">
			<div class="row">
				<div class="col-sm-6">
					<div class="qa_group">
						<div class="question">
							<span class="toggle_icon">+</span>
							What do I get ?
						</div>
						<div class="answer">
							<ul>
								<li>Online order tracking by customers</li>
								<li>Consignment management</li>
								<li>Customer management</li>
								<li>User management with different roles</li>
								<li>Dispatcher control panel</li>
								<li>Driver management</li>
								<li>Vehicle management</li>
								<li>Print and email invoices</li>
								<li>Secure daily backup in a different datacenter</li>
								<li>Color coding based on shipment status</li>
								<li>Free 30 days trial, no card information asked</li>
								<li>Unlimited users</li>
								<li>Unlimited email Support</li>
							</ul>
						</div>
					</div>
					<div class="qa_group">
						<div class="question">
							<span class="toggle_icon">+</span>
							Is the hosting reliable ?
						</div>
						<div class="answer">
							Up to now, the hosting is very reliable with 99.69% uptime since January 2010.
						</div>
					</div>
					<div class="qa_group">
						<div class="question">
							<span class="toggle_icon">+</span>
							Some support questions ?
						</div>
						<div class="answer">
							Just contact us and we will back to you in a snap.
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="qa_group">
						<div class="question">
							<span class="toggle_icon">+</span>
							Your business is growing ?
						</div>
						<div class="answer">
							If you are handling more than 10,000 consignments on a monthly basis, please contact us to discuss for a better plan that suites your growing business. Our scalable platform is always ready for your growth.
						</div>
					</div>
					<div class="qa_group">
						<div class="question">
							<span class="toggle_icon">+</span>
							Are you based in Singapore ?
						</div>
						<div class="answer">
							Good news to you! 6Parcels has collaborated with SingTel to offer discounted packages exclusively. Please pick up your phone and call your SingTel account manager to find out more now! Here is the brochure for you more information.
						</div>
					</div>
					<div class="qa_group">
						<div class="question">
							<span class="toggle_icon">+</span>
							Some terms of service and legal stuff ?
						</div>
						<div class="answer">
							Sure we have, here are some terms of service, a privacy policy and a refund policy. But the most important is that you can contact us at any time.
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	include_once('common/footer.php'); 
?>

</div>


<script>
	$("#header li[data-link='pricing']").addClass('active');


	const wrapperTop = ($('#pricing_header').innerHeight() + 80);
	$('#wrapper').css('top', wrapperTop + 'px');
	

	const planHeaderTop = $('#detailHeaderPosition').offset().top;
	const planHeaderHeight = $('.detail_header').innerHeight();
	const listsPosition = $('#listsPosition').offset().top;

	$(window).scroll(() => {
		const scrollDistance = $(window).scrollTop();	
		if (scrollDistance >= wrapperTop) {
			$('#pricing_header').css('opacity', '0');
		} else {
			$('#pricing_header').css('opacity', '1');
		}

		if ((scrollDistance + 80) >= planHeaderTop && (scrollDistance + 184 + Number(planHeaderHeight)) <= listsPosition) {
			$('.detail_header').css({
				'position': 'fixed',
				'top' : '80px'
			});
		} else {
			$('.detail_header').css({
				'position': 'relative',
				'top' : '0px'
			});
		}
	});


	$('button.choose_plan_btn').click( function() {
		window.location.href = $(this).data('href');
	});


	$('.question').click(function() {
		if ($(this).attr('class').indexOf('active') > 1) {
			$(this).removeClass('active');
			$(this).siblings('.answer').slideToggle(300);
		} else {
			$(this).addClass('active');
			$(this).siblings('.answer').slideToggle(300);
		}
	});
</script>
</body>
</html>