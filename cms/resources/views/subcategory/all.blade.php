@extends('layouts.admin')

@section('content')
<div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Подкатегории</h4>

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
									<th>Родительская категория</th>
									<th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($subcategories as $subcat)
                                <tr>
                                    <th>{{$subcat->name}}</th>
                                    <td><span class="label label-success">10 штук</span></td>
									<th>{{$subcat->category->name}}</th>
									<td><a href="#" class="btn btn-warning btn-sm">Редактировать</a></td>
                                    <td><a href="delete/{{$subcat->id}}" class="btn btn-danger btn-sm">Удалить</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Подкатегорий нет</td>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>

                          
                        </div>
                    </div>
                </div>
@endsection
