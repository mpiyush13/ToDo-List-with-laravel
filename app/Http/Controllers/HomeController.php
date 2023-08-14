<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Note;
class HomeController extends Controller
{
    public function index()
    {
      $notes=Note::all();
      $data=compact('notes');

        return view('index')->with($data);
    }
}
