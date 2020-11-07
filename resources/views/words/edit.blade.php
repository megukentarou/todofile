@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">編集画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        
                   <form method="POST" action="{{ route('words.update',['id' => $word->id]) }}" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">
                        ・印象に残った言葉を入力して下さい
                        </label>
                        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="5">{{ $word->text }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">
                        ・その言葉にどの様な印象を持ちましたか？
                        </label>
                        <textarea class="form-control" name="impression" id="exampleFormControlTextarea2" rows="5" >{{ $word->impression }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea３">
                        ・具体的にどの様な行動をしますか？
                        <br>
                        (出来るだけ細かく決める事で具体性が生まれてきて、行動しているイメージがしやすくなります。)
                        </label>
                        <textarea class="form-control" name="action" id="exampleFormControlTextarea３" rows="7">{{ $word->action }}</textarea>
                    </div>
                    <input class="btn btn-primary" type="submit" value="更新する">              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
