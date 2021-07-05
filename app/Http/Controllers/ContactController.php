<?php

namespace App\Http\Controllers;

use App\Exceptions\ContactNotFoundException;
use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Contact';
        $contacts = Contact::orderBy('id', 'DESC')->get();
        return Inertia::render('users/Index', [
            'title' => $title,
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('users/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $data = $request->all();

        Contact::create($data);

        return redirect()->route('contact.index')->with('message', 'Contact Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            if(!$contact) {
                throw new ContactNotFoundException('Contact Not Found!');
            }
        } catch (\Throwable $th) {
            return view('errors.contactnotfound');
        }
        

        return Inertia::render('users/Edit', [
            'contact' => $contact
        ]);
    }

    public function update(ContactRequest $request, $id)
    {
        $data = $request->all();
        $contact = Contact::findOrFail($id);
        $contact->update($data);

        return redirect()->route('contact.index')->with('message', 'Contact updated');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        
        $contact->delete();

        return redirect()->route('contact.index')->with('message', 'Contact deleted');
    }
}
