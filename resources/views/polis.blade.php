@extends('layouts.app')
@inject('agent', 'Jenssegers\Agent\Agent')
@section('content')
    <div class="container">
        <div class='polis' data-conversation_id='6zatkfimer'></div>
        <script async='true' src='https://pol.is/embed.js'></script>
    </div>
@endsection
