@extends('layout')

@section('title', 'Welcome')

@section('content')
	<section id="home" data-speed="4" data-type="background">
		<div class="container">
			<div class="row animated fadeInUp">
				  <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 text-center mycol ">
				  	<h2>Тестовое задание Junior web developer</h2>
				   		<h3>Автор: Дмитрий Фомин</h3>
				  			<p><a href="/menu" class="btn btn-lg btn-warning">Меню</a></p>

				  			<a href="/pizza" class="btn btn-lg btn-warning">Калькулятор</a>
				  </div>
				 
			</div>
	    </div>
	</section>
@stop