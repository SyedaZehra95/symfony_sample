<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Gallery;

class GalleryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   $path='/Users/say_era/Downloads/zehra.jpeg';
        $data=file_get_contents($path);
        $type=pathinfo($path, PATHINFO_EXTENSION);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $gallery=new Gallery();
        $gallery->setCaseID('15');
        $gallery->setConfidence(0.0);
        $gallery->setEyeConfidence(0.0);
        $gallery->setImage($base64);
        $gallery->setGallery('VIP');
        $gallery->setName('Zehra from react');
        $gallery->setRejected(false);
        $gallery->setXLeft(111.010);
        $gallery->setYLeft(82.010);
        $gallery->setXRight(92.010);
        $gallery->setYRight(11.010);
        $gallery->setEyes(true);
        $gallery->setTransactionID('123453-vdfvd-234234');


        // $product = new Product();
         $manager->persist($gallery);

        $manager->flush();
    }
}
