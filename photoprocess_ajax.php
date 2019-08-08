<?
$watermark_text = 'MatrimonialPHPScript.co.cc';
if($_GET['image']){
    $image = $_GET['image'];
 
    if($_GET['type']=="jpg"){
        header("Content-type: image/jpeg");
    }elseif($_GET['type']=="gif"){
        header("Content-type: image/gif");
    }elseif($_GET['type']=="png"){
        header("Content-type: image/png");
    }else{
        if(substr($image, -3)=="jpg" || substr($image, -3)=="JPG"){
           header("Content-type: image/jpeg");
  } elseif(substr($image, -3)=="gif" || substr($image, -3)=="GIF"){header("Content-type: image/gif");}
        elseif(substr($image, -3)=="png" || substr($image, -3)=="PNG"){header("Content-type: image/png");}
    }
 
    if(substr($image, -3)=="jpg" || substr($image, -3)=="JPG"){$im = imagecreatefromjpeg($image);}
    elseif(substr($image, -3)=="gif" || substr($image, -3)=="GIF"){$im = imagecreatefromgif($image);}
    elseif(substr($image, -3)=="png" || substr($image, -3)=="PNG"){$im = imagecreatefrompng($image);}
 
    if($_GET['percent']){
        $x = round((imagesx($im)*$_GET['percent'])/100);
        $y = round((imagesy($im)*$_GET['percent'])/100);
        $yyy=0;
        $xxx=0;
        $imw = imagecreatetruecolor($x,$y);
    }elseif($_GET['w'] and $_GET['h']){
        $x = $_GET['w'];
        $y = $_GET['h'];
        $yyy=0;
        $xxx=0;
        $imw = imagecreatetruecolor($x,$y);
    }elseif($_GET['maxim_size']){
        if(imagesy($im)>=$_GET['maxim_size'] || imagesx($im)>=$_GET['maxim_size']){
            if(imagesy($im)>=imagesx($im)){
                $y = $_GET['maxim_size'];
                $x = ($y*imagesx($im))/imagesy($im);
            }else{
                $x = $_GET['maxim_size'];
                $y = ($x*imagesy($im))/imagesx($im);
            }
        }else{
            $x = imagesx($im);
            $y = imagesy($im);
        }
        $yyy=0;
        $xxx=0;
        $imw = imagecreatetruecolor($x,$y);
    }elseif($_GET['square']){
        if(imagesy($im)>=$_GET['square'] || imagesx($im)>=$_GET['square']){
            if(imagesy($im)>=imagesx($im)){
                $x = $_GET['square'];
                $y = ($x*imagesy($im))/imagesx($im);
                $yyy=-($y-$x)/2;
                $xxx=0;
            }else{
                $y = $_GET['square'];
                $x = ($y*imagesx($im))/imagesy($im);
                $xxx=-($x-$y)/2;
                $yyy=0;
            }
        }else{
            $x = imagesx($im);
            $y = imagesy($im);
            $yyy=0;
            $xxx=0;
        }
        $imw = imagecreatetruecolor($_GET['square'],$_GET['square']);
    }else{
        $x = imagesx($im);
        $y = imagesy($im);
        $yyy=0;
        $xxx=0;
        $imw = imagecreatetruecolor($x,$y);
    }
 
    imagecopyresampled($imw, $im, $xxx,$yyy,0,0,$x,$y,imagesx($im), imagesy($im));
 
    if($_GET['watermark_text']){
        if($_GET['watermark_color']){$watermark_color=$_GET['watermark_color'];
        }else{
            $watermark_color="000000";
        }
        $red=hexdec(substr($watermark_color,0,2));
        $green=hexdec(substr($watermark_color,2,2));
        $blue=hexdec(substr($watermark_color,4,2));
 
        $text_col = imagecolorallocate($imw, $red,$green,$blue);
        $font = "georgia.ttf"; //this font(georgia.ttf) heave to be in the same directory as this script
        $font_size = 9;
        $angle = -90;
        $box = imagettfbbox($font_size, $angle, $font, $_GET['watermark_text']);
        $x = 5;
        $y = 5;
        imagettftext($imw, $font_size, $angle, $x, $y, $text_col, $font, $_GET['watermark_text']);
 
    }
 
    if($_GET['type']=="jpg"){imagejpeg($imw);}
    elseif($_GET['type']=="gif"){imagegif($imw);}
    elseif($_GET['type']=="png"){imagepng($imw);}
    else{
        if(substr($image, -3)=="jpg" || substr($image, -3)=="JPG"){imagejpeg($imw);}
        elseif(substr($image, -3)=="gif" || substr($image, -3)=="GIF"){imagegif($imw);}
        elseif(substr($image, -3)=="png" || substr($image, -3)=="PNG"){imagepng($imw);}
    }
 
    imagedestroy($imw);
}
?>