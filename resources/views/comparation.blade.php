@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
        <div class="page-header">
            <h1 id="differences" class="text-center">我們與他國的差異</h1>
        </div>
        <div class="row">
            <img class="thumbnail center-block col-md-4" src="/images/image-3.jpg">
            <div class="col-md-8">
                <ul>
                    <li>安全教育：世界各國考照費用普遍比較高，並在用路觀念教育相對台灣確實，甚至於從學齡開始即灌輸交通安全觀念，並與民間交通安全團體共同合作推廣</li>
                    <li>機汽車考照制度：各國術科測驗大多採用實際道路考照，如德國的一般道路駕駛、高速公路駕駛、夜間駕駛；英國的道路使用者行為、車輛控制與駕駛行為、路況與天氣限制</li>
                    <li>違規記點：我國違規記點累計期間僅6個月，日本為3年，累計期僅1/6，相對太短</li>
                </ul>
            </div>
        </div>
        <hr class="hidden-lg">
@endsection
