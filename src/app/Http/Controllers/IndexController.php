<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $people = Person::all();

        return View('index', ['people' => $people]);
    }

    public function edit(Request $request, $personId = null)
    {
        if ($personId) {
            $person = Person::find($personId);
        } else {
            $person = new Person();
        }

        // in a real application this would be a proper decycryption
        $person->ssn = str_rot13($person->ssn);

        return View('edit', ['person' => $person]);
    }
}
