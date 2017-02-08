<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Countersign;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

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

    public function home()
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

    public function submitcountersinged(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $birth = $request->input('birth');
        $signed_at = time();
        try {
            $countersign = Countersign::create(['name' => $name, 'email' => $email, 'phone' => $phone, 'birth' => $birth, 'signed_at' => $signed_at]);
            Cache::increment('countersign.total');
        } catch (QueryException $e) {
            return redirect(route('home'))->with('message', ['type' => 'danger', 'text' => "感謝您的支持，但您已經聯署過囉！"]);
        }
        return redirect(route('home'))->with('message', ['type' => 'success', 'text' => '感謝您的支持，也希望您能轉寄家人朋友，達成30萬聯署書目標']);
    }

    public function polis()
    {
        return view('polis');
    }
}
