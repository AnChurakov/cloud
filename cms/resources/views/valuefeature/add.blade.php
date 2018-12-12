@extends('layouts.admin')

@section('content')

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        характеристики
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link" href="/feature/all"><i class="icon icon-list"></i>Все характеристики</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/feature/add"><i
                                class="icon icon-plus-circle"></i>Добавить новую</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/valuefeature/all"><i
                                class="icon icon-plus-circle"></i>Все значения характеристик</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="/valuefeature/add"><i
                                class="icon icon-plus-circle"></i>Добавить новое значение</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div>
           
                <div class="row">
                    <div class="col-md-8 ">

                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                Новое значение успешно добавлено
                            </div>
                        @endif
                        
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>Ошибка!</strong> Новое значение не добавлена! Проверьте, вы заполнили все поля или нет
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header white">
                                <strong>Добавление нового значения характеристики</strong>
                            </div>
                                <div class="card-body b-b">
                                    <form action="create" method="POST">
                                        @csrf                            

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label>Название</label>
                                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                        placeholder="Введите название ">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label>Характеристика</label>
                                                    <select class="form-control" name="featureId">
                                                    <option selected disabled>Выберите характеристику</option>
                                                    @foreach($features as $feature)
                                                        <option value="{{$feature->id}}">{{$feature->name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>

                                                
                                            </div>                                

                                        <input class="btn btn-primary mt-4" id="sub" type="submit" value="Добавить"> 
                                    </form>
                            </div>                            
                    </div>
                 </div>                   
            </div>            
        </div>
    </div>
</div>
@endsection
