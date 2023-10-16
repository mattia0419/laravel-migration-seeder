<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;
class PageController extends Controller
{
  public function index()
  {
    $title = "Homepage";
    $trains = Train::where('data', '=', '2023-10-16')->get();
    return view('home', compact('title','trains'));
  }
}