@extends('layouts.app')
@section('content')
{{-- Add wysiwyg script --}}
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
          <form action="/home/news/add" method="POST">
            {{ csrf_field() }}
            <label for="exampleTextInput" class="col-xs-2 col-form-label">
              Название новости
            </label>
            <div class="col-xs-10">
              <input class="form-control" type="text" value="" name="title" id="editText">
              
            </div>
            <div class="form-group">
              <label for="exampleTextarea">
                Новость
              </label>
              <textarea class="form-control" id="editor-body" name="content" rows="5">
              </textarea>
              
            </div>
            <div class="form-group">
              <label for="exampleInputFile">
                Картинка новости
              </label>
              <input class="form-control" type="url" value="https://pbs.twimg.com/media/DvYS2CjW0AIDET9.jpg" name="image">
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