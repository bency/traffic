@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="text-center">交通安全升級提案連署書</h1>
        </div>
        <h4 class="text-center"><span class="label label-primary">#路安提案</span><span></span><span class="label label-info">#考照加嚴</span><span class="label label-danger">#違規記點加重</span><span class="label label-success">#交通安全教育</span></h4>
        <div>
            <p>交通部長賀陳旦說：台灣每年車禍死亡超過3,000人(30日內死亡)，受傷41萬人，若以每萬輛車事故率計算，台灣堪稱世界第一，「這是很不榮耀的第一」，也是國家未來社會力的重大損失。交通部將會全面改進交通安全的技術及宣傳作法。</p>
            <p>對比於先進國家，各國在交通安全教育、考照及違規記點制度的目標都在有效導向正確用路觀念，而非僅是一個該有的制度。交通安全應立足於根本教育及違規重罰的基礎，包括：</p>
            <ol>
                <li>從學齡開始到高中、成人的分階段交通安全教育，因為交通是每個人出門面對的第一件事。</li>
                <li>考照制度賦予人民上路開車的權力，因為沒有正確用路觀念的用路人，就沒有安全的用路環境；然而國內考照制度的固定考試項目，誘導駕訓班僅教授考試項目，如此怎會有完整的駕駛訓練？</li>
                <li>國外重視安全教育及嚴格考照，嚴格把關用路人品質，對於上路後的違規行為，不僅執法到位，違規記點重罰更讓用路人不敢違規。</li>
            </ol>
            <p>台灣交通安全協會結合國內機車團體，向交通部提出《交通安全升級提案書》，期待政府從根本的體制面改革，包括考照加嚴、違規記點加重、安全教育。</p>
            <p>期待未來的交通環境是：</p>
            <ol>
                <li>所有用路人皆能意識自己處在同一個動態混流環境下，需要互相尊重對方生命安全。</li>
                <li>交通事故每年能以5%的比例降低為目標，期望能在20年內車禍死亡人數達到零死亡的交通環境 (每年降低180人死亡)(2015年約為 3500 人) 。</li>
            </ol>
        </div>
        @if(!$agent->is('iPhone'))
        <hr class="hidden-lg">
        <div class="page-header">
            <h1 id="propose" class="text-center">提案連署書</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfIZN5hHVRuQwzPMwgUCXljgan8i_wf5AzdsAINbVYNCrC6xg/viewform?embedded=true#responses" height="500" width="100%" frameborder="0" marginheight="0" marginwidth="0">載入中…</iframe>
            </div>
        </div>
        @endif
        <div class="row">
            <a data-type="ga-click" data-target="proposal-link" class="btn btn-primary btn-block" data-href="{{ url('/docs/交通安全升級提案書_20161127.pdf') }}">提案詳細內容 <span class="glyphicon glyphicon-new-window"></span></a>
            @if($agent->is('iPhone'))
            <a data-type="ga-click" data-target="countersigned-link" class="btn btn-primary btn-block" data-href="https://goo.gl/forms/OZ2HIMpC8bMiqFIl2">我同意提案 想幫忙連署 <span class="glyphicon glyphicon-new-window"></span></a>
            @endif
        </div>
    </div>
@endsection
