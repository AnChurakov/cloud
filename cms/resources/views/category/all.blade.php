@extends('layouts.admin')

@section('content')



<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Категории
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="/category/all"><i class="icon icon-list"></i>Все категории</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/category/add"><i
                                class="icon icon-plus-circle"></i>Добавить новую категорию</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>
    @if ($categories->count() != 0)
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                        class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>Название</th>
                                            <th>Количество товара</th>
                                            <th>Описание</th>
                                            <th>Статус</th>                                            
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ($categories as $cat)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_1" required><label
                                                        class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>

                                            <td>                                             
                                                <strong>{{ $cat->name }}</strong>
                                            </td>

                                            <td>2</td>
                                            <td>{{ $cat->description }}</td>

                                            <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> Inactive</td>
                                            
                                            <td>                                                
                                                <a href="edit/{{$cat->id}}" class="h4 text-primary"><i class="icon-pencil mr-3"></i></a>
                                                <a href="delete/{{$cat->id}}" class="h4 text-danger"><i class="icon-close"></i></a>
                                                
                                            </td>
                                        </tr>                                       
                                       
                                        @endforeach
                                        </tbody>
                                    </table>
                        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
    @else

    <div class="container-fluid pt-5">
        <div class="text-center p-5">
            <i class="icon-note-important s-64 text-primary"></i>
            <h4 class="my-3">В данный момент категорий нет</h4>
            <p>У вас не добавлены категории. Вы можете добавить первую категорию прямо сейчас</p>
            <a href="/category/add" class="btn btn-primary shadow btn-lg"><i class="icon-plus-circle mr-2 "></i>Добавить категорию</a>
        </div>
    </div>

    @endif
</div>





<!--<div class="row">
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
                            <th>{{$cat->name}}</th>
                            <td><span class="label label-success">{{$cat->products->count()}}</span></td>
                            <td><a href="/category/edit/{{ $cat->id }}" class="btn btn-warning btn-sm">Редактировать</a></td>
                            <td>
                                <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-category').submit()">Удалить</a>
                                <form id="delete-category" action="/category/delete/{{$cat->id}}" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>-->
@endsection
