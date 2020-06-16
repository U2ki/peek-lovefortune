@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">URL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>http://127.0.0.1/</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">過去の履歴</div>
                <div class="card-body">
                    ここに削除ボタンあると良いよね<br>
                    表示件数多そうだからそこをページネーションに<br>
                    登録情報の更新したいな
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
