<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contact;

class ContactController extends Controller
{
   public function send()
    {
   
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
return redirect('/contactus');
        }
   
}