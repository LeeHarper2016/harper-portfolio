<?php

namespace App\Http\Controllers;

use App\Mail\ClientMessaged;
use App\Mail\OwnerMessaged;
use Illuminate\Http\Request;
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
     * @param Request $request The entire HTTP request.
     * @returns response A 200 status code for the message being successfully sent.
     * 
    ****************************************************************************************************/
    public function sendMail(Request $request) {
        $data = $request->only('name', 'email', 'phone', 'body');

        Mail:to($request->email)
            ->from(env('FROM_EMAIL'))
            ->send(new ClientMessaged($data));
        Mail:to(env('TO_EMAIL'))
            ->from(env('FROM_EMAIL'))
            ->send(new OwnerMessaged($data));

        return response(200);
    }
}
