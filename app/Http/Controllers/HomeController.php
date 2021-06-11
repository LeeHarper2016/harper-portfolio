<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextComponent;

class HomeController extends Controller
{
    /***********************************************************************************************************************************************************
     * 
     * Function Name: HomeController.view().
     * Purpose: Returns the welcome page view along with all sections stored in the database.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @returns response The welcome page view with data from the database.
     * 
     **********************************************************************************************************************************************************/
    public function view() {
        $data = [
            'sections' => TextComponent::all()
        ];

        return response()->view('welcome', $data);
    }
}
