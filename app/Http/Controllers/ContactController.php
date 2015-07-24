<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    /**
     * Email the contact request
     *
     * @param ContactMeRequest $request
     * @return Redirect
     */
    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->subject('Blog Contact Form: '.$data['name'])
                ->to('mejri.jameleddine@gmail.com')
                ->replyTo($data['email']);
        });
        Mail::send('emails.reponse',['testVar'=>'Just a silly test'],
            function($message) use ($data){
            $message->to($data['email'])
            ->subject('Confirmation');
            });
        return back()
            ->withSuccess("Merci, Votre message à été bien enregistré, -----SM-DEVIS.");

    }
//
}
