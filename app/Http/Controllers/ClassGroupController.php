<?php

namespace App\Http\Controllers;

use App\Models\ClassGroup;
use Illuminate\Http\Request;

class ClassGroupController extends Controller
{
    //

    public function index(){
        $classes = ClassGroup::all();
        return view('classgroup.index',compact('classes'));
    }
}
