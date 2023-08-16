<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function check(Request $req)
    {
        $title=$req['username'];
        $id=2;
        $user=Customer::where('username','=',$title)->where('password',md5($req->password)) -> first();
        if(!$user)return redirect('/login');
        else{
           
            $req->session()->put('username',$user->username);
            $req->session()->put('customer_id',$user->customer_id);
           
        }
       
       
    //     echo $title;
    //     $customer=Customer::find($title);
    //   if(!is_null($customer))
    //   {
    //     return redirect('/');
        
    //   }
      return redirect('/');
    }
}
