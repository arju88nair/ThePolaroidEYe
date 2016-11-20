<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    //

    public static function index($input)
    {
        $allowed = array('png', 'jpg', 'gif','zip');
        if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

            $extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);


            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"error"}';
                exit;
            }

            if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
                echo '{"status":"success"}';
                exit;
            }
        }

        echo '{"status":"error"}';
        exit;
        $im = imagecreatefromjpeg("uploads/80439.jpg");
//        $rgb = imagecolorat($im, 10, 15);
//
//        $colors = imagecolorsforindex($im, $rgb);
//
//        var_dump($colors);
        $x = imagesx($im);
        $y = imagesy($im);
        $tmp_img = ImageCreateTrueColor(1, 1);
        ImageCopyResampled($tmp_img, $im, 0, 0, 0, 0, 1, 1, $x, $y); // or ImageCopyResized
        $rgb = ImageColorAt($tmp_img, 0, 0);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;

        return  self::Hue($r, $g, $b);
    }


    private static function Hue($r, $g, $b)
    {

        $R = ($r / 255);
        $G = ($g / 255);
        $B = ($b / 255);

        // Calculate a few basic values, the maximum value of R,G,B, the
        //   minimum value, and the difference of the two (chroma).
        $maxRGB = max($R, $G, $B);
        $minRGB = min($R, $G, $B);
        $chroma = $maxRGB - $minRGB;

        // Calculate Hue component
        // Hue is calculated on the "chromacity plane", which is represented
        //   as a 2D hexagon, divided into six 60-degree sectors. We calculate
        //   the bisecting angle as a value 0 <= x < 6, that represents which
        //   portion of which sector the line falls on.
        if ($R == $minRGB)
            $h = 3 - (($G - $B) / $chroma);
        elseif ($B == $minRGB)
            $h = 1 - (($R - $G) / $chroma);
        else // $G == $minRGB
            $h = 5 - (($B - $R) / $chroma);

        // After we have the sector position, we multiply it by the size of
        //   each sector's arc (60 degrees) to obtain the angle in degrees.
        $computedH = 60 * $h;

        return array($computedH);


    }

}