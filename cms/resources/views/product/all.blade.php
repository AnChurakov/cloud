@extends('layouts.admin')

@section('content')


<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Товары
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="/product/all"><i class="icon icon-list"></i>Все товары</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/product/add"><i
                                class="icon icon-plus-circle"></i>Добавить новый товар</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>
    @if ($products->count() != 0)
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
                                            <th>Описание</th>
                                            <th>Категория</th>
                                            <th>Подкатегория</th>
                                            <th>Количество товара</th>                                         
                                            <th>Статус</th>                                            
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ($products as $prod)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_1" required><label
                                                        class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>

                                            <td>                                             
                                                <strong><a href="single/{{$prod->id}}">{{$prod->name}}</a></strong>
                                            </td>

                                            <td>
                                               @empty(!$prod->description)
                                                    {{$prod->description}}
                                               @else
                                                    Описания нет
                                               @endempty
                                            </td>

                                            <td>
                                                {{$prod->category->name}}
                                            </td>

                                            <td>
                                                @empty(!$prod->subcategory_id)
                                                    {{$prod->subcategory->name}}
                                                @else
                                                    Подкатегории нет
                                                @endempty
                                            </td>

                                            <td>2</td>         
                                                                             
                                            <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> Inactive</td>
                                            
                                            <td>                                                
                                                <a href="#" class="h4 text-primary"><i class="icon-pencil mr-3"></i></a>
                                                <a href="delete/{{$prod->id}}" class="h4 text-danger"><i class="icon-close"></i></a>           
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
            <h4 class="my-3">В данный момент товаров нет</h4>
            <p>У вас не добавлены товары. Вы можете добавить первый товар прямо сейчас</p>
            <a href="/product/add" class="btn btn-primary shadow btn-lg"><i class="icon-plus-circle mr-2 "></i>Добавить товар</a>
        </div>
    </div>
    @endif
</div>
@endsection
