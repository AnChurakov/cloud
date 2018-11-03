@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Города</h4>
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
                        <th>Редактирование</th>
                        <th>Удаление</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cities as $city)
                        <tr>
                            <th><a href="#">{{$city->name}}</a></th>
                            <td><a href="{{ route('city.edit', ['id'=>$city->id]) }}" class="btn btn-warning btn-sm">Редактировать</a></td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-category').submit()">Удалить</a>
                                <form id="delete-category" action="{{ route('city.delete', ['id'=>$city->id]) }}" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="3" class="text-center">Пусто</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection