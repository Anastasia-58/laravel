@extends('.layouts.admin')
@section('title')
    Добавить новость
@endsection

@section('header')
    <h1 class="h2">Добавить новость</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">

        </div>

    </div>
@endsection

@section('content')
    <div>

        <form method="post" action="{{route('admin.news.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Наименование новости</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="author">Автор</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="form-group">
                <label for="status">Статус</label>
                <select class="form-control" id="status" name="status">
                    <option>Draft</option>
                    <option>Active</option>
                    <option>Blocked</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Описание новости</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <br>
            <button class="btn btn-success" type="submit" style="float: right;">Сохранить</button>
        </form>
    </div>
@endsection
