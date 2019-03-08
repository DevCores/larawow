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
      <form action="/home/index/{{ $edit->id }}/edit" method="POST">
        {{ csrf_field() }}
        <img src="{{ $edit->image }}" alt="" width="100%">
        <label for="example-text-input" class="col-xs-2 col-form-label">
          Название 
        </label>
        <div class="col-xs-10">
          <input class="form-control" type="text" value="{{ $edit->title }}" name="title" id="editText">
          
        </div>
        <div class="form-group">
          <label for="exampleTextarea">
            Контент
          </label>
          <input class="form-control" type="text" value="{{ $edit->content }}" name="content"></input>
          
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
          <label for="exampleTextarea">
            <b>Первая ссылка Название</b> 
          </label>
          <input class="form-control" type="text" value="{{ $edit->link1name }}" name="link1name"></input>
        </div>
        <div class="form-group">
          <label for="exampleTextarea">
            <b>Вторая ссылка Название </b>
          </label>
          <input class="form-control" type="text" value="{{ $edit->link2name }}" name="link2name"></input>
        </div>
        <div class="form-group">
          <label for="exampleTextarea">
            <b>Третья ссылка Название </b>
          </label>
          <input class="form-control" type="text" value="{{ $edit->link3name }}" name="link3name"></input>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <label for="exampleTextarea">
            Первая ссылка 
          </label>
          <input class="form-control" type="text" value="{{ $edit->link1 }}" name="link1"></input>
          
        </div>

        <div class="form-group">
          <label for="exampleTextarea">
            Вторая ссылка
          </label>
          <input class="form-control" type="text" value="{{ $edit->link2 }}" name="link2"></input>
          
        </div>
        
        <div class="form-group">
          <label for="exampleTextarea">
            Третья ссылка
          </label>
          <input class="form-control" type="text" value="{{ $edit->link3 }}" name="link3"></input>
          
        </div>
        </div>
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
        <button type="button" class="btn btn-danger" onclick="location.href='/home'">
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