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
                        <a class="nav-link active" href="/feature/add"><i
                                class="icon icon-plus-circle"></i>Добавить новую</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/feature/add"><i
                                class="icon icon-plus-circle"></i>Все значения характеристик</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/feature/add"><i
                                class="icon icon-plus-circle"></i>Добавить новое значение</a>
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
                                Новая характеристика успешно добавлена
                            </div>
                        @endif
                        
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>Ошибка!</strong> Новая характеристика не добавлена! Проверьте, вы заполнили все поля или нет
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header white">
                                <strong>Добавление новой характеристики</strong>
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
                                                
                                            </div>
                                
                                            <div class="form-group">
                                                <label >Описание характеристики</label>
                                                <textarea name="desc" class="form-control p-t-40 editor" id="categoryDesc"
                                                        placeholder="Краткое описание характеристики (необязательно)" rows="17"></textarea>
                                                
                                            </div>

                                        <input class="btn btn-primary mt-4" id="sub" type="submit" value="Добавить категорию"> 
                                    </form>
                            </div>                            
                    </div>
                 </div>                   
            </div>            
        </div>
    </div>
</div>
@endsection
