<!doctype html>
<html lang="ja">
<head>
    <title>モーダルウィンドウ</title>
    <!-- 必要なメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- 切り替えボタンの設定 -->
@if($function == 'fix')
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#Modal">編集</button>
@else
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal">削除</button>
@endif

<!-- モーダルの設定 -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header my-1">
                @if($function == 'fix')
                    {{$function}}
                    <h5 class="modal-title" id="Modal">編集</h5>
                @else
                    {{$function}}
                    <h5 class="modal-title" id="Modal">削除</h5>
                @endif
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="m-5">
                        <label for="myNameInput">占った方の名前</label>
                        <input type="text" class="form-control px-5" name="fixMyName" placeholder="{{$my_name}}" >
                    </div>
                    <div class="m-5">
                        <label for="myCrushInput">占った方の好きな人の名前</label>
                        <input type="text" class="form-control px-5" name="fixMyCrush" placeholder="{{$my_crush_name}}">
                    </div>
                </div>

                <div class="modal-footer my-1">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="submit" class="btn btn-primary">編集</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
