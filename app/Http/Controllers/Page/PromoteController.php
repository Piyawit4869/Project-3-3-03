<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoteController extends Controller
{
    public function promote() {
        return view('page.promote');
    }
}
