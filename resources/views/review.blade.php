@extends('layout')

@section('title')Отзовы @endsection

@section('main_content')
    <h1>Добавление отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/review/check" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder = "Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button type="submit" class="btn btn-success ">Отправить</button>
    
    </form>
    

@endsection