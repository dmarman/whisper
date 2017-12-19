<?php 
$bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>

		<style>	
			body {
				background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/whisper/wp-content/themes/whisper/img/<?php echo  $selectedBg;?>) no-repeat center center fixed;
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
		</header>