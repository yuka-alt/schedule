@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt4">スケジュール</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="body">内容</label>
                    <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                </div>

                <!--<div class="form-group">
                    <label for="image">画像 </label>
                    <div class="col-md-6">
                        <input id="image" type="file" name="image">
                    </div>
                </div> -->

                <button type="submit" class="btn btn-success">送信する </button>
            </form>
        </div>
    </div>
</div>
@endsection