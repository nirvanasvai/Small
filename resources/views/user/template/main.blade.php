@extends('user.layouts')

@section('title','Главная')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Заявки</h1>
            <p class="lead">Ранее оставленные заявки</p>

            @forelse($requests as $request)
            <div class="card">
                    <div class="card-header">
                        {{$request->topic ?? ''}}
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$request->name ?? ''}}</h4>
                        <p class="lead">{{$request->message}}</p>
                        <p>{{$requests->created_at->format('Y-m-d')}}</p>
                        <a href="#" class="btn btn-primary">Проверить статус</a>
                    </div>
                </div>

                @empty
                <div class="card-header">
                    Пусто
                </div>
                <div class="card-body">
                    <h5 class="card-title">Вы пока не оставили заявку</h5>

                    <a href="{{ route('request.create') }}" class="btn btn-primary">Оставить заявку</a>
                </div>
            </div>
            @endforelse

        </div>
    </div>



@endsection
