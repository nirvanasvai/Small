@extends('manager.layouts.app')

@section('title','Главная')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <label  for="">Имя Клиента</label>
        <h4 class="form-group">{{$request->name}}</h4>
        <label for="">Тема Сообщении</label>
        <h5 class="form-group">{{$request->subject}}</h5>
        <label for="">Сообщение</label>
        <p class="form-group">{{$request->message}}</p>
        <hr />
        <div>
            @foreach ($request->answers as $answer)
                <p>
                    {{ $answer->message }}
                </p>
            @endforeach
        </div>
        <hr />
        <form action="{{route('manager.answer.store',$request->id)}}" method="post">
            @csrf


            <div class="form-group">
                <label for="answer">Написать Ответ</label>
                <textarea class="form-control" name="message"></textarea>
                <input type="hidden" value="{{ $request->id }}" name="request_id">
            </div>
            <button class="btn btn-info">Отправить</button>



        </form>
    </div>
</div>

@endsection

