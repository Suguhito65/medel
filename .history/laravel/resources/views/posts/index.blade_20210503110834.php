@extends('layouts.app')
@section('title', 'トップページ')
@section('content')
@include('posts.search')
<div class="row">
    <div class="col-10 col-md-6 offset-1 offset-md-3">
        @if (session('err_msg'))
            <p class="text-danger">
                {{ session('err_msg') }}
            </p>
        @endif
        
        @foreach ($posts as $post)

            @include('posts.card')

        @endforeach
        <!-- ページネーション -->
        @if(isset($tag_name))
            {{ $posts->appends(['tag_name' => $tag_name])->links() }}
        @elseif(isset($search_query))
            {{ $posts->appends(['search' => $search_query])->links() }}
        @else
            {{ $posts->links() }}
        @endif
    </div>
</div>
@endsection