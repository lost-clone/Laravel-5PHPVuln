<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function fetchImage(Request $request)
    {
        $imgUrl = $request->input('imgUrl');
        
        $response = Http::get($imgUrl);
        
        return response($response->body())
            ->withHeaders($response->headers())
            ->header('Content-Type', $response->header('Content-Type'));
    }
}