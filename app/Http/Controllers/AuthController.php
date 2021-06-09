<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*********************************************************************************************************************************************************************
     * 
     * Function Name: AuthController.logInUser(Request $request).
     * Purpose: Determines if the provided credentials are accurate, and if they are logs the user in. If not, return an error.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @param Request $request the entire http request.
     * 
     * ******************************************************************************************************************************************************************/
    public function logInUser(Request $request) {
        $credentials = $request->only('name', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return back();
        } else {
            return back()->withErrors(['The credentials provided did not match our records.']);
        }
    }
}
