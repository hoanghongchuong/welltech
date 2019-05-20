<?php

namespace App\Http\Controllers\Admin;
use App\CV;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CvController extends Controller
{
    public function index()
    {
    	$data = CV::orderBy('id','desc')->get();
    	return view('admin.cv.index', compact('data'));
    }
}
