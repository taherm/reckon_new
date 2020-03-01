<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contact;

class ContactController extends Controller
{
   public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|min:10|max:30',
            'phone' => 'required|min:8|max:8',
            'message' => ['required', 'min:10', 'max:100', 'not_regex:/((?:https?\:\/\/|www\.)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)/i'],
            

        ]);
   
        $data = [
            'email'=>request('email'),
            'name' => request('name'),
            'phone' => request('phone'),
            'message' => request('message')]; 
//dd($data['name']);

try {
    \Mail::to('mukadam.taher@gmail.com')->send(new contact($data));   

} catch(\Exception $e) {
    dd($e->getMessage());
}
session()->flash('message', "Thank You! We'll get in touch with you soon!");
return redirect('/contactus');
        }
   
}
