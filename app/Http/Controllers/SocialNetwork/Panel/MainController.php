<?php

namespace App\Http\Controllers\SocialNetwork\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view($this->request->route()->getName());
    }
}
