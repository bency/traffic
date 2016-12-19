<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Countersign;
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
        $total = Countersign::count();
        cache::put('countersign.total', $total, 10);
        return response()->json($total);
    }
}
