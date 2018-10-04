@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="product/add">Добавить товар</a><br><br>
                    <a href="category/add">Добавить категория</a><br><br>
                    <a href="category/all">Все категории</a><br><br>
                    <a href="subcategory/add">Добавить подкатегорию</a><br><br>
                    <a href="subcategory/all">Все подкатегории</a><br><br>
                    <a href="role/add">Добавить роль</a><br><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
