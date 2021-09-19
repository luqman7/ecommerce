<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class IndexController extends Controller
{
    public function index() {
        return view('frontend.index');
    }
}
