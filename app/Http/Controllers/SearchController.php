<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use JsonException;

class SearchController extends Controller
{
    protected string $watchmodeApi;

    public function __construct()
    {
        $this->watchmodeApi = config('services.watchmode.key');
    }

    /**
     * @throws JsonException
     */
    public function search($query): object
    {
        $result = Http::get('https://api.watchmode.com/v1/autocomplete-search/?apiKey=' . $this->watchmodeApi . '&search_value=' . $query . '&search_type=2');

        return json_decode($result, false, 512, JSON_THROW_ON_ERROR);
    }

    public function selection($resultId): object
    {
        $result = Http::get('https://api.watchmode.com/v1/title/' . $resultId . '/details/?apiKey=' . $this->watchmodeApi . '&append_to_response=sources');

        return json_decode($result, false, 512, JSON_THROW_ON_ERROR);
    }
}
