<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\PositionRequest;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /******************************************************************************************************************************************************
     * 
     * Function Name: PositionController.store().
     * Purpose: Using the validated information from $request, a new position will be created and stored to the database.
     * Precondition: The $request information is valid.
     * Postcondition: A new Position is stored to the database.
     * 
     * @param PositionRequest $request The validated information that has been supplied by the user.
     * @returns Redirection back to the homepage.
     * 
     *****************************************************************************************************************************************************/
    public function store(PositionRequest $request) {
        $positionImage = $request->image;

        $position = Position::create([
            'company_name' => $request->company_name,
            'position' => $request->position,
            'body' => $request->body,
            'description' => $request->description,
            'img_src' => '/images/uploaded/' . $positionImage->hashName(),
            'img_alt' => $request->img_alt
        ]);

        $positionImage->store('/images/uploaded');

        return back();
    }

    /******************************************************************************************************************************************************
     * 
     * Function Name: PositionController.viewJson().
     * Purpose: Retrieves a json object containing all the Positions stored within the database.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @returns json JSON object containing all Positions inside the database.
     * 
     * ***************************************************************************************************************************************************/
    public function viewJson() {
        return json_encode(Position::all());
    }
}
