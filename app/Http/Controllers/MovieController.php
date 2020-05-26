<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MainController;

class MovieController extends MainController
{

    public function index()
    {
        return $this->_sendResponse(true, 200, [['name' => 'moahmed', 'age' => 23], ['name' => 'ahmed', 'age' => 23]]);
    }
}
