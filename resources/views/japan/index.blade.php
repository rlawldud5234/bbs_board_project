@extends('layouts.app')
@section('content')
<link href="{{ asset('css/headercss.css') }}" rel="stylesheet">
<link href="{{ asset('css/japan.css') }}" rel="stylesheet">
<div class="container">
    <div class="page-header contain">
        <h3>현지학기제</h3>
    </div>
    <hr>
    <!-- 작성 글 보이게 할 부분 -->
    @forelse($japans as $japan)
        @include('japan.partial.show')
    @empty
        <p class="text-center text-danger">글이 없습니다.</p>
    @endforelse

    <!-- 작성 폼 -->
    <div id="create" style="display:none">@include('japan.partial.create')</div>

</div>

<!-- 사이드 바 -->
<aside class="side-bar" data-ids="{{$jpIds}}">
    <div class="row">
        <div class="col">
            <button class="btn btn-info m-b button__create"><img src="img/add.png"></button>
            @foreach($japans as $japan)
                @include('japan.partial.article', compact('japan'))
            @endforeach
        </div>
    </div>
    @if($japans->count())
        <div class="text-center">
            {!! $japans->appends((Request::except('page')))->render() !!}
        </div>
    @endif
</aside>
@stop
@section('script')
<script src="{{ asset('js/japan.js') }}" defer></script>
@stop
