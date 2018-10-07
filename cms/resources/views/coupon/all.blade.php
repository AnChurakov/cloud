@extends('layouts.admin')

@section('content')
<div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Промокоды</h4>

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
                                    <th>Дата окончания</th>
									<th>Статус</th>
									<th></th>
									<th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($coupons as $coupon)
                                <tr>
                                    <th>{{$coupon->name}}</th>
                                    <td><span class="label label-primary">{{$coupon->date}}</span></td>
									<td><span class="label label-success">{{$coupon->status}}</span></td>
									<td><a href="#" class="btn btn-warning btn-sm">Редактировать</a></td>
                                    <td><a href="delete/{{$coupon->id}}" class="btn btn-danger btn-sm">Удалить</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Промокодов нет</td>
                                </tr>
                                @endforelse

                                </tbody>
                            </table>

                          
                        </div>
                    </div>
                </div> <!-- end row -->
@endsection
