@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h6>心が変われば行動が変わる</h6><br>
                <h6>行動が変われば習慣が変わる</h6><br>
                <h5>習慣が変われば人格が変わる</h5><br>
                <h4>人格が変われば運命が変わる</h4><br>
                <h3>運命が変われば人生が変わる</h3><br>

                フレデリック・アミエル
                </div>
                <img src="{{asset
                ('images/running-5077128_1920.jpg')}}" width="100%" height="100%" alt="ホーム画面の画像">
              
                
                <div class="card-body">
                    <h5 class="card-text">アプリの説明</h5>
                    
                    <p> 習慣にしていきたいToDoリストを好きな様に投稿出来る様にしています。出来るだけ詳細に残す事で、継続性を生み出して、最終的には習慣化出来る事で自身のライフプランをもっと良くしていける様になって欲しいと思っています。
                    また全体にシェア（宣言）する事で、ある程度やらざるを得ない環境を作っていきましょう。
                    他の人の投稿も見れますので、良かったなと思う内容はお互いどんどん取り入れていきましょう。</p>
                    
                    <div class="aaa">
                    <a class="btn btn-success btn-lg" href="{{ route('words.index')}}" class="card-link"><h5>投稿一覧を見る</h5></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
