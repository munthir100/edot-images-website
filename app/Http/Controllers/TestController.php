<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $apiKey = config('services.clipdrop.api_key'); // Assuming you have stored your API key in the config file
        $imagePath = $request->file('image_file')->path(); // Assuming the input name for the image is 'image_file'
        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
        ])->attach('image_file', file_get_contents($imagePath), 'image.jpg')
            ->post('https://clipdrop-api.co/portrait-depth-estimation/v1');
        // Handle the response as needed
        dd($response->body());
        $resultImagePath = public_path('result.png');
        file_put_contents($resultImagePath, $response->body());

        return response()->file($resultImagePath);
    }
}
