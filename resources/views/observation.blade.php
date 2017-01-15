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
            <div class="col-md-12">
                <p>剛考照上路的18-19歲為機車死亡人數的高點，此2年的死亡人數與20-29歲相同，18-29歲受傷人數為各年齡層的達3倍，每天面對的交通成為剛進入社會、國家未來希望的年輕人的主要潛在危險？</p>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="chart"></div>
                </div>
            </div>
            <blockquote>表2.2-1 104 年台北市機車傷亡人數統計</blockquote>
        </div>
        <div class="row">
            <h3>機車是慢車？還是快車？</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>機車所有速率規範同汽車，但可行駛道路規範視為慢車，在法令規範似乎也該整理一致。</p>
            </div>
        </div>
        <div class="row">
            <h3>機車走外側車道，是安全？還是不安全？</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>機車走外側車道，提升汽車內車道行車安全，但機車行車亦受到眾多交織干擾，對機車及外側車道的車輛是比較安全？在機車事故頻傳的環境中，此值得重新檢討。</p>
            </div>
        </div>
        <div class="row">
            <h3>假如採取車向/車速分流，可以改善車流交織的衝突？</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>路段中機汽車混流狀況為常態，僅少數路段能做到機車優先或專用，故教導機汽車在混合車流中安全行車為必備常識。若能規範機車依序行車，除了在停等路口時可鑽車前進之外，是否依車速分流可減少機汽車交織，降低危險？此值得深思。</p>
            </div>
            <img class="center-block col-md-8 col-xs-12" src="/images/observation-2.png">
        </div>
        <div class="row">
            <h3>重型機車上國道，絕大多數國家都允許，為什麼我國不行？</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>全世界大多數國家都允許機車上國道，先進國家如亞洲的日本、新加坡、香港、日本、韓國，歐美的美國、加拿大、法國、德國、英國、義大利等等，機車大國如越南、泰國等亦均允許機車行駛國道。</p>
                <p>先進國家開放機車上國道，但交通事故肇事率遠低於台灣，他們一定比我們多做了一些規範、教育，難道我們要因害怕機車，不敢面對機車問題而永遠管制？</p>
            </div>
        </div>
        <div class="row">
            <h3>安全是唯一的共識</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>交通部目前將交通安全列為重大政策，凸顯政府對於安全的重視。</p>
                <p>機車族因路權被規範為慢車，行走在外側車道，受到違停車輛的威脅，機汽車交織造成的潛在交通危險，機車族長期呼籲政府必須重視機車路權。可見不管政府或機車族最在意的都是安全議題。</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="panel-transparent panel-info">
                        <div class="panel-heading">管理者訴求</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">機車交通死傷高</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel-transparent panel-success">
                        <div class="panel-heading">機車族訴求</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">路權不安全</li>
                                <li class="list-group-item">路權不合理</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h3>安全是有價且昂貴的</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>各國把機車當汽車看待，但在考照制度面卻遠比汽車嚴格甚多，因為清楚知道機車沒有防護罩保護，故允許機車上路的把關不在路權限制，而是在教育，在考照。</p>
                <p>其他國家願意面對問題，針對問題做預防性措施，而非像台灣用畏懼態度來面對台灣最大的運具使用族群—機車。</p>
                <p>教導人民正確用路觀念，並給於違規者有效導正、嚇阻機制，才是創造安全環境的正道。</p>
            </div>
        </div>
        <hr class="hidden-lg">
    </div>
    <script src="{{ elixir('js/observation.js') }}"></script>
@endsection
