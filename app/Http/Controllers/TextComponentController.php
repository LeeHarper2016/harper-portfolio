<?php

namespace App\Http\Controllers;

use App\Http\Requests\TextComponentRequest;
use App\Models\TextComponent;

use Intervention\Image\ImageManagerStatic as Image;

class TextComponentController extends Controller
{
    /******************************************************************************************************************************************************
     * 
     * Function Name: TextComponentController.store().
     * Purpose: Using the validated information from $request, a new component will be created and stored to the database.
     * Precondition: The $request information is valid.
     * Postcondition: A new text component is stored to the database.
     * 
     * @param TextComponentRequest $request The validated information that has been supplied by the user.
     * @returns Redirection back to the homepage.
     * 
     *****************************************************************************************************************************************************/
    public function store(TextComponentRequest $request) {
        $componentImage = $request->image;

        $component = TextComponent::updateOrCreate([
            "name" => $request->name
        ],
        [
            "title" => $request->title,
            "body" => $request->body,
            "img_src" => 'images/uploaded/' . $componentImage->hashName(),
            "img_alt" => $request->img_alt
        ]);

        $compressedImage = Image::make($componentImage->getRealPath());
        $compressedImage->resize(350, 350);
        $compressedImage->save($component->img_src);

        return back();
    }
}
