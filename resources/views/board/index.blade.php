@extends('layouts.app')
@section('content')
<div class="col-12 mt-5">
<h1 class="text-center text-warning">掲示板</h1>
<p class="text-right"><a href="{{route('board.create')}}" class="btn btn-success">新規作成</a></p>

<p class="text-center">掲示板一覧</p>
<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">名前</th>
            <th scope="col">年齢</th>
            <th scope="col">内容</th>
          </tr>
        </thead>
        <tbody>
            @foreach($boards as $board)
          <tr>
            <th scope="row"><?= $board->id ?></th>
            <td><?= $board->name ?></td>
            <td><?= $board->age ?></td>
            <td><?= $board->comment?></td>
            <td><a href="{{route('board.edit',['board'=>$board->id])}}" class="btn btn-info text-light">編集</a></td>
            <form method="post" action="{{route("board.destroy",['board'=>$board->id])}}">
                @csrf
                @method('DELETE')

            <td><button type="submit" class="btn btn-danger text-light">削除</button></td>
        </form>
          </tr>

@endforeachl
        </tbody>
      </table>
</div>
@endsection
