<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class FormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function submit(Request $request)
    {
        return redirect("/view");
    }


}
