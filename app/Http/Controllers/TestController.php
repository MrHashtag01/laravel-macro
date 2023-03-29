<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $collection = collect([1, 2, 3, 4, 5]);
        $average = $collection->averageValue(); // returns 3

       // change 1
    }
}