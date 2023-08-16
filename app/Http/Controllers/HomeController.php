<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Note;
class HomeController extends Controller
{
    public function index(Request $request)
    {

        if(!$request->session()->has('username'))
        {
            return redirect('/login');
        }
       // $notes=Note::where('user_id',session()->get('customer_id'));
        $notes = Note::where('user_id', session()->get('customer_id'))->get();
     // $notes=Note::all();
        $data=compact('notes');

        return view('index')->with($data);
    }
}
