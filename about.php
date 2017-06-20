<?php
    include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feature | 6Parcels - Courier 3.1</title>
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