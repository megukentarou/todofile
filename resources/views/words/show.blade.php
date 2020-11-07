@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    詳細内容
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="card-title">印象に残った言葉</h4>
                    <p class="card-text">
                    {{ $word->text }}</p>
                    <h4 class="card-title">どの様な印象を持ったか</h4>
                    <p class="card-text">
                    {{ $word->impression }}</p>
                    <h4 class="card-title">具体的にどの様な行動をするのか</h4>
                    <p class="card-text">
                    {{ $word->action }}</p>

                    @if( Auth::id() === $word->user_id )
                    <!-- 編集機能 -->
                    <form method="GET" action="{{ route('words.edit', ['id' => $word->id]) }}">
                    @csrf
                    <input class="btn btn-primary" type="submit" value="編集する">
                    </form>
                    <!-- 削除機能 -->
                    <form method="POST" action="{{ route('words.destroy', ['id' => $word->id]) }}" id="delete_{{ $word->id }}">
                    @csrf
                    <a href="#" class="btn btn-danger" data-id="{{ $word->id }}" onclick="deletePost(this);">削除する</a>              
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 削除選択時に最終確認のイベント発火 -->
<script>
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか？')) {
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>

@endsection
