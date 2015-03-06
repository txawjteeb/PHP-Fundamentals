<?php

	$r=rand(0,255);
	$g=rand(0,255);
	$b=rand(0,255);


	$num = Rand (1,6);
	switch ($num) {
	case 1: $word = "Maybe";
		break;
	case 2: $word = "Fresno State";
		break;
	case 3: $word = "Elmo loves dorthy";
		break;
	case 4: $word = "Off to see the wizard";
		break;
	case 5: $word = "Breaking Bad";
		break;
	case 6: $word = "PHP can be annoying";
		break;}


	$my_img = imagecreate( 200, 80 );
	$background = imagecolorallocate( $my_img, $r, $g, $b );
	$text_colour = imagecolorallocate( $my_img, $b, $r, $g );
	$line_colour = imagecolorallocate( $my_img, $g, $b, $r );
	imagestring( $my_img, 4, 30, 25, $word, $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 165, 45, $line_colour );

	header( "Content-type: image/png" );
	imagepng( $my_img );
	imagecolordeallocate( $line_color );
	imagecolordeallocate( $text_color );
	imagecolordeallocate( $background );
	imagedestroy( $my_img );
?>