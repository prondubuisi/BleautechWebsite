<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Team;
use App\Blog;
class PagesController extends Controller
{
    
public function getHome(){ 
        $teams = Team::all();;
        $blogs = Blog::all();;

    	return view('index',compact('teams','blogs'));
}
    
public function message(Request $request)
    {
        $contact = new Contact;
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->route('index')->with('response','Thanks!. Your Message Have Been Recorded. We will get in touch.');
    }
    
    

    
}
