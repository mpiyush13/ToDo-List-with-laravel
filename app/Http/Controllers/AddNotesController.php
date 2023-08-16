<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class AddNotesController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->session()->has('username'))
        {
              
  
              return redirect('/login');
          }
          
        $url=url('/addNotes');
        $edit=false;
        $title="ADD NOTES HERE";
        $data=compact('url','title','edit');
       return view('addNotes')->with($data);
    }
    public function store(Request $req)
    {
        // echo "This is controler";
        // die;
        
        $note=new Note;
        $note->title=$req['title'];
        $note->desc=$req['desc'];
       
        //console.log("this is customer_id value",session()->get('customer_id'));
         $note->user_id=$req->session()->get('customer_id'); 
        //$note->user_id=1; 

        $note->save();
        return redirect('/');
    }
    public function edit($note_id)
    {
        $customer=Note::find($note_id);
        if(is_null($customer))
        {
            return redirect()->back();
        }
        else{

            $edit=true;
            $url=url('/update').'/'.$note_id;
            $title="Upadte Notes";
            $data=compact('url','title','customer','edit');
            return view('addNotes')->with($data);
        }
       
        
    }
    public function delete($note_id)
    {
      $customer=Note::find($note_id);
      if(!is_null($customer))
      {
        
        $customer->delete();
      }
      return redirect()->back();
        
    }
    public function update($note_id,Request $req)
    {
      $note=Note::find($note_id);
      if(!is_null($note))
      {
        
        $note->title=$req['title'];
        $note->desc=$req['desc'];
        $note->save();
        return redirect('/');
      }
      return redirect()->back();
        
    }
}
