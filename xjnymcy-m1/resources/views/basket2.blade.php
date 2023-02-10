<!DOCTYPE html>
<html>
<head>
	<title>Коризина</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html"></a>
             <p class="navbar-brand"><a href="index.html"><img src="images/image 1.png">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Каталог</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addtovar">Добавить товар</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="basket">Корзина</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Наши контакты</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">

            </ul>
            
          </div>
        </div>
      </nav>
    </header>
<body>


	<div class="basket" sryle="text-align:center">
        <h3>Корзина</h3>
@extends('layout.site')
@section('content')
    <h1>Оформление заказа</h1>
    <p>Форма оформления</p>
@endsection
</div>
</body>
</html>