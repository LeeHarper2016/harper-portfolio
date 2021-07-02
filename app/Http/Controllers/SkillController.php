<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;

use Intervention\Image\ImageManagerStatic as Image;

class SkillController extends Controller
{
    /****************************************************************************************************
     * 
     * Function: SkillController.store().
     * Purpose: Stores a new skill into the database based on information provided by the user.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @param SkillRequest $request The validated data from the HTTP request.
     * @returns json The JSON object that details the newly-stored skill.
     * 
    ****************************************************************************************************/
    public function store(SkillRequest $request) {
        $skill = Skill::create([
            'name' => $request->name,
            'img_src' => 'images/uploaded/' . $request->image->hashName(),
            'img_alt' => $request->img_alt
        ]);

        $compressedImage = Image::make($request->image->getRealPath());
        $compressedImage->resize(350, 350);
        $compressedImage->save($skill->img_src);

        return json_encode($skill);
    }

    /****************************************************************************************************
     * 
     * Function: SkillController.viewJson().
     * Purpose: Retrieves a collection of all skills within the database, then returns it to the user as
     *          a JSON array.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @returns json The JSON object that contains information on all skills within the database.
     * 
    ****************************************************************************************************/
    public function viewJson() {
        $skills = Skill::all();

        return json_encode($skills);
    }
}
