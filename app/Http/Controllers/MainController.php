<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function _sendResponse($success = false, $status = 200, $body = '', $content_type = 'application/json')
    {
        /* Set the content type */
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');

        if ($success == true) {
            return ['success' => $success, 'status_code' => $status, 'data' => $body];
            exit;
        } else {
            return ['success' => $success, 'status_code' => $status, 'data' => $body];
            exit;
        }
    }
}
