<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MainController;
use App\Movies;
use Illuminate\Http\Request;


class MovieController extends MainController
{

    public function index()
    {
        $moviesList = Movies::all();
        return $this->_sendResponse(true, 200, $moviesList);
    }

    public function show(Request $request, $id)
    {
        $movieDetails = Movies::where('id', $id)->first();
        $movieDetails = empty($movieDetails) ? [] : $movieDetails;
        return $this->_sendResponse(true, 200, $movieDetails);
    }

    public function destroy(Request $request, $id)
    {

        dd($id);
    }

    public function new()
    {
        dd('new');
    }
}
