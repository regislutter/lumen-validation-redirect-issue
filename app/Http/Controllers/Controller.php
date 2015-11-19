<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function showHome(){
        return view('home');
    }

    public function sendContactForm(Request $request){
        // Automatic validation return
//        $this->validate($request, [
//            'name' => 'required|max:255',
//            'email' => 'required|email'
//        ]);

        // Manual validation return
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // If validation ok
        return 'ok';
    }
}
