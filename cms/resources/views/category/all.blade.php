@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Все категории</h4>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Количество товара</th>
                        <th>Редактирование</th>
                        <th>Удаление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                        <tr>
                            <th><a href="#">{{$cat->name}}</a></th>
                            <td><span class="label label-success">{{$cat->products->count()}}</span></td>
                            <td><a href="/category/edit/{{ $cat->id }}" class="btn btn-warning btn-sm">Редактировать</a></td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-category').submit()">Удалить</a>
                                <form id="delete-category" action="category/delete/{{$cat->id}}" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
