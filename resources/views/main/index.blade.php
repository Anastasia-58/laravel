@extends('.layouts/index')
@section('title')
    Главная
@endsection

@section('nav')
    <nav class="nav d-flex justify-content-between">
        123
        {{$keys = array_keys($news)}}
        @dump($keys)
        @foreach($keys as $key)
            <a class="p-2 link-secondary" href="{{route('news.index',['category'=>$key])}}">{{$news[$key]['name']}}</a>
        @endforeach

    </nav>
@endsection
@section('customer')
    <div>
        <form method="get" action="{{route('home.store')}}">
            <div class="form-group">
                <label for="title">Имя пользователя</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Комментарий</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <br>
            <button class="btn btn-success" type="submit" style="float: right;">Отправить</button>
        </form>
    </div>
@endsection
