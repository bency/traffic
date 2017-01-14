@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
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
    </div>
@endsection
