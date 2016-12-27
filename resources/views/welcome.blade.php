@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="text-center">交通安全升級提案連署書</h1>
        </div>
        <h4 class="text-center"><span class="label label-primary">#路安提案</span><span></span><span class="label label-info">#考照加嚴</span><span class="label label-danger">#違規記點加重</span><span class="label label-success">#交通安全教育</span></h4>
        <div>
            <p>交通部長上任後召開部務會議宣示未來半年五大優先工作，其中「努力減少交通傷亡」列為第二大重要工作。
            賀陳部長表示，台灣每年車禍死亡 3,000 人，受傷 41 萬人，若以每萬輛車事故率計算，台灣堪稱世界第一，「這是很不榮耀的第一」，也是國家未來社會力的重大損失。交通部將會全面改進交通安全的技術及宣傳作法。</p>
            <p>本聯盟非常認同交通部將交通安全列為關鍵工作，此提案在呼應中央政策，以公民力量協助政府加速改革，盡快落實交通部的交通安全政策。</p>
            <p>路安聯盟結合了台灣交通安全協會、台灣機車路權促進會、小老婆汽機車資訊網等長期關注國內道路安全的團體，亦遍尋國外相關作為，實際到國外體驗駕駛行為，希望用國際觀點，改善國內長期難解的交通安全問題。
            路安聯盟的宗旨為：<br><mark>理性溝通，導正交通安全觀念，降低車禍死傷</mark>。</p>
        </div>
        <div class="page-header">
            <h1 id="purpose" class="text-center">提案目的</h1>
        </div>
        <div class="row">
            <img class="thumbnail center-block col-md-4" src="/images/image-1.jpg">
            <div class="col-md-8">
                <ul>
                    <li>建議政府從根本的體制面改革，改變用路人交通安全觀念、行為，交通安全自然提升</li>
                    <li>採用提案方式，與政府、社會理性溝通，期待社會能深度、理性溝通政策</li>
                    <li>主動對外溝通價值觀，帶起社會思考問題，並尋求共識的改善方案</li>
                    <li>發揮公民力量，協助政府促成社會進步，邁向更好的未來</li>
                </ul>
            </div>
        </div>
        <hr class="hidden-lg">
        <div class="page-header">
            <h1 id="observation" class="text-center">觀察現象</h1>
        </div>
        <div class="row">
            <img class="thumbnail center-block col-md-4 col-xs-12" src="/images/image-2.jpg">
            <div class="col-md-8">
                <ul>
                    <li>名列已開發國家，但車禍死傷卻遠高於已開發國家</li>
                    <li>少子化嚴重，但年輕人為車禍死傷的高發族群</li>
                    <li>機車是慢車或快車？</li>
                    <li>機車走外側車道，是安全？還是不安全？</li>
                    <li>假如用車向/車速分流，可以改善車流交織的衝突？</li>
                    <li>重型機車上國道，絕大多數國家都允許，為什麼我們不行？</li>
                    <li>安全是唯一的共識</li>
                </ul>
            </div>
        </div>
        <hr class="hidden-lg">
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
        <div class="page-header">
            <h1 id="propose" class="text-center">考照制度變革提案</h1>
        </div>
        <div class="row">
            <img class="thumbnail center-block col-md-4" src="/images/image-4.png">
            <div class="col-md-8">
                <ul>
                    <li>透過考照升級制度，教育用路人安全駕駛的觀念及行為，其中包含新增機車駕訓班(類似汽車駕訓班)、提高筆試廣度、納入實際道路路考或場考試題多元涵蓋各種情境</li>
                    <li>採分階段逐步發照，包括考照前的學習駕照，考照及格後先取得新手駕照，提醒用路人小心新手開車，同時亦考核新手開車習慣，通過後再取得正式駕照。若正式駕照達一定期間均無違規肇事紀錄，則可取得優良駕照</li>
                    <li>配套違規記點制度，加重民眾對交通違規的警惕，並要求用路人重新接受交通安全觀念教育及重新考照，維護道路的安全環境</li>
                    <li>落實交通安全教育於學校、社會，才能持續提醒民眾交通安全，有效降低交通死傷</li>
                    <li>重建警察執法權威，確保公共行車的安全環境，保護人民生命</li>
                </ul>
            </div>
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
