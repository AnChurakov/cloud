@extends('layouts.admin')

@section('content')
<div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Заказы</h4>

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
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Всего заказов</h6>
                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                            
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Сумма</h6>
                            <h2 class="m-b-20"><span data-plugin="counterup">46,782</span>&#8381</h2>
                            
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-chart float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Стоимость</h6>
                            <h2 class="m-b-20"><span data-plugin="counterup">15.9</span>&#8381</h2>
                            
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Продано</h6>
                            <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                            
                        </div>
                    </div>
                </div>

	<div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title">Последние заказы</h4>
                            

                            <table id="responsive-datatable" class="table table-borderless table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>№</th>
                                    <th>Пользователь</th>
                                    <th>Адрес</th>
									<th>Телефон</th>
									<th>Дата</th>
									<th>Статус</th>
                                    <th>Стоимость</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td><a href="#"><strong>1111</strong></a></td>
                                    <td>Вольхин Сергей Дмитриевич</td>
                                    <td>г. Ижевск, ул. Ленина 68, 426000</td>
									<td>8 999 999 99 99</td>
									<td>1.10.18</td>
									<td><span class="label label-success">Оплачен</span></td>
									<td>500</td>
                                    <td><a href="#" class="btn btn-sm btn-danger">Удалить</a></td>                                    
                                </tr>
							  <tr>
                                    <td><a href="#"><strong>1111</strong></a></td>
                                    <td>Вольхин Сергей Дмитриевич</td>
                                    <td>г. Ижевск, ул. Ленина 68, 426000</td>
									<td>8 999 999 99 99</td>
									<td>1.10.18</td>
									<td><span class="label label-success">Оплачен</span></td>
									<td>500</td>
                                    <td><a href="#" class="btn btn-sm btn-danger">Удалить</a></td>                                    
                                </tr>
							
							  <tr>
                                    <td><a href="#"><strong>1111</strong></a></td>
                                    <td>Вольхин Сергей Дмитриевич</td>
                                    <td>г. Ижевск, ул. Ленина 68, 426000</td>
									<td>8 999 999 99 99</td>
									<td>1.10.18</td>
									<td><span class="label label-success">Оплачен</span></td>
									<td>500</td>
                                    <td><a href="#" class="btn btn-sm btn-danger">Удалить</a></td>                                    
                                </tr>
							
							  <tr>
                                    <td><a href="#"><strong>1111</strong></a></td>
                                    <td>Вольхин Сергей Дмитриевич</td>
                                    <td>г. Ижевск, ул. Ленина 68, 426000</td>
									<td>8 999 999 99 99</td>
									<td>1.10.18</td>
									<td><span class="label label-success">Оплачен</span></td>
									<td>500</td>
                                    <td><a href="#" class="btn btn-sm btn-danger">Удалить</a></td>                                    
                                </tr>
							
								
               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
				

@endsection
