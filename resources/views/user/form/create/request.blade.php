@extends('user.layouts')

@section('title','Завявка')

@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Заполните Завяку</h1>
            <p class="lead"><span class="text-danger">ВНИМАНИЕ!</span> Завяки можно оставлять раз в сутки!</p>
            <form action="{{route('request.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <label for="topic">Тема</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="topic" placeholder="Введите тему">

                <label for="name">Ваше Имя</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Введите имя">

                <label class="sr-only" for="email">Ваша Почта</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="email" placeholder="Введите свою почту">
                </div>


                <label for="message"></label>
                <textarea class="form-control" name="message" id="message" cols="20" rows="6" placeholder="Введите сообащение"></textarea>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Открыть папку</label>
                    </div>
                </div>

                <div class="form-check mb-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                        Запомнить меня
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>

            </form>
        </div>
    </div>






@endsection
