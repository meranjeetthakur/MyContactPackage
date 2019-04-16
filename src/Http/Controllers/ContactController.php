<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ranjeet\MyContactPackage\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ranjeet\MyContactPackage\Models\Contact;
use Ranjeet\MyContactPackage\Mail\ContactMailable;
class ContactController extends Controller
{
    public function index()
    {
         return view('mycontactpackage::contact');
    }
    
    public function send(Request $request)
    {
//        Mail::to('meranjeetthakur@gmail.com')->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
    }
}