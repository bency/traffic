@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 id="differences" class="text-center">低事故率國家的作法</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <ul>
                    <li>教育面</li>
                    <ul>
                        <li>從學齡開始到高中，分階段持續教導、深植交通安全觀念。</li>
                        <li>結合民間力量，教導孩子安全用路能力，讓孩子自己獨立行動，而不是以保護，阻絕了孩子學習自我防衛的機會。</li>
                    </ul>
                    <li>考照制度</li>
                    <ul>
                        <li>逐步發照：於考照前發給學習駕照，考照及格後先發給臨時駕照，一段時間後再發給正式駕照。</li>
                        <li>術科考試：我國場內考試僅考固定項技巧，導致駕訓班不必要教授不會考試的其他項目。各國術科大多採實際道路考試，測驗各種技巧的綜合表現，或如日本雖採場內考照，但考照內容超過50項以上，考前抽題組，因此，考照人須學習完整駕駛訓練。</li>
                    </ul>
                    <li>違規記點</li>
                    <ul>
                        <li>先進國家從小教育交通安全規範，嚴格考照，採信任民眾取向；但若民眾違規，則採記點重罰，讓違規者深刻體認，不敢輕易違規，確保用路空間的安全及用路人的生命。</li>
                    </ul>
                </ul>
            </div>
            <img class="thumbnail center-block col-md-4" src="/images/image-3.jpg">
        </div>
        <hr class="hidden-lg">
    </div>
@endsection
