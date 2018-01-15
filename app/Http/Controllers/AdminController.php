<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodType;

class AdminController extends Controller
{
    function getListType(){
        $types = FoodType::all();
        return view('pages.list-type',compact('types'));
    }
}
