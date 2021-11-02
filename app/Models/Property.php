<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

class Property
{
    public static function getProperty($prop){
        return self::${$prop};
    }

    public static $material = array(
        ['id'=>1, 'name'=>'Gold'],
        ['id'=>2, 'name'=>'Silver'],
        ['id'=>3, 'name'=>'Platina'],
    );

    public static $others = array(
        ['id'=>1, 'name'=>'Other1'],
        ['id'=>2, 'name'=>'Other2'],
        ['id'=>3, 'name'=>'Other3'],
    );


    public static $functions = array(
        ['id'=>1, 'name'=>'Func1'],
        ['id'=>2, 'name'=>'Func2'],
        ['id'=>3, 'name'=>'Func3'],
    );

    public static $condition = array(
        ['id'=>1, 'name'=>'Good'],
        ['id'=>2, 'name'=>'Bad'],
    );

    public static $brand = array(
        ['id'=>1, 'name'=>'Rolex'],
        ['id'=>2, 'name'=>'Cartier'],
    );

    public static $clasp = array(
        ['id'=>1, 'name'=>'Buckle'],
        ['id'=>2, 'name'=>'Double-fold clasp'],
        ['id'=>3, 'name'=>'Fold clasp'],
        ['id'=>4, 'name'=>'Fold clasp, hidden'],
        ['id'=>5, 'name'=>'Jewelry clasp'],
    );

    public static $deliveryset = array(
        ['id'=>1, 'name'=>'Watch'],
        ['id'=>2, 'name'=>'With Box'],
        ['id'=>3, 'name'=>'With Papers'],
        ['id'=>4, 'name'=>'With box and papers'],
    );

    public static $deliverytime = array(
        ['id'=>1, 'name'=>'Available now'],
        ['id'=>2, 'name'=>'Ready to ship in 3-5 days'],
        ['id'=>3, 'name'=>'Ready to ship in 6-10 days'],
        ['id'=>4, 'name'=>'On Request'],
    );

    public static $gender = array(
        ['id'=>1, 'name'=>'Women\'s watch'],
        ['id'=>2, 'name'=>'Men\'s watch/Unisex'],
    );

    public static $glass = array(
        ['id'=>1, 'name'=>'Glass'],
        ['id'=>2, 'name'=>'Plastic'],
        ['id'=>3, 'name'=>'Mineral glass'],
        ['id'=>4, 'name'=>'Plexi glass'],
        ['id'=>5, 'name'=>'Sapphire glass'],
    );

    public static $numbersface = array(
        ['id'=>1, 'name'=>'Arabic numerals'],
        ['id'=>2, 'name'=>'No numerals'],
        ['id'=>3, 'name'=>'Roman numerals'],
    );

    public static $state = array(
        ['id'=>0, 'name'=>'Черновик'],
        ['id'=>1, 'name'=>'Published'],
        ['id'=>2, 'name'=>'Not Published'],
    );

    public static $color = array(
        ['id'=>1, 'name'=>'Beige'],
        ['id'=>2, 'name'=>'Black'],
        ['id'=>3, 'name'=>'Blue'],
        ['id'=>4, 'name'=>'Bordeaux'],
    );

    public static $type = array(
        ['id'=>1, 'name'=>'Automatic'],
        ['id'=>2, 'name'=>'Manual winding'],
        ['id'=>3, 'name'=>'Quartz'],
    );

    public static $waterresistant = array(
        ['id'=>1, 'name'=>'1 ATM'],
        ['id'=>2, 'name'=>'2 ATM'],
    );

}


