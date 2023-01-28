<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
public function responseOk($result = null, $code = 200, $message =
'Sukses')
{
$response = [
'code' => $code,
'message' => $message,
'errors' => null,
'data' => $result
];
return response()->json($response, $code);
}
public function responseError($message = 'Unprocessable Entity', $code 
= 422, $errors = [])
{
$response = [
'code' => $code,
'message' => $message,
'errors' => $errors,
'data' => null
];
return response()->json($response, $code);
} 
}

