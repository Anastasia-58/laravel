@extends('.layouts.admin')
@section('title')
    Категории
@endsection

@section('header')
    <h1 class="h2">Категории</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{route('admin.category.create')}}" type="button" class="btn btn-sm btn-outline-secondary">Добавить категорию</a>
        </div>

    </div>
@endsection

@section('content')
    <div class="table-responsive">
    </div>
@endsection
