<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="."><img src="<?= $config['cdn_loc'] ?>images/6parcelsLogo.png?v=<? $config['version'] ?>" alt="6Parcels" id="footer_logo"></a>
				<p class="txt">
					We believes that the logistics industry lacks of efficiency and transparency. The real workers are not getting what they deserved. 6Parcels is going to level the game and bring change to this industry.
				</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<p class="footer_title">Quick Links</p>
				<div class="row">
					<div class="col-xs-6">
						<div class="link_block"><a href=".">HOME</a></div>
						<div class="link_block"><a href="pricing">PRICING</a></div>
						<div class="link_block"><a href="feature">FEATURE</a></div>
					</div>
					<div class="col-xs-6">
						<div class="link_block"><a href="privacy">PRIVACY NOTIC</a></div>
						<div class="link_block"><a href="terms">LEGAL TERMS</a></div>
						<div class="link_block"><a href="https://www.6connect.biz/" target="_blink"><img src="<?= $config['cdn_loc'] ?>images/6connectLogo.svg?v=<? $config['version'] ?>" alt="6Connect" class="link_6connect"></a></div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div itemscope itemtype="http://schema.org/LocalBusiness">
					<p style="display: none">
						<span itemprop="name">6Parcels</span>
						<span itemprop="priceRange">$$$</span>
						<span itemprop="image"><?= $config['cdn_loc'] ?>images/6parcelsLogo.png?v=<? $config['version'] ?></span>
					</p>
					<p class="footer_title">Contact US</p>
					<p class="contact_info">
						<i class="fa fa-phone" aria-hidden="true"></i><a href="tel:6563975817" itemprop="telephone">+65-6397-5817</a> ; <a href="tel:6563975818" itemprop="telephone">+65-6397-5818</a>
					</p>
					<p class="contact_info">
						<i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:enquiry@6connect.biz" itemprop="email">enquiry@6connect.biz</a>
					</p>
					<address class="contact_info" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<i class="fa fa-map-marker" aria-hidden="true"></i><span itemprop="streetAddress">ARK @ Gambas, 7 Gambas Crescent #05-24</span><span itemprop="addressLocality">Singapore</span><span itemprop="postalCode">757087</span>
					</address>
				</div>
			</div>
		</div>
		<p class="copy_right">© 2017 6Connect Pte. Ltd. All Rights Reserved.</p>
	</div>
</footer>

<div id="goToTop">
	<i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
</div>

<script>
	const gotopBtn = $('#goToTop');
	
	$(window).scroll(() => {
		const offset_height = 400;
		const distance = $(window).scrollTop();
		if (distance >= offset_height) {
			gotopBtn.addClass('in');
		} else {
			gotopBtn.removeClass('in');
		}
	});

	gotopBtn.on('click', (event) => {
		event.preventDefault();
		$('body, html').animate({
			scrollTop: 0,
		}, 700);
	});
</script>