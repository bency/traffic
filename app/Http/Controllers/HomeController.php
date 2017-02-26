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
        $id = $request->input('id');
        $signed_at = time();
        try {
            $countersign = Countersign::updateOrCreate(
                ['email' => $email],
                ['id' => $id, 'name' => $name, 'phone' => $phone, 'birth' => $birth, 'signed_at' => $signed_at]
            );
            Cache::put('countersign.total', Countersign::count(), 10);
        } catch (QueryException $e) {
            return redirect(route('home'))->with('message', ['type' => 'danger', 'text' => $e->getMessage()]);
        }
        return redirect(route('home'))->with('message', ['type' => 'success', 'text' => '感謝您的支持，也希望您能轉寄家人朋友，一起用公民的力量改善台灣的交通']);
    }

    public function polis()
    {
        return view('polis');
    }
}
