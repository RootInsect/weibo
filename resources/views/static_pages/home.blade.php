@extends('layouts.default')
@section('title','主页')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a>
    </p>
    <p>
      一切，将从这里开始
    </p>
    <p>
      <a href="{{ route('signup') }}" role="button" class="btn btn-lg btn-success">现在注册</a>
    </p>
  </div>
@stop

