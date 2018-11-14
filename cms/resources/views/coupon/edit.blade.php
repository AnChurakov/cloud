@extends('layouts.admin')

@section('content')

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Промокоды
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link " href="/coupon/all"><i class="icon icon-list"></i>Все промокоды</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="/coupon/add"><i
                                class="icon icon-plus-circle"></i>Добавить новый промокод</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
                <div class="row">
                    <div class="col-md-8 ">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                Промокод успешно изменен
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>Ошибка!</strong> Промокод не изменен! Проверьте, вы заполнили все поля или нет
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header white">
                                <strong>Редактирование промокода</strong>
                            </div>
                                <div class="card-body b-b">
                                    <form action="{{ route('coupon.update', ['id'=>]) }}" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Название</label>
                                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                        placeholder="Введите название">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Значение</label>
                                                    <input type="text" name="procent" class="form-control"
                                                        placeholder="Введите значение">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Категория</label>
                                                    <select class="form-control" name="catId">
                                                        <option value="#" selected disable>Выберте категорию</option>
                                                        @foreach ($categories as $cat)
                                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Подкатегория</label>
                                                    <select class="form-control" name="subcatId">
                                                    <option value="#" selected disable>Выберте подкатегорию</option>
                                                        @foreach ($subcategories as $subcat)
                                                            <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Статус</label>
                                                    <select class="form-control" name="status">
                                                        <option value="#" selected disable>Выберте статус</option>
                                                        <option value="activecode">Активирован</option>
                                                        <option value="noactivecode">Неактивирован</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <input class="btn btn-primary mt-4" id="sub" type="submit" value="Добавить промокод"> 
                                    </form>
                                </div>                            
                            </div>
                        </div>                   
                    </div>            
                </div>
            </div>
        </div>
@endsection