@extends('manager.layouts.app')

@section('title','Главная')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Заявки</h1>
            <p class="lead">Ранее оставленные заявки</p>

            @forelse($requests as $request)
                <div class="card">
                    <div class="card-header">
                        {{$request->subject ?? ''}}
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$request->name ?? ''}}</h4>
                        <p class="lead">{{$request->message}}</p>
                        <p>{{$request->created_at->format('Y-m-d')}}</p>
                        <p>{{$request->user_id}}</p>
                        <a href="{{route('manager.request.show',$request->id)}}" class="btn btn-primary">Ответить на Заявку</a>
                    </div>
                </div>
            @empty
                <div class="card-header">
                    Пусто!
                </div>
        </div>
        @endforelse


    </div>



@endsection
