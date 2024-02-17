<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function editImage(Request $request)
    {
        $this->validateRequest($request);

        $endpoint = $this->getEndpoint($request->edit_type);
        $apiKey = config('services.clipdrop.api_key');
        $imagePath = $request->file('image_file')->path();

        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
        ])->attach('image_file', file_get_contents($imagePath), 'image.jpg')
            ->post($endpoint);

        return $this->handleApiResponse($response);
    }

    protected function validateRequest(Request $request)
    {
        $request->validate([
            'image_file' => 'required|image|mimes:jpg,png',
            'edit_type' => 'required|string|in:estimate_portrait,reimagine',
        ]);
    }

    protected function getEndpoint($editType)
    {
        return ($editType === 'estimate_portrait')
            ? 'https://clipdrop-api.co/portrait-depth-estimation/v1'
            : 'https://clipdrop-api.co/reimagine/v1/reimagine';
    }

    protected function handleApiResponse($response)
    {
        if ($response->successful()) {
            // Handle success
            return response()->json(['success' => true]);
        }

        // Handle error
        $error = $response->json()['error'] ?? 'Unknown error';
        return response()->json(['error' => $error], $response->status());
    }
}
