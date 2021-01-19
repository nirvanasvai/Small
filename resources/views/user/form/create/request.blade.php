@extends('user.layouts')

@section('title','Завявка')

@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Заполните Завяку</h1>
            <p class="lead"><span class="text-danger">ВНИМАНИЕ!</span> Завяки можно оставлять раз в сутки!</p>
            <form action="{{route('request.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                {{--                        Разделитель обычный input s--}}
                <div class="form-group">
                    <label for="subject">Тема</label>
                    <input type="text" name="subject" placeholder="subject" id="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror">
                    @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{--                        Разделитель обычный input e--}}

                {{--                        Разделитель обычный input s--}}
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" placeholder="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{--                        Разделитель обычный input e--}}

                {{--                        Разделитель обычный input s--}}
                <div class="form-group">
                    <label for="email">Емейл</label>
                    <input type="email" name="email" placeholder="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{--                        Разделитель обычный input e--}}


                {{--                        Разделитель обычный textarea s--}}
                <div class="form-group">
                    <label for="message">message</label>
                    <textarea rows="5" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="message" id="message">{{ old('message') }}</textarea>
                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{--                        Разделитель обычный textarea e--}}

                {{--                        Разделитель Фото s--}}
                <div class="form-group">
                    <label for="file">Фото</label>
                    <input type="file" name="file[]" multiple placeholder="Выберите фото" id="file" value="{{ old('file') }}" class="form-control @error('file') is-invalid @enderror">
                    @error('file.*')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{--                        Разделитель фото e--}}

                <button type="submit" class="btn btn-primary mb-2">Submit</button>

            </form>
        </div>
    </div>






@endsection
