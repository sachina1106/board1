@extends('layouts.app')
@section('content')


<h2 class="text-success text-center col-12 mt-5">作成ページ</h2>
    <form  action="{{route('board.store')}}" method="POST" class="col-12">
@csrf
            <div class="row">
                    <div class="col">
                            <label for="exampleInputName">名前</label>
                      <input type="text" name="name"class="form-control" placeholder="名前を入力してください。"required>
                    </div>
                    <div class="col">
                            <label for="exampleInputAge">年齢</label>
                      <input type="text" name="age"class="form-control" placeholder="年齢を入力してください。"required>
                    </div>
                  </div>

                  <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">内容</label>
                        <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="内容を入力してください。"required></textarea>
                      </div>

            <button type="submit" class="btn btn-primary">投稿</button>
          </form>

@endsection
