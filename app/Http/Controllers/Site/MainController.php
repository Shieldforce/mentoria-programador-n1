<?php

namespace App\Http\Controllers\Site;


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
        return redirect()->route("login");
    }
}
