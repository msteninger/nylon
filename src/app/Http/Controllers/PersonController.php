<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $personId = null)
    {
        if (empty($personId)) {
            $person = new Person();
        } else {
            $person = Person::find($personId);
        }

        $personData = $request->post();
        unset($personData['person_id']);

        if (empty($personData['is_active'])) {
            $personData['is_active'] = 0;

        }

        // in real life this would be a proper string encryption!
        $personData['ssn'] = str_rot13($personData['ssn']);

        $person->updateOrCreate($personData);
        $person->refresh();
        return $person->toJson(JSON_PRETTY_PRINT);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
