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
                        @foreach ($index as $indexs)
                        <tr>
                            <th scope="row">
                                {{ $indexs->id }}
                            </th>
                            <td><img src="{{ $indexs->image }}" alt="" width="100%">
                            </td>
                            <td>{{ $indexs->title }}
                            </td>
                            <td>{{ $indexs->content }}
                            </td>
                            <td>
                                <form action="/home/index/{{ $indexs->id }}/edit" method="POST">
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