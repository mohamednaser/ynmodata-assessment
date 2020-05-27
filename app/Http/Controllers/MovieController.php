<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MainController;
use App\Http\Requests\MovieStoreRequest;
use App\Movies;
use Illuminate\Http\Request;

class MovieController extends MainController
{

    /**
     * index
     * 
     * List Movies 
     * @return \Illuminate\Http\JsonResponse
     */

    public function index()
    {
        $moviesList = Movies::all();
        return $this->_sendResponse(true, 200, $moviesList);
    }

    /**
     * show
     * 
     * show Movie Details
     * 
     * @param Request $request  
     * @param Integer $id movie ID
     *        
     * @return \Illuminate\Http\JsonResponse
     */

    public function show(Request $request, $id)
    {
        $movieDetails = Movies::find($id);
        $movieDetails = empty($movieDetails) ? [] : $movieDetails;
        return $this->_sendResponse(true, 200, $movieDetails);
    }

    /**
     * destroy
     * 
     * destroy Movie
     * 
     * @param Request $request  
     * @param Integer $id movie ID
     *        
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy(Request $request, $id)
    {
        if (Movies::destroy($id))
            return $this->_sendResponse(true, 200, ['Movie Delete success']);
        else
            return $this->_sendResponse(false, 200, ['Error In Delete Movie.']);
    }

    /**
     * new
     * 
     * Add New Movie
     * 
     * @param String $name Movie name  
     * @param String $slug movie slug
     * @param String $description movie description
     * @param Date $release_date movie release date
     * @param String $country_code movie country code     
     *        
     * @return \Illuminate\Http\JsonResponse
     */


    public function new(MovieStoreRequest $request)
    {
        Movies::create($request->all());
        return $this->_sendResponse(true, 200, ['Movie Added Success .']);
    }
}
