 <!DOCTYPE html>
<html>
<head>
  <title>О компании</title>
</head>
 <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html"></a>
             <p class="navbar-brand"><a href="index.html"><img src="storage/4.png" height="100px" width="100px">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link " href="home">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tovari">Каталог</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addtovar">Добавить товар</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="basket">Корзина</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Контакты</a>
              </li>
              	@extends('layouts.app')
				@section('content')
			  
            </ul>


            
          </div>
        </div>
      </nav>
    </header>
    <body>
    <section class="old">
      <div class="container">
        <h2 class="title2" style="text-align:center;">Мы работаем с 2010 года недорогие и качественные товары</h2>

        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="storage/3.jpg" height="350px" width="350px">
              <p class="card_desc" style="text-align:center">Игровая приставка</p>
              <button type="submit" class="btn btn-primary">Подробнее</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="storage/1.jfif" height="350px" width="350px">
              <p class="card_desc" style="text-align:center">Игровая приставка</p>
              <button type="submit" class="btn btn-primary">Подробнее</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="storage/2.jpg" height="350px" width="350px">
              <p class="card_desc" style="text-align:center">Консоль</p>
              <button type="submit" class="btn btn-primary">Подробнее</button>
            </div>
          </div>
        </div>
      </div>
    </section>
           <section class="rewiews">
      <div class="container">
        <h2 class="title3" style="text-align:center; padding-top: 100px;padding-bottom: 25px;">Отзывы</h2>

        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <img src="storage/4.png" height="150px" width="150px">
              <h3>Игровая приставка</h3>
              <p class="card_desc">Комментарий...</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="storage/4.png" height="150px" width="150px">
              <h3>Игровая приставка</h3>
              <p class="card_desc">Комментарий...</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="storage/4.png" height="150px" width="150px">
              <h3>Консоль</h3>
              <p class="card_desc">Комментарий...</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="storage/4.png" height="150px" width="150px">
              <h3>Консоль</h3>
              <p class="card_desc">Комментарий...</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts"> 
    <h3 style="text-align:center; padding-top: 100px; padding-bottom:25px; ">НАШИ КОНТАКТЫ</h3>
    
    <info style="text-align:center">
    <div class="a" >
г. Москва, Пресненская набережная<br>

info@lumenpoint.ru<br>

+7 (495) 222-22-22
</div>
<div class="col-md-3" style="height:300px; width:300px; padding-left: 350px;">
<img src="storage/map.jpg">
  </div>
</info>
</section>


@endsection
