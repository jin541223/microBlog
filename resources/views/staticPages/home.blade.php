@extends('layouts.default')
@section('title', '主页')

@section('content')
	@if (Auth::check())
		<div class="row">
			<div class="col-md-8">
				<section class="status_form">
				@include('shared._status_form')
				</section>
				<h4>动态列表</h4>
				<hr>
				@include('shared._feed')
			</div>
		
			<aside class="col-md-4">
				<section class="user_info">
					@include('shared._user_info', ['user' => Auth::user() ])
				</section>
			</aside>
		</div>
	@else
		<div class="jumbotron">
			<h1>Hello Laravel</h1>
			<p class="lead">
				你现在所看到的是 <a href="https://github.com/jin541223">Laravel 框架练习</a> 的主页
			</p>
			<p>
				一切，从这里开始
			</p>
			<p>
				<a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">马上注册</a>
			</p>
		</div>
	@endif
@stop
