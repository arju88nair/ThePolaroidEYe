<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;

class image extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = "image";


    public static function index($input)
    {

        $allowed = array('png', 'jpg', 'gif', 'zip');
        if (isset($_FILES['upl']) && $_FILES['upl']['error'] == 0) {

            $extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);


            if (!in_array(strtolower($extension), $allowed)) {
                echo '{"status":"error"}';
                exit;
            }

            if (move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/' . $_FILES['upl']['name'])) {
                $model = new self();
                $url=$_FILES['upl']['name'];
                $hue = self::Hue($url);
                $model->hue = round($hue);
                $model->url =url('/'). '/uploads/' . $url;
                $model->IPaddress = $_SERVER['REMOTE_ADDR'];
                $issaved = $model->save();
                if ($issaved) {
                    echo '{"status":"success"}';
                    exit;
                }

                echo '{"status":"error"}';
                exit;
            }
        }

        echo '{"status":"error"}';
        exit;

    }

    private static function Hue($url)
    {

        // Here,the calculation of RGB values to find the hue of the uploaded image is carried out
        if( substr($url,-3) === "png"){
            $im = imagecreatefrompng('uploads/' . $url);

        }
        else{
            $im = imagecreatefromjpeg('uploads/' . $url);

        }

        $x = imagesx($im);// The height of the image
        $y = imagesy($im);// The width of the image
        $tmp_img = ImageCreateTrueColor(1, 1);
        ImageCopyResampled($tmp_img, $im, 0, 0, 0, 0, 1, 1, $x, $y); //  Instead of going through all the pixels for the RGB values,It is shrinked to 1px
        $rgb = ImageColorAt($tmp_img, 0, 0);
        $r = ($rgb >> 16) & 0xFF;//(argb >> 16) & 0xff right shifts the value of $r 16 bits, and then performs a bitwise AND operation to capture only 8 bits. This is essentially getting the byte from bits 16-23
        $g = ($rgb >> 8) & 0xFF;// Since RGB will be integer int the format #RRGGBB
        $b = $rgb & 0xFF;


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

        return $computedH;
    }

//    private static function Hue($r, $g, $b)
//    {
////
////        $R = ($r / 255);
////        $G = ($g / 255);
////        $B = ($b / 255);
////
////        // Calculate a few basic values, the maximum value of R,G,B, the
////        //   minimum value, and the difference of the two (chroma).
////        $maxRGB = max($R, $G, $B);
////        $minRGB = min($R, $G, $B);
////        $chroma = $maxRGB - $minRGB;
////
////        // Calculate Hue component
////        // Hue is calculated on the "chromacity plane", which is represented
////        //   as a 2D hexagon, divided into six 60-degree sectors. We calculate
////        //   the bisecting angle as a value 0 <= x < 6, that represents which
////        //   portion of which sector the line falls on.
////        if ($R == $minRGB)
////            $h = 3 - (($G - $B) / $chroma);
////        elseif ($B == $minRGB)
////            $h = 1 - (($R - $G) / $chroma);
////        else // $G == $minRGB
////            $h = 5 - (($B - $R) / $chroma);
////
////        // After we have the sector position, we multiply it by the size of
////        //   each sector's arc (60 degrees) to obtain the angle in degrees.
////        $computedH = 60 * $h;
////
////        return $computedH;
//
//
//    }


    public static function db($input)
    {

        $offset= $input['spread'];
        $hue=$input['hue'];
        $max=(int)$hue+(int)$offset;
        $min=(int)$hue-(int)$offset;
        $collections= self::whereBetween('hue', [$min, $max])->get();
        if(count($collections) >0 )
        {
            return $collections;
        }
        else{
            return array('status'=>"error");
        }
//        $model = new self();
//        return $model->all();
//        $model->name = "ih";
//        $model->save();
    }



    public static function test(){
        return count(self::all());
    }
}