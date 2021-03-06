<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function welcome()
  {
    return view('pages.welcome');
  }
  public function about()
  {
    $people = [
      'Joshua Kleveter',
      'Caleb Kleveter',
      'Aaron Harpt',
      'Luke Holloway',
      'Martyn Chamberlin',
      'Landon Springer',
      'Noah Botkin'
    ];

    return view('pages.about', compact('people'));
  }

  public function contact()
  {
    return view('pages.contact');
  }
}
