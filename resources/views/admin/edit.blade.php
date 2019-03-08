@extends('layouts.app')
@section('content')
<div class="col-md-10">
  <div class="card">
    <div class="card-header">
      Главная
    </div>
    <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
        
      </div>
      @endif
      <form action="/home/news/{{ $edit->id }}/edit" method="POST">
        {{ csrf_field() }}
        <img src="{{ $edit->image }}" alt="" width="100%">
        <label for="example-text-input" class="col-xs-2 col-form-label">
          Название новости
        </label>
        <div class="col-xs-10">
          <input class="form-control" type="text" value="{{ $edit->title }}" name="title" id="editText">
          
        </div>
        <div class="form-group">
          <label for="exampleTextarea">
            Новость
          </label>
          <textarea class="form-control" id="editor-body" name="content" rows="10">
          {{ $edit->content }}
          </textarea>
          
        </div>
        <div class="form-group">
          <label for="exampleInputFile">
            Картинка
          </label>
          <input class="form-control" type="url" value="{{ $edit->image }}" name="image">
          <small id="" class="form-text text-muted">
          Введите ссылку на изображение
          </small>
          
        </div>
        <button type="submit" class="btn btn-primary">
        Сохранить
        </button>
        <button type="button" class="btn btn-danger" onclick="location.href='/home/news'">
        Отменить
        </button>
        
      </form>
      
    </div>
    
  </div>
  
</div>
<script>
CKEDITOR.replace( 'editor-body' );
</script>
@endsection