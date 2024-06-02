<?php

namespace Modules\ALCustomPage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ALCustomPageController extends Controller
{
    public function networkstatus()
    {
        return view('alcustompage::status');
    }
}