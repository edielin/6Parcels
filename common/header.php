<header id="header">
	<div class="container">
		<a href="." class="pull-left">
			<img id="header_logo" src="<?= $config['cdn_loc'] ?>images/6parcelsLogo.png?v=<?= $config['version'] ?>" alt="6Parcels">
		</a>
		<div class="pull-right nav_links hidden-sm hidden-xs">
			<ul class="nav_ul text-uppercase">
				<li data-link="feature"><a href="feature" class="page_link">FEATURES</a></li>
				<li data-link="pricing"><a href="pricing" class="page_link">PRICING</a></li>
				<li data-link="about"><a href="about" class="page_link">ABOUT</a></li>
				<li><a href="https://app.6parcels.com/app/system#/couriers/login" rel="nofollow" class="nav_signIn_btn">SIGN IN</a></li>
				<li><a href="https://app.6parcels.com/app/system#/courier/register" rel="nofollow" class="nav_signOut_btn">SIGN UP</a></li>
			</ul>
		</div>
		<div class="pull-right hambur_nav_link visible-sm visible-xs">
			<input type="checkbox" id="hambuger_checkbox">
			<label for="hambuger_checkbox" class="text-center">
				<i class="fa fa-bars" aria-hidden="true"></i>
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</label>
			<ul class="text-uppercase text-right" id="hambuger_ul">
				<li data-link="feature"><a href="feature" class="page_link">FEATURES</a></li>
				<li data-link="pricing"><a href="pricing" class="page_link">PRICING</a></li>
				<li data-link="about"><a href="about" class="page_link">ABOUT</a></li>
				<li class="text-right"><a href="https://app.6parcels.com/app/system#/couriers/login" rel="nofollow" class="signIn_btn">SIGN IN</a></li>
				<li class="text-right"><a href="https://app.6parcels.com/app/system#/courier/register" rel="nofollow" class="signOut_btn">SIGN UP</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</header>