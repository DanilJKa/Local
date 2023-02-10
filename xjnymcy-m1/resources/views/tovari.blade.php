<!DOCTYPE html>
<html>
<head>
	<title>Каталог</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
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
                <a class="nav-link" href="onas">Контакты</a>
              </li>
               <li><a class="nav-link"> @extends('layouts.app')</li>
            </ul>


            
          </div>
        </div>
      </nav>
    </header>
<body>

<category class="categoria">

  <h3 style="text-align:center">Категории</h3>
  <ul class="cat" style="text-align:center; list-style-type:none">
  <li><a href="#">Компьютеры</a></li>
  <li><a href="#">Игровые приставки</a></li>
  <li><a href="#">Консоли</a></li>
  </ul>
</category>
<!--
<div class='col-md-6'>

method="post" class="form-inline">-->

</div>


	<div class="container">
		@if(count($tovar))
		@foreach ($tovar as $t)


    <div class="card">
      <div class="col-lg-3 .col-sm6">
  <img src="/public/storage/{{ $t->image }}" class="card-img-top" alt="done" height="250px" width="450px">
  <div class="card-body">
    <h5 class="card-title">{{ $t->name }}</h5>
    <p class="card-text">{{ $t->price }}<br>{{ $t->desc }}<br>{{ $t->category }}</p>
  </div>
</div>
<div class="product-links">
  <button class="button">О товаре</button>
  @csrf
<label for="input_quantity">Количество</label>
<input type="text" name="quantity" id="input_quantity" value="1" class="form-control mx-2 w-25">
<button type="submit" class="btn btn success">Добавить в корзину</button>
</form>
<a href="" class="btn btn-primary">Редактировать</a>
<a href="" class="btn btn-danger">Удалить</a>


</div>

    </div>
@endforeach
@else
<p>Товаров нет на складе...</p>
@endif
</div>
</body>
</html>