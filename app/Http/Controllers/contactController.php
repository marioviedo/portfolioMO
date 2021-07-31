<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function sendMessage(StoreMessage $request){        
        $message = Message::create($request->all());
        $validate = "redirect";        
        return redirect()->route('contact.validate', $validate);
    }

    public function validateStore($validate){
        return view('contact', compact('validate'));
    }
}
