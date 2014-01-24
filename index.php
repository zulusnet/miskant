<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pl, ru, en, de">
<!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

<title>DORAN - Miskant olbrzymi, uprawa i sadzonki. Rośliny
	alternatywne. Miscanthus giganteus</title>
<meta
	content="Miskant olbrzymi, sadzonki. Rośliny alternatywne, Miscanthus giganteus. Uprawa Miskanta, Miscanthusa. Biomasa. Trawy Energetyczne."
	name="description" lang="pl">
<meta
	content="Miscanthus Giganteus is currently one of the most promising plants which yield can be entirely spent for energy purposes. DORAN's website, the company which apart from technological advising also runs Miscanthus' planter business."
	name="description" lang="en">
<meta
	content="Гигантские мискантус настоящее время является одним из самых перспективных растений, которые могут дать совершенно выделено в энергетических целях. Главная Компания Доран, кто за технологические консультации также активно plantatorską мискантус."
	name="description" lang="ru">
<meta name="author" content="Michal Rogulski">
<meta name="keywords"
	content="miskant, miskant olbrzymi, miskant olbrzymi sadzonki, miskantus, miscanthus giganteus, sadzonki, biomasa, sadzonki miskanta, miskant sadzonki, uprawa miskanta, uprawa miscanthusa, OZE, rośliny alternatywne, trawy energetyczne">
<meta name="robots" content="index, follow">
<meta http-equiv="content-language" content="pl, ru, en, de">
<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport"
	content="width=device-width,initial-scale=1, user-scalable=no">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->


<!-- If you work on localhost (xampp server), set the $root_dir to "/miskant" if not set $root_dir to "" ->
<?php 
$root_dir="";
?>
<!-- CSS: implied media=all -->
<!-- CSS concatenated and minified via ant build script-->
<link rel="stylesheet" href="<?php echo "$root_dir" ?>/css/slideshow.css">
<link rel="stylesheet" href="<?php echo "$root_dir" ?>/css/style.css">
<link rel="stylesheet" href="<?php echo "$root_dir" ?>/css/main.css">
<link rel="stylesheet" href="<?php echo "$root_dir" ?>/css/gallery.css">
<link rel="stylesheet" href="<?php echo "$root_dir" ?>/css/jquery.lightbox-0.5.css">
<link rel="stylesheet" href="<?php echo "$root_dir" ?>/css/googleMaps.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans'
	rel='stylesheet' type='text/css'>
<!-- end CSS-->

<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
<?php
$zainstalowane = array(
                'pl' => 'polski',
                'en' => 'angielski',
                'ru' => 'rosyjski',
				'de' => 'niemiecki'
				);

				if(isset($_GET['lang']))
				{
					$lang = $_GET['lang'];
				}

				if(!isset($lang))
				{

					$jezyki = explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
					$jezyki = explode(',', $jezyki[0]);

					$lang = null;

					foreach($jezyki as $jezyk)
					{
						if(isset($zainstalowane[$jezyk]))
						{
							$lang = $jezyk;
							break;
						}
					}

					if(is_null($lang))
					{
						$lang = 'pl';
					}

				}

				?>
<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>

<script type="text/javascript"
	src="http://maps.googleapis.com/maps/api/js?sensor=false">
</script>
<?php
if(isset($_GET['page']) && ($_GET['page'] == 'gallery'))
	echo "<script type=\"text/javascript\" src=\"$root_dir/js/mylibs/gallery.map.js\"></script>";
elseif(isset($_GET['page']) && ($_GET['page'] == 'contact'))
echo "<script type=\"text/javascript\" src=\"$root_dir/js/mylibs/contact.map.js\"></script>";
?>


</head>

<body
<?php
if(isset($_GET['page']) && ($_GET['page'] == 'gallery')) echo " onload=\"galleryInit('$lang')\"";
elseif(isset($_GET['page']) && ($_GET['page'] == 'contact')) echo " onload=\"contactInit('$lang')\"";?>>

	<?php
	if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'main';
}
?>
	<div id="container">
		<header>
			<div id="header">
				<?php
				if($lang == 'pl')	include "pages/pl/header.php";
				elseif($lang == 'en') include "pages/en/header.php";
				elseif($lang == 'de') include "pages/de/header.php";
				elseif($lang == 'ru') include "pages/ru/header.php";
				?>
			</div>
			<!-- //#header -->
		</header>

		<div id="content">
			<?php
			echo '<input id="page-info" type="hidden" value="'.$page.'"/>';
			?>

			<?php
			if((!isset($_GET['page'])) || ($_GET['page'] == 'main' ))
			{
				if($lang == 'pl')	include "pages/pl/main.php";
				elseif($lang == 'en') include "pages/en/main.php";
				elseif($lang == 'de') include "pages/de/main.php";
				elseif($lang == 'ru') include "pages/ru/main.php";
			}
			elseif($_GET['page'] == 'aboutUs')
			{
				if($lang == 'pl')	include "pages/pl/aboutUs.php";
				elseif($lang == 'en') include "pages/en/aboutUs.php";
				elseif($lang == 'de') include "pages/de/aboutUs.php";
				elseif($lang == 'ru') include "pages/ru/aboutUs.php";
			}
			elseif($_GET['page'] == 'miskant')
			{
				if($lang == 'pl')	include "pages/pl/miskant.php";
				elseif($lang == 'en') include "pages/en/miskant.php";
				elseif($lang == 'de') include "pages/de/miskant.php";
				elseif($lang == 'ru') include "pages/ru/miskant.php";
			}
			elseif($_GET['page'] == 'climate')
			{
				if($lang == 'pl')	include "pages/pl/climate.php";
				elseif($lang == 'en') include "pages/en/climate.php";
				elseif($lang == 'de') include "pages/de/climate.php";
				elseif($lang == 'ru') include "pages/ru/climate.php";
			}
			elseif($_GET['page'] == 'cultivation')
			{
				if($lang == 'pl')	include "pages/pl/cultivation.php";
				elseif($lang == 'en') include "pages/en/cultivation.php";
				elseif($lang == 'de') include "pages/de/cultivation.php";
				elseif($lang == 'ru') include "pages/ru/cultivation.php";
			}
			elseif($_GET['page'] == 'destiny')
			{
				if($lang == 'pl')	include "pages/pl/destiny.php";
				elseif($lang == 'en') include "pages/en/destiny.php";
				elseif($lang == 'de') include "pages/de/destiny.php";
				elseif($lang == 'ru') include "pages/ru/destiny.php";
			}
			elseif($_GET['page'] == 'projects')
			{
				if($lang == 'pl')	include "pages/pl/projects.php";
				elseif($lang == 'en') include "pages/en/projects.php";
				elseif($lang == 'de') include "pages/de/projects.php";
				elseif($lang == 'ru') include "pages/ru/projects.php";
			}
			elseif($_GET['page'] == 'offer')
			{
				if($lang == 'pl')	include "pages/pl/offer.php";
				elseif($lang == 'en') include "pages/en/offer.php";
				elseif($lang == 'de') include "pages/de/offer.php";
				elseif($lang == 'ru') include "pages/ru/offer.php";
			}
			elseif($_GET['page'] == 'gallery')
			{
				if($lang == 'pl')	include "pages/pl/gallery.php";
				elseif($lang == 'en') include "pages/en/gallery.php";
				elseif($lang == 'de') include "pages/de/gallery.php";
				elseif($lang == 'ru') include "pages/ru/gallery.php";
			}
			elseif($_GET['page'] == 'contact')
			{
				if($lang == 'pl')	include "pages/pl/contact.php";
				elseif($lang == 'en') include "pages/en/contact.php";
				elseif($lang == 'de') include "pages/de/contact.php";
				elseif($lang == 'ru') include "pages/ru/contact.php";
			}
			elseif($_GET['page'] == 'cookies-policy'){
				if($lang == 'pl')	include "pages/pl/cookies-policy.php";
				elseif($lang == 'en') include "pages/pl/cookies-policy.php";
				elseif($lang == 'de') include "pages/pl/cookies-policy.php";
				elseif($lang == 'ru') include "pages/pl/cookies-policy.php";
			}
			else{
			if($lang == 'pl')	include "pages/pl/404.php";
			elseif($lang == 'en') include "pages/en/404.php";
			elseif($lang == 'de') include "pages/de/404.php";
			elseif($lang == 'ru') include "pages/ru/404.php";
		}
		
		?>
		</div>
		<!-- //#content -->
		<footer>
			<div id="footer">
				<?php
				if($lang == 'pl')	include "pages/pl/footer.php";
				elseif($lang == 'en') include "pages/en/footer.php";
				elseif($lang == 'de') include "pages/de/footer.php";
				elseif($lang == 'ru') include "pages/ru/footer.php";
				?>

			</div>
			<!-- //#footer -->

		</footer>
	</div>
	<!--! end of #container -->


	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
		window.jQuery
				|| document
						.write('<script src="<?php echo $root_dir?>/js/libs/jquery-1.6.2.min.js"><\/script>');
	</script>


	<!-- scripts concatenated and minified via ant build script <script defer src="js/script.js"></script> -->

	<script defer src="<?php echo $root_dir?>/js/plugins.js"></script>

	<!-- end scripts-->

	<!--  jQuery scripts -->
	<script type="text/javascript" src="<?php echo $root_dir?>/js/libs/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $root_dir?>/js/libs/jquery.lightbox-0.5.js"></script>

	<!--  Other user scripts -->
	<script type="text/javascript" src="<?php echo $root_dir?>/js/mylibs/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo $root_dir?>/js/script.js"></script>
	<?php
	if($lang == 'pl'){
		echo "<script type=\"text/javascript\"
		src=\"$root_dir/js/mylibs/localization/messages_pl.js\"></script>";
	}
	elseif($lang == 'en'){
		echo "<script type=\"text/javascript\"
		src=\"$root_dir/js/mylibs/localization/messages_en.js\"></script>";
	}
	elseif($lang == 'de'){
		echo "<script type=\"text/javascript\"
		src=\"$root_dir/js/mylibs/localization/messages_de.js\"></script>";
	}
	elseif($lang == 'ru'){
		echo "<script type=\"text/javascript\"
		src=\"$root_dir/js/mylibs/localization/messages_ru.js\"></script>";
	}
	?>

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<script>
		window._gaq = [ [ '_setAccount', 'UA-1880088-2' ], [ '_trackPageview' ],
				[ '_trackPageLoadTime' ] ];
		Modernizr.load({
			load : ('https:' == location.protocol ? '//ssl' : '//www')
					+ '.google-analytics.com/ga.js'
		});
	</script>

	<!-- Ativando o jQuery lightBox plugin -->
	<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
        $('#small-gallery a').lightBox();
    });
    
    jQuery(document).ready(function(){
        jQuery("#quotation").validate();
        var page = $('#page-info').val();
        $('#main-nav li[rel="' + page + '"] > a').addClass('active');
        $('#main-nav li[rel="' + page + '"]').parent().prev('a').addClass('active');
        $('#footer-nav li[rel="' + page + '"] > a').addClass('active');
    });
    </script>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
