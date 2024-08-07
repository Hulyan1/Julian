<?php

namespace App\Controllers;

class Shop extends BaseController
{

    public function cart(){
        return view('cart');
    }

    public function buynow() {
        return view('buynow');
    }

}