@extends('layouts.admin')

@section('content')
<div class="page  has-sidebar-left height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Заказы
                    </h4>
                </div>
            </div>
          
        </div>
    </header>
    @if ($orders->count() != 0)
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
                                            <th>№</th>
                                            <th>ПОКУПАТЕЛЬ</th>
                                            <th>ДАТА</th>                                            
                                            <th>КОЛИЧЕСТВО ТОВАРА</th>                                         
                                            
                                            <th>CТАТУС</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_{{$order->id}}" required><label
                                                        class="custom-control-label" for="user_id_{{$order->id}}"></label>
                                                </div>
                                            </td>

                                            <td>
                                                {{$order->id}}
                                            </td>

                                            <td>
                                           
                                                <div>
                                                    <div>
                                                        <strong>{{$order->user->middlename}} {{$order->user->lastname}}</strong>
                                                    </div>
                                                    <small>{{$order->user->email}}</small>
                                                </div>
                                            </td>

                                            <td>{{$order->created_at->format('d.m.Y')}}</td>                                           
                                         
                                            
                                            <td>
                                            {{$order->productOrder->where('order_id', '=', $order->id)->count()}}
                                            </td>                                           

                                            <td>
                                            <span class="icon icon-circle s-12 mr-2 text-danger"></span> Неоплачено
                                            </td>
                                            <td>
                                                <a href="/order/single/{{$order->id}}" class="btn btn-primary btn-sm">Подробнее</a>
                                                <a href="delete/{{$order->id}}" class="btn btn-danger btn-sm">Удалить</a>
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
            <h4 class="my-3">В данный момент заказов нет</h4>
            <p>Ни один из пользователей еще не оформил заказ</p>
           
        </div>
    </div>
    @endif
</div>
@endsection