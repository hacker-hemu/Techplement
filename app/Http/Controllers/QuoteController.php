<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class QuoteController extends Controller
{
    public function getQuoteOfTheDay()
    {
        $apiKey = 'LT/trgkNXdQLEsFE2nQAOw==YHoaT61xUBssOHI4';
        $url = 'https://api.api-ninjas.com/v1/quotes';
        $category = 'happiness';

        try {
            $response = Http::withHeaders([
                'X-Api-Key' => $apiKey,
            ])->get($url, [
                'category' => $category,
            ]);

            if ($response->successful()) {
                $quoteData = $response->json()[0];

                // Pass the quote data to the Blade view
                return view('quote', [
                    'quote' => $quoteData['quote'],
                    'author' => $quoteData['author'],
                ]);
            } else {
                return view('quote', [
                    'error' => 'Could not retrieve quote. Please try again later.',
                ]);
            }
        } catch (\Exception $e) {
            return view('quote', [
                'error' => 'An error occurred while fetching the quote.',
            ]);
        }
    }
}
