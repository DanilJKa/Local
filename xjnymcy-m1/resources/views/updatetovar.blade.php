        <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    {{ csrf_field() }}

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
          <button type="submit" class="btn btn-succes">Обновить</button>
