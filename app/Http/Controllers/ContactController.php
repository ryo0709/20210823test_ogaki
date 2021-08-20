<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required'
        ]);
        $form = $request->all();
        contact::create($form);
        return view('thanks');
    }
}
