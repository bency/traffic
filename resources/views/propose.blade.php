@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        @if(session('message'))
            <div id="fb-root"></div>
            <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8&appId=529407913870999"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
            <div class="alert alert-{{ session('message')['type'] }}">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('message')['text'] }}
                @if('success' == session('message')['type'])
                    <div class="fb-share-button" data-href="https://traffic.keeping.work/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftraffic.keeping.work%2F&amp;src=sdkpreparse">按我分享此聯署</a></div>
                @endif
            </div>
        @endif
        <div class="row">
            <div class="visible-lg-block">
                <iframe src="//slides.com/bency/upgradesafetyoftraffic/embed" width="1170" height="600" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="visible-md-block">
                <iframe src="//slides.com/bency/upgradesafetyoftraffic/embed" width="970" height="600" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="visible-sm-block">
                <iframe src="//slides.com/bency/upgradesafetyoftraffic/embed" width="750" height="600" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="visible-xs-block">
                <iframe src="//slides.com/bency/upgradesafetyoftraffic/embed" width="320" height="280" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="margin-left: auto;margin-right: auto;"></iframe>
            </div>
        </div>
    </div>
