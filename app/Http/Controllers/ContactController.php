<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function index()
    {
        return view('contacts/contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'message' => 'required',

        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->date = now();
        $contact->save();
        return redirect('/contacts/contact')->with('status', 'Données enregistrées');
    }

    public function getContacts()
    {
        $contacts = \App\Models\Contact::all();
        return view('contacts/listContacts', array(
            'contacts' => $contacts
        ));
    }
}
