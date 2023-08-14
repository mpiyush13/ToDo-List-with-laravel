<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class SignupController extends Controller
{
   public function index()
   {
     return view('signup');
   }

   public function store(Request $req)
   {
    
        
        $customer=new Customer;
        $customer->username=$req['username'];
        $customer->password=md5($req['password']);
        $customer->save();
        return redirect('/');

   }
}
