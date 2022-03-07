<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        return 'OK!';
}
}
