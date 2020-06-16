@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="w-100">
            <div class="card m-3">
                <div class="card-header">URL</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div><a href="http://127.0.0.1/fortune/{{Auth::user()->id}}">http://127.0.0.1/fortune/{{Auth::user()->id}}</a></div>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header">過去の履歴</div>
                <div class="card-body">
                    ここに削除ボタンあると良いよね<br>
                    表示件数多そうだからそこをページネーションに<br>
                    登録情報の更新したいな
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">占った方の名前</th>
                                <th scope="col">占った方の好きな人の名前</th>
                                <th scope="col">日付</th>
                                <th scope="col">編集</th>
                                <th scope="col">削除</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($fortunes as $fortune)
                            <tr>
                                <th scope="row">{{ $fortune_id++ }}</th>
                                <td>{{ $fortune->my_name }}</td>
                                <td>{{ $fortune->my_crush_name }}</td>
                                <td>{{ $fortune->created_at }}</td>
                                <td><input type="button" class="btn btn-info" value="編集"></td>
                                <td><input type="button" class="btn btn-secondary" value="削除"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
