<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function newlicense()
    {
        return view('new-license');
    }

    private function getClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName(config('google.app-name'));
        $client->setScopes(config('google.scopes'));
        $client->setAuthConfig(config('google.client-secret-path'));
        return $client;
    }

    public function getcountersigned()
    {
        if ($total = cache::get('countersign.total')) {
            return response()->json($total);
        }
        // Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new \Google_Service_Sheets($client);

        // Prints the names and majors of students in a sample spreadsheet:
        // https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
        $spreadsheetId = '1zrePCMq2lPVnZcjDk4ky8zuafVq-k_Xp3whI_e-VZ2I';
        $range = 'sheet1!L2:L3';
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        $total = $values[0][0];
        cache::put('countersign.total', $total, 10);
        return response()->json($total);
    }
}
