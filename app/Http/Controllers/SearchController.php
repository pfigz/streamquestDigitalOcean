<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    protected string $watchmodeApi;

    protected function __construct()
    {
        $this->watchmodeApi = config('services.watchmode.key');
    }

    public function search($query): object
    {
        return Http::get('https://api.watchmode.com/v1/search/?apiKey=' . $this->watchmodeApi . '&search_field=name&search_value=' . $query);
    }
}
