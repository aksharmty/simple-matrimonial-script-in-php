<?php 
// this script creates a watermarked image from an image file - can be a .jpg .gif or .png file 
// where watermark.gif is a mostly transparent gif image with the watermark - goes in the same directory as this script 
// where this script is named watermark.php 
// call this script with an image tag 
// <img src="watermark.php?path=imagepath"> where path is a relative path such as subdirectory/image.jpg 
$imagesource =  $_GET['path']; 
$filetype = substr($imagesource,strlen($imagesource)-4,4); 
$filetype = strtolower($filetype); 
if($filetype == ".gif")  $image = @imagecreatefromgif($imagesource);  
if($filetype == ".jpg")  $image = @imagecreatefromjpeg($imagesource);  
if($filetype == ".png")  $image = @imagecreatefrompng($imagesource);  
if (!$image) die(); 
$watermark = @imagecreatefromgif('watermark.gif'); 
$imagewidth = imagesx($image); 
$imageheight = imagesy($image);  
$watermarkwidth =  imagesx($watermark); 
$watermarkheight =  imagesy($watermark); 
$startwidth = (($imagewidth - $watermarkwidth)/2); 
$startheight = (($imageheight - $watermarkheight)/2); 
imagecopy($image, $watermark,  $startwidth, $startheight, 0, 0, $watermarkwidth, $watermarkheight); 
imagejpeg($image); 
imagedestroy($image); 
imagedestroy($watermark); 
?> 