@extends('layouts.admin')

@section('content')
<div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Товар Название</h4>

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
                    <div class="col-md-7 col-lg-7 col-sm-12">
                        <div class="card-box">
                         <div class="col-12">
							<div class="form-group">
								<a href="#" class="text-primary">Редактировать</a>
								<a href="#" class="text-danger">Удалить</a>
							</div>
							
							<div class="form-group">
							
								<strong>ID товара: </strong>
								<span>12312323</span>
							
							</div>
							
							<div class="form-group">
							
								<strong>Описание:</strong>
								<p>
								Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации
								</p>
							
							</div>
							
							<table id="responsive-datatable" class="table table-borderless dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Категория</th>
                                    <th>Подкатегория</th>
                                    <th>Цена</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>Генераторы общие</td>
									<td>Не выбрана</td> 
									<td>1 990</td> 
                                </tr>

                                </tbody>
                            </table>
						</div>
                        

						<div class="form-group">
						
						  <div class="col-lg-12">

                                            <label>Изображения товара</label>

                                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="assets/images/big/1.jpg" alt="First slide" />
                                                        
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/big/2.jpg" alt="Second slide" />
                                                      
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/big/3.jpg" alt="Third slide" />
                                                       
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

						
						</div>
						
						  
                        </div>
                    </div>
                </div> 
@endsection
