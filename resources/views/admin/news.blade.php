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
      <form action="/home/news/add" method="POST">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-success">
            Новая запись
            </button>
            
          </div>
          <div class="col-md-6">
            {{ $posts->links() }}
            
          </div>
          
        </div>
        
        
      </form>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">
              ID
            </th>
            <th scope="col">
              Изображение
            </th>
            <th scope="col">
              Тема
            </th>
            <th scope="col">
              Контент
            </th>
            <th scope="col">
            </th>
            
          </tr>
          
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <th scope="row">
              {{ $post->id }}
            </th>
            <td><img src="{{ $post->image }}" alt="" width="100%">
            </td>
            <td>{{ $post->title }}
            </td>
            <td>{{ $post->content }}
            </td>
            <td>
              <form action="/home/news/{{ $post->id }}/delete" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger">
                Удалить
                </button>
                
              </form><br>
              <form action="/home/news/{{ $post->id }}/edit" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-warning">
                Редактировать
                </button>
                
              </form>
              
            </td>
            
          </tr>
          @endforeach
          
        </tbody>
        
      </table>
      
    </div>
    <div class="col-md-12 text-center">
      
      
    </div>
    
  </div>
  
</div>
@endsection