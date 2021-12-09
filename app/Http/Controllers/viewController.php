<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    function showETS() {
        return view('ETS');
    }
    function showtugasPHP() {
        return view('tugasPHP');
    }
    function showfungsiPHP() {
        return view('fungsiPHP');
    }
    function showpraktikum3() {
        return view('masker/index');
    }
}
