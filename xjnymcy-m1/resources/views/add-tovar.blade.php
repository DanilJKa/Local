<!DOCTYPE html>
<html>
<head>
	<title>Добавление товара</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                @extends('layouts.app')
                @section('content')
        
            </ul>


            
          </div>
        </div>
      </nav>
    </header>
<body>
<tovari class="container">
	<div class="form" style="margin-top: 50px;">
		<form method="post" action="{{ route('add') }}" enctype="multipart/form-data">
      @csrf
      <h3 class="text-center">Добавление товара</h3>
  <div class="mb-3">
    <label for="name" class="form-label">Название</label>
    <input type="name" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Цена</label>
    <input type="number" class="form-control" id="price" name="price">
  </div>
   <div class="mb-3">
    <label for="desc" class="form-label">Описание</label>
   <textarea name="desc" class="form-control" id="desc" rows="3"></textarea>
  </div>
   <div class="mb-3">
    <label for="image" class="form-label">Фото</label>
    <input type="file" class="form-control" id="file" name="image">
  </div>
     <div class="mb-3">
    <label for="category" class="form-label">Категория</label>
   <input type="category" class="form-control" id="category" name="category">
  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
	</div>
</tovari>
</body>
</html>