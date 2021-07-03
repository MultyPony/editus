<?php 

$src1 = new Imagick(__DIR__ . "/src1.jpg");
$src2 = new Imagick(__DIR__ . "/src2.jpg");

// $src1->setImageVirtualPixelMethod(Imagick::VIRTUALPIXELMETHOD_TRANSPARENT);
// $src1->setImageArtifact('compose:args', "1,0,-0.5,0.5");
// $src1->compositeImage($src2, Imagick::COMPOSITE_MATHEMATICS, 0, 0);
// $src1->writeImage(__DIR__ . "/output.jpg");

// $logo = new Imagick("img/logo.png");
    // $name  ="Jhon N. Doe";
    // $title ="Web Programmer";
    // $address= "abc road xyz";
    // $website = "www.acfh.com";
    // $phone = "0555555";
    // $email ="mizff@yahoo.com";

    // $image = new Imagick();
    // $draw = new ImagickDraw();
    // $pixel = new ImagickPixel( '#f5f5f5' );

    // $image->newImage(350, 170, $pixel);

    //$logo->newImage(100, 100,$logo);
    /* Black text */
    // $draw->setFillColor('#6b6a6a');

    /* Font properties */
    // $draw->setFont('./font/MyriadPro-Regular.otf');
    // $draw->setFontSize(10);

    // /* Create text */
    // $image->annotateImage($draw, 230, 150, 0, $email);
    // $image->annotateImage($draw, 102, 75, 0, $title);
    // $image->annotateImage($draw, 10, 150, 0, $address);
    // $image->annotateImage($draw, 230, 160, 0, $phone);


    /* Output the image */

    //for name 
    // $draw->setFillColor('#333333');
    // $draw->setFontSize( 30 );
    // $image->annotateImage($draw, 30, 60, 0, $name);

    // $draw->setGravity(Imagick::GRAVITY_CENTER);
    $image = new Imagick();
    $image->newImage(500, 500);
    $image->compositeImage($src1, Imagick::COMPOSITE_DEFAULT, 100, 100);
    $image->compositeImage($src2, Imagick::COMPOSITE_DEFAULT, 100, 100);
    // $image->resetIterator();
    $combined = $img->appendImages(true);
    // $combined->setResolution(72,72);
    $combined->setImageFormat("jpg");
    header("Content-Type: image/jpg");
    echo $combined;
    // }

?>

