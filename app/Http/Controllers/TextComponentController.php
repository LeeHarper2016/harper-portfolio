<?php

namespace App\Http\Controllers;

use App\Http\Requests\TextComponentRequest;
use App\Models\TextComponent;

class TextComponentController extends Controller
{
    /*********************************************************************************************************************************************************************
     * 
     * Function Name: TextComponentController.store().
     * Purpose: Using the validated information from $request, a new component will be created and stored to the database.
     * Precondition: The $request information is valid.
     * Postcondition: A new text component is stored to the database.
     * 
     * @param TextComponentRequest $request The validated information that has been supplied by the user.
     * @returns Redirection back to the homepage.
     * 
     ********************************************************************************************************************************************************************/
    public function store(TextComponentRequest $request) {
        $component = new TextComponent;
        $componentImage = $request->image;

        TextComponent::create([
            "anchor" => $request->anchor,
            "title" => $request->title,
            "body" => $request->body,
            "img_src" => $componentImage->hashName()
        ]);

        $componentImage->store('/images/uploaded');

        return back();
    }
}
