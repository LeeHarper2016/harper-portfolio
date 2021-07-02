<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ClientMessaged;
use App\Mail\OwnerMessaged;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /****************************************************************************************************
     * 
     * Function: ContactController.sendMail().
     * Purpose: Takes in user input, then sends the contact message to the owner. The client also recieves
     *          an email confirming that the message has been sent.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @param ContactRequest $request The validated information taken from the HTTP request.
     * @returns response A 200 status code for the message being successfully sent.
     * 
    ****************************************************************************************************/
    public function sendMail(ContactRequest $request) {

        Mail::to($request->email)
            ->send(new ClientMessaged($request));
        Mail::to(env('TO_EMAIL'))
            ->send(new OwnerMessaged($request));

        return back();
    }
}
