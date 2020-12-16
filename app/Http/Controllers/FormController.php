<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    //
    public function sendForm(Request $request) {
        $rules = [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:8'],
		];
		$customMessages = [];
        $this->validate($request, $rules, $customMessages);
        return redirect()->back()->with('status', 'Success');

        // return view('form');
    }
}
