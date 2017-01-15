@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('head')
<link href="/css/c3.min.css" rel="stylesheet" type="text/css">
<script src="/js/d3.min.js"></script>
<script src="/js/c3.min.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 id="observation" class="text-center">觀察現象</h1>
        </div>
        <div class="row">
            <h3>名列已開發國家，但車禍死傷卻遠高於已開發國家</h3>
            <img class="thumbnail center-block col-md-8 col-xs-12" src="/images/observe1.png">
        </div>
        <div class="row">
            <blockquote>
                圖 2.1-1 臺灣與日本之A1類事故死亡人數（全部車種）趨勢圖
            </blockquote>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>日本將交通事故視為戰爭，積極針對交通事故制定相關對策進行改善，並設定相關目標，如2006年至2010年期，以交通事故死亡達5000人以下為目標。</p>
                <p>從近年各國對於道路交通死亡率的改善成果觀之(表2.1-1)，即使交通死亡率遠低於我國的日本、韓國及歐洲國家，死亡率的降低都有顯著成效，可見，我們對於交通安全改善的用心、努力還不夠</p>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="chart-2-1-1"></div>
                </div>
            </div>
            <blockquote>表2.1-1 國際道路交通死亡率比較(人/10萬人)</blockquote>
        </div>
        <div class="row">
            <h3>少子化嚴重，但年輕人為車禍死傷的高發族群</h3>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
        <hr class="hidden-lg">
    </div>
    <script src="{{ elixir('js/observation.js') }}"></script>
@endsection
