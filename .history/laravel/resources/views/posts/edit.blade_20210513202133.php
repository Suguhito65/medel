@extends('layouts.app')
@section('title', '編集ページ')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        @include('layouts.error')
        <div class="card" style="background: #fafafa">
        <h3 class="card-header text-center text-white" for="exampleFormControlTextarea1" >編集</h3>
            <form action="{{ route('posts.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <p class="card-text">
                        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{$post->body}}</textarea>
                    </p>
                    <div class="text-center mt-3">
                        <input name="post_id" type="hidden" value="{{$post->id}}" >
                        <input class="btn btn-primary px-4 mt-3" style="border-radius: 1.2em" type="submit" value="変更する">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection