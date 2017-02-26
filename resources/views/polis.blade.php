@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs hidden-xs" role="tablist">
            <li class="active" role="presentation"><a href="#6bbhzmksaz" aria-controls="home" role="tab" data-toggle="tab">交通是國安問題</a></li>
            <li role="presentation"><a href="#6ysmbjymk8" aria-controls="settings" role="tab" data-toggle="tab">加重記點</a></li>
            <li role="presentation"><a href="#5ur46rdmvk" aria-controls="settings" role="tab" data-toggle="tab">公開交通數據</a></li>
            <li role="presentation" class="dropdown">
                <a href="#" class="dropdown-toggle" id="license" data-toggle="dropdown" aria-controls="license-contents" aria-expanded="false">駕照、訓練 <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="license" id="license-contents">
                <li role="presentation"><a href="#2dm3pbmxtn" aria-controls="settings" role="tab" data-toggle="tab">提高考照門檻</a></li>
                <li role="presentation"><a href="#2ydyzsfpx7" aria-controls="settings" role="tab" data-toggle="tab">駕訓班下放機車族</a></li>
                <li role="presentation"><a href="#4mxwedfkbe" aria-controls="settings" role="tab" data-toggle="tab">駕照分級制度</a></li>
                </ul>
            </li>
            <li role="presentation" class="dropdown">
                <a href="#" class="dropdown-toggle" id="education" data-toggle="dropdown" aria-controls="education-contents" aria-expanded="false">教育面 <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="education" id="education-contents">
                    <li><a href="#4t6kzmmcm6" aria-controls="profile" role="tab" data-toggle="tab">交通技能該從何學習</a></li>
                    <li><a href="#3kwxarpbes" aria-controls="messages" role="tab" data-toggle="tab">言教與身教</a></li>
                    <li role="presentation"><a href="#5wbdmnvh2i" aria-controls="settings" role="tab" data-toggle="tab">從校園開始</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav nav-tabs nav-stacked visible-xs-block" role="tablist">
            <li class="active" role="presentation"><a href="#6bbhzmksaz" aria-controls="home" role="tab" data-toggle="tab">交通是國安問題</a></li>
            <li role="presentation"><a href="#6ysmbjymk8" aria-controls="settings" role="tab" data-toggle="tab">加重記點</a></li>
            <li role="presentation"><a href="#5ur46rdmvk" aria-controls="settings" role="tab" data-toggle="tab">公開交通數據</a></li>
            <li role="presentation" class="dropdown">
                <a href="#" class="dropdown-toggle" id="license" data-toggle="dropdown" aria-controls="license-contents" aria-expanded="false">駕照、訓練 <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="license" id="license-contents">
                <li role="presentation"><a href="#2dm3pbmxtn" aria-controls="settings" role="tab" data-toggle="tab">提高考照門檻</a></li>
                <li role="presentation"><a href="#2ydyzsfpx7" aria-controls="settings" role="tab" data-toggle="tab">駕訓班下放機車族</a></li>
                <li role="presentation"><a href="#4mxwedfkbe" aria-controls="settings" role="tab" data-toggle="tab">駕照分級制度</a></li>
                </ul>
            </li>
            <li role="presentation" class="dropdown">
                <a href="#" class="dropdown-toggle" id="education" data-toggle="dropdown" aria-controls="education-contents" aria-expanded="false">教育面 <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="education" id="education-contents">
                    <li><a href="#4t6kzmmcm6" aria-controls="profile" role="tab" data-toggle="tab">交通技能該從何學習</a></li>
                    <li><a href="#3kwxarpbes" aria-controls="messages" role="tab" data-toggle="tab">言教與身教</a></li>
                    <li role="presentation"><a href="#5wbdmnvh2i" aria-controls="settings" role="tab" data-toggle="tab">從校園開始</a></li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <div class='tab-pane polis active' id="6bbhzmksaz" data-conversation_id='6bbhzmksaz'></div>
            <div class='tab-pane polis' id="4t6kzmmcm6" data-conversation_id='4t6kzmmcm6'></div>
            <div class='tab-pane polis' id="3kwxarpbes" data-conversation_id='3kwxarpbes'></div>
            <div class='tab-pane polis' id="5wbdmnvh2i" data-conversation_id='5wbdmnvh2i'></div>
            <div class='tab-pane polis' id="2dm3pbmxtn" data-conversation_id='2dm3pbmxtn'></div>
            <div class='tab-pane polis' id="2ydyzsfpx7" data-conversation_id='2ydyzsfpx7'></div>
            <div class='tab-pane polis' id="4mxwedfkbe" data-conversation_id='4mxwedfkbe'></div>
            <div class='tab-pane polis' id="6ysmbjymk8" data-conversation_id='6ysmbjymk8'></div>
            <div class='tab-pane polis' id="5ur46rdmvk" data-conversation_id='5ur46rdmvk'></div>
        </div>
        <script async='true' src='https://pol.is/embed.js'></script>
    </div>
@endsection
