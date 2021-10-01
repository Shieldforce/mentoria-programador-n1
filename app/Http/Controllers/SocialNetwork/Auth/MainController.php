<?php

namespace App\Http\Controllers\SocialNetwork\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login()
    {
        return view($this->request->route()->getName());
    }
}
