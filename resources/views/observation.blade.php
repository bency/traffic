@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 id="observation" class="text-center">觀察現象</h1>
        </div>
        <div class="row">
            <h2>名列已開發國家，但車禍死傷卻遠高於已開發國家</h2>
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
            <table class="table">
                <tr class="info"><td>國家</td><td>2011</td><td>2012</td><td>2013</td><td>2014</td></tr>
                <tr><td>中華民國</td><td>14.31</td><td>14.05</td><td>14.37</td><td>13.59</td></tr>
                <tr><td>希臘</td><td>10.26</td><td>8.88</td><td>7.99</td><td>7.28</td></tr>
                <tr><td>義大利</td><td>6.50</td><td>6.32</td><td>5.70</td><td>5.56</td></tr>
                <tr><td>日本</td><td>4.33</td><td>4.13</td><td>4.06</td><td>3.81</td></tr>
                <tr><td>韓國</td><td>10.50</td><td>10.78</td><td>10.14</td><td>9.44</td></tr>
                <tr><td>荷蘭</td><td>3.28</td><td>3.36</td><td>2.84</td><td>2.83</td></tr>
                <tr><td>紐西蘭</td><td>6.45</td><td>6.95</td><td>5.66</td><td>6.54</td></tr>
                <tr><td>波蘭</td><td>10.87</td><td>9.27</td><td>8.71</td><td>8.42</td></tr>
                <tr><td>英國</td><td>3.10</td><td>2.83</td><td>2.76</td><td>2.87</td></tr>
                <tr><td>美國</td><td>10.42</td><td>10.76</td><td>10.39</td><td>10.25</td></tr>
            <table>
            <blockquote>表2.1-1</blockquote>
        </div>
        <hr class="hidden-lg">
    </div>
@endsection
