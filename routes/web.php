<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Site\MainController as SiteController;
use \App\Http\Controllers\Panel\MainController as PanelController;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

View::composer("*", function ($view){

    $routeCurrent           = Route::getCurrentRoute();
    $routeActive            = Route::currentRouteName();
    $routePoint             = explode(".", $routeActive);
    $routeAmbient           = $routePoint[0] ?? null;
    $routeCrud              = $routePoint[1] ?? null;
    $routeMethod            = $routePoint[2] ?? null;
    $routeLabel             = isset($routeCurrent->wheres["label"]) ? $routeCurrent->wheres["label"] : "Sem Label";
    $routeGroup             = isset($routeCurrent->wheres["group"]) ? $routeCurrent->wheres["group"] : "Sem Group";
    $routeBreadcrumbTitle   = $routeLabel . " " . $routeGroup;
    //--------------------------------------GIT------------------------------
    $fileGit = file('../.git/HEAD', FILE_USE_INCLUDE_PATH);
    $firstLine = $fileGit[0];
    $exploderGit = explode("/", $firstLine, 3);
    $branch = ucfirst(str_replace(["\n"],[""], $exploderGit[2]));
    //--------------------------------------GIT------------------------------
    $view
        ->with('routeCurrent', $routeCurrent)
        ->with('routeActive', $routeActive)
        ->with('routeAmbient', $routeAmbient)
        ->with('routeCrud', $routeCrud)
        ->with('routeMethod', $routeMethod)
        ->with('branch', $branch)
        ->with('routeBreadcrumbTitle', $routeBreadcrumbTitle);

});

Auth::routes();

// Grupo de rotas do ambiente site
Route::name("site.")->group(function (){

    Route::name("main.")->group(function (){

        Route::get("/", [ SiteController::class, "index" ])->name("index");

    });

});

// Grupo de rotas do ambiente panel
Route::name("panel.")->middleware("auth")->group(function (){

    Route::name("main.")->group(function (){

        Route::get("/painel-de-controle", [ PanelController::class, "index" ])
            ->name("index")
            ->setWheres([
                "label"        => "Página Principal do ",
                "group"        => "Dashboard",
                "roles_ids"    => "all"
            ]);

    });

});
