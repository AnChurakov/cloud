@extends('layouts.admin')

@section('content')
<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Характеристики
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="/feature/all"><i class="icon icon-list"></i>Все характеристики</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/feature/add"><i
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
    @if ($features->count() != 0)
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
                                            <th>НАЗВАНИЕ</th>
                                            <th>ОПИСАНИЕ</th>
                                            <th>ДАТА ДОБАВЛЕНИЯ</th>                                 
                                            <th>CТАТУС</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                    @foreach ($features as $feature)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_{{$feature->id}}" required><label
                                                        class="custom-control-label" for="user_id_{{$feature->id}}"></label>
                                                </div>
                                            </td>
                                            

                                            <td>
                                                <a href="#">{{$feature->name}}</a>
                                            </td>

                                            <td>
                                                @empty(!$feature->description)
                                                    $feature->description
                                                @else
                                                    Описания нет
                                                @endempty
                                            </td>                                           
                                         
                                            
                                            <td>
                                                {{$feature->created_at->format('d.m.Y')}}
                                            </td>                                           

                                            <td>
                                            <span class="icon icon-circle s-12 mr-2 text-danger"></span> Неоплачено
                                            </td>
                                            <td>                                               
                                                <a href="delete/{{$feature->id}}" class="btn btn-danger btn-sm">Удалить</a>
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

                <nav class="my-3" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
   @else
     <div class="container-fluid pt-5">
        <div class="text-center p-5">
            <i class="icon-note-important s-64 text-primary"></i>
            <h4 class="my-3">В данный момент характеристик нет</h4>
            <p>Вы еще не добавили характеристики для товаров. Добавьте первую характеристеку прямо сейчас</p>
            <a href="/feature/add" class="btn btn-primary shadow btn-lg"><i class="icon-plus-circle mr-2 "></i>Добавить</a>
        </div>
    </div>
    @endif
</div>
@endsection