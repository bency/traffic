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
                <iframe src="//slides.com/bency/wrong-in-traffic-of-taiwan/embed" width="1170" height="600" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="visible-md-block">
                <iframe src="//slides.com/bency/wrong-in-traffic-of-taiwan/embed" width="970" height="600" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="visible-sm-block">
                <iframe src="//slides.com/bency/wrong-in-traffic-of-taiwan/embed" width="750" height="600" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="visible-xs-block">
                <iframe src="//slides.com/bency/wrong-in-traffic-of-taiwan/embed" width="320" height="280" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="margin-left: auto;margin-right: auto;"></iframe>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">讓我們用公民的力量</h3><h3 class="text-center">從根本制度改變台灣交通環境</h3>
                <p>台灣每年交通事故死亡超過3000人，人均死亡率是日本3.6倍、英國4.7倍，18~19歲剛拿到駕照的年輕人傷亡率更是其他年齡層的數十倍，道路竟成為剛入社會、國家未來希望的年輕人，最大潛在危險地。</p>
                <p>我們告訴孩子道路很危險，保護孩子上下學，卻輕忽根本的交通安全教育，沒有培育出守法、懂得自我保護的用路人。</p>
                <p>駕照考試是授予人民開車上路的權利，但路考項目固定，無法嚴格檢測駕駛技術、觀念；機車駕駛危險，但考試卻容易地連駕訓班都不需要。</p>
                <p>我們縱容違規，違規記點處罰太輕，無法有效糾正違規者，反觀國外文明素養高的國家，背後都有一套對違法者嚴格處罰的機制。</p>
                <p>道路交通安全已是國安問題，為了我們的家人、孩子的用路安全，請支持路安提案，加入聯署；也希望轉寄家人朋友。</p>
            </div>
            <div id="signed-form" class="col-md-6">
                <div class="page-header">
                    <h1 id="propose" class="text-center">提案聯署書</h1>
                </div>
                <form class="form-horizontal" action="{{ route('submit.counter.sign') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">真實姓名</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" required placeholder="姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id" class="col-sm-4 control-label">身分證字號</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="id" name="id" required placeholder="身份證字號">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">電子信箱</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="常用的電子信箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-4 control-label">聯絡電話</label>
                        <div class="col-sm-6">
                            <input type="phone" class="form-control" id="phone" name="phone" required placeholder="手機或市話">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-4 control-label">出生年份</label>
                        <div class="col-sm-6">
                            <input type="phone" class="form-control" id="birth" name="birth" required placeholder="西元年">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-block">我要聯署</button>
                        </div>
                        <div class="col-sm-offset-1 col-sm-10">
                            <a href="http://line.naver.jp/R/msg/text/?{{ urlencode('讓我們用公民的力量，從根本制度改變台灣交通環境，請上') }}%0A{{ urlencode('https://traffic.keeping.work') }}%0A{{ urlencode('連署，加入改變的行列') }}"><img src="/images/168x40.png" style="width:116px"></a>
                            <div class="fb-share-button" data-href="https://traffic.keeping.work/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftraffic.keeping.work%2F&amp;src=sdkpreparse">分享</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
