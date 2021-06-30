<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /****************************************************************************************************
     * 
     * Function Name: AuthController.logInUser(Request $request).
     * Purpose: Determines if the provided credentials are accurate, and if they are logs the user in. If not, return an error.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @param LoginRequest $request The validated information taken from the HTTP request.
     * @return mixed
     * 
     ****************************************************************************************************/
    public function logInUser(LoginRequest $request) {
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return back();
        } else {
            return back()->withErrors(['The credentials provided did not match our records.']);
        }
    }
}
