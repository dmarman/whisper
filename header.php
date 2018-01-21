<?php 
$bg = array('1.jpeg', '2.jpeg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
        <link rel="icon" href="http://whispernotagency.com/wp-content/themes/whisper/favicon.png?v=3" />
		<?php wp_head(); ?>

		<style>	
			body {
				background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/wp-content/themes/whisper/img/<?php echo  $selectedBg;?>) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		</style>
	</head>
	
<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-header">
			<h1 class="title"><a href="<?php echo home_url(); ?>">Whis<br>per&nbsp;&nbsp;&nbsp;Not<br>Ag<br><span class="title-component">e&nbsp;&nbsp;&nbsp;&nbsp;ncy</span></a></h1>
            <div class="social">
                <p><a target="_blank" href="https://www.facebook.com/whispernotagency/">Facebook</a></p>
                <p><a target="_blank" href="https://www.instagram.com/whispernotagency/">Instagram</a></p>
                <p><a target="_blank" href="https://twitter.com/whispernot_?lang=ca">Twitter</a></p>
            </div>
		</header>