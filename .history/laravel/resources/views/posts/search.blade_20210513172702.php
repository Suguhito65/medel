<form action="{{ route('posts.search') }}" method="get" class="input-group mb-5" style="width: 60%; margin: 0 auto">
    {{ csrf
    <input type="text" placeholder="search" name="search" value="" class="form-control">
    <button type="submit" class="btn btn-outline-primary ml-1">
        <i class="fas fa-search"></i>
    </button>
</form>

@isset($search_result)
    <h2 class="text-center mb-3">{{ $search_result}}</h2>
@endisset