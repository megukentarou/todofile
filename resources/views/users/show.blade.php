@extends('layouts.app')
@if (Session::has('flash_message'))
    <p class="bg-success">{!! Session::get('flash_message') !!}</p>
@endif

@if (Session::has('error_message'))
    <p class="bg-danger">{!! Session::get('error_message') !!}</p>
@endif
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}さんの投稿一覧</div>
                <div class="card-body">
                    <a  class="btn btn-light bg-light border-dark" href="{{ route('words.index') }}">全件表示に戻る</a>
                </div>
                @foreach($words as $word)
                <div class="card">
                    <div class="card-body d-flex flex-row">
                    </div>
                    <div class="card-body pt-0 pb-2">
                        <h6 class="card-title">印象に残った言葉</h6>
                        <p class="card-text">
                        {{ $word->text }}</p>
                        <h6 class="card-title">どの様な印象を持ったか</h6>
                        <p class="card-text">
                        {{ $word->impression }}</p>
                        <h6 class="card-title">具体的にどの様な行動をするのか</h6>
                        <p class="card-text">
                        {{ $word->action }}</p> 
                        <a href="{{ route('words.show', ['id' => $word->id]) }}" class="btn btn-light bg-light border-dark" >詳細を見る</a>
                    </div>
                </div>    
                @endforeach          
@endsection