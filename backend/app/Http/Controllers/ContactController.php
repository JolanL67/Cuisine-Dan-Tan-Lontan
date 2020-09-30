<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact = Contact::all()[0];

        return view('contact.show', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $contact = Contact::all()[0];

        $phone = implode(explode(' ', $contact->phone));
        $contact->phone = $phone;

        return view('contact.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $contactModel = Contact::all()[0];

        $phone = $request->input('phone');
        $phone = wordwrap($phone, 2, ' ', 1);
        $contactModel->phone = $phone;

        $email = $request->input('mail');
        $contactModel->mail = $email;

        $facebookUrl = $request->input('facebook');
        $contactModel->facebook = $facebookUrl;

        $instagramUrl = $request->input('instagram');
        $contactModel->instagram = $instagramUrl;

        $contactModel->updated_at = new \DateTime();
        $contactModel->save();

        return redirect()->route('contact.show', [
            'contact' => $contact,
        ])->with('success', 'Le contact a bien été modifiée !');
    }
}
