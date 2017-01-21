@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="text-center">提案目的</h1>
        </div>
        <div>
            <h2>呼應政府政策</h2>
            <p>交通部長上任後召開部務會議宣示未來半年五大優先工作，其中「努力減少交通傷亡」列為第二大重要工作。
            賀陳部長表示，台灣每年車禍死亡 3,000 人，受傷 41 萬人，若以每萬輛車事故率計算，台灣堪稱世界第一，「這是很不榮耀的第一」，也是國家未來社會力的重大損失。交通部將會全面改進交通安全的技術及宣傳作法。</p>
            <p>本聯盟非常認同交通部將交通安全列為關鍵工作，此提案在呼應中央政策，以公民力量協助政府加速改革，盡快落實交通部的交通安全政策。</p>
            <p>路安聯盟結合了台灣交通安全協會、台灣機車路權促進會、小老婆汽機車資訊網等長期關注國內道路安全的團體，亦遍尋國外相關作為，實際到國外體驗駕駛行為，希望用國際觀點，改善國內長期難解的交通安全問題。
            路安聯盟的宗旨為：<br><mark>理性溝通，導正交通安全觀念，降低車禍死傷</mark>。</p>
        </div>
        <div class="row">
            <h2 id="purpose">提案目的</h2>
            <div class="col-md-8">
                <ul>
                    <li>建議政府從根本的體制面改革，改變用路人交通安全觀念、行為，交通安全自然提升</li>
                    <li>採用提案方式，與政府、社會理性溝通，期待社會能深度、理性溝通政策</li>
                    <li>主動對外溝通價值觀，帶起社會思考問題，並尋求共識的改善方案</li>
                    <li>發揮公民力量，協助政府促成社會進步，邁向更好的未來</li>
                </ul>
            </div>
            <img class="thumbnail center-block col-md-4" src="/images/image-1.jpg">
        </div>
        <hr class="hidden-lg">
        <div class="page-header">
            <h1 id="propose" class="text-center">提案連署書</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" action="{{ route('submit.counter.sign') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-offset-2 col-sm-2 control-label">真實姓名</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" required placeholder="姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-offset-2 col-sm-2 control-label">電子信箱</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="常用的電子信箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-offset-2 col-sm-2 control-label">聯絡電話</label>
                        <div class="col-sm-6">
                            <input type="phone" class="form-control" id="phone" name="phone" required placeholder="手機或市話">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-10">
                            <button type="submit" class="btn btn-primary">我要連署</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
