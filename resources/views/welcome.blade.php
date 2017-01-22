@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-{{ session('message')['type'] }}">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('message')['text'] }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <p>台灣每年交通事故死亡超過 3000 人，人均死亡率是日本 3.6 倍、英國 4.7 倍，18 ~ 19 歲剛拿到駕照的年輕人更是機車死亡的高發族群，道路竟成為剛進入社會、國家未來希望的年輕人的最大潛在危險地。</p>
                <p>關鍵原因在我們給予孩子保護，卻輕忽根本的交通安全教育，無法培育出守法、懂得自我保護的用路人；路考考試項目固定，無法嚴格測驗駕駛技術、觀念，再授予上路的權力；縱容違規，違規記點處罰太輕無效，反觀國外文明素養高的國家，背後都有一套對違法者嚴格處罰的機制。</p>
                <p>路安提案提出改革三大重點：
                <ol>
                    <li>考照加嚴：擴增考題、實際道路考照，抽考取代固定考題</li>
                    <li>分階段逐步發照，從考照前的學習駕照、新手駕照、正式駕照到優良駕駛，嚴格品管用路人守法行為</li>
                    <li>加重違規記點項目、點數、及累積期延長到3年，並配套吊銷駕照、重新考照機制，嚴格處罰違規者</li>
                    <li>落實交通安全教育於學校、社會</li>
                </ol>
                <p>道路交通安全已是國安問題，為了我們的家人、孩子的用路安全，請支持路安提案，加入聯署；也希望轉寄家人朋友，達成30萬聯署書目標。</p>
            </div>
            <div class="col-md-6">
                <div class="page-header">
                    <h1 id="propose" class="text-center">提案連署書</h1>
                </div>
                <form class="form-horizontal" action="{{ route('submit.counter.sign') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">真實姓名</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" required placeholder="姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">電子信箱</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="常用的電子信箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">聯絡電話</label>
                        <div class="col-sm-6">
                            <input type="phone" class="form-control" id="phone" name="phone" required placeholder="手機或市話">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="submit" class="btn btn-primary">我要連署</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
