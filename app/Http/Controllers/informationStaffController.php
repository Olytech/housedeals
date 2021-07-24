<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationStaffController extends Controller
{
    // view page infromation staff
    public function viewInformationStaff()
    {
        return view('form.information-staff');
    }
}
