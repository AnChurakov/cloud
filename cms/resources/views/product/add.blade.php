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
                        <!-- end row -->


             <div class="row">
                    <div class="col-7">
                        <div class="card-box">
                         <div class="col-12">

							  <div class="alert alert-success" role="alert">
                                             <strong>Отлично!</strong> Ваш новый товар успешно добавлен
                                            </div>

							<div class="alert alert-danger" role="alert">
                                             <strong>Ошибка!</strong> Новый товар не добавлен! Проверьте, заполнили вы все поля
                                            </div>

                        <form action='product/create' method='post'>			
							<div class="form-group">
                                 <label>Название</label>
                                 <input type="text" class="form-control" id="ProductName"
                                                    placeholder="Введите название товара">
                            </div>
							
							<label>Добавить товар в</label>
							<div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio1" value="category" name="radioInline">
                                <label for="inlineRadio1"> Категорию </label>
                             </div>
							 
                            <div class="radio radio-inline radio-info">
                                <input type="radio" id="inlineRadio2" value="subcategory" name="radioInline">
                                <label for="inlineRadio2"> Подкатегорию </label>
                             </div>
							 
							<div class="form-group" id="showCategory">
                                <label>Категория</label>
                                <select class="form-control">
								<option disabled selected>Выберите категорию</option>
                                @forelse ($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @empty
                                    <option>Нет категорий</option>
                                @endforelse
								</select>
                            </div>
							
							
							<div class="form-group" id="showSubcategory">
                                            <label>Подкатегория</label>
                                            <select class="form-control">
												<option disabled selected>Выберите подкатегорию</option>
                                @forelse ($subcategory as $subcat)
                                    <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                                @empty
                                    <option>Нет подкатегорий</option>
                                @endforelse
											</select>
                            </div>
							
							<div class="form-group">
                                            <label>Цена</label>
                                            <input type="number" name="Price" placeholder="Введите цену" class="form-control">
                                            <span class="font-13 text-muted">За 1 единицу товара</span>

                            </div>
							
							<div class="form-group">
                                            <label>Описание товара</label>
                                            <textarea name="Description" class="form-control"></textarea>
                            </div>
							
							<div class="form-group">
								<label>Фотографии</label><br>
								<span>Вы можете загрузить одновременно несколько фотографий</span>
								<input type="file" multiple class="dropify"  />
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn btn-sm btn-success" id="sub" value="Добавить">	
							</div>

                        </div>
							
						</div>
                          
                        </div>
                    </div>
                </div> <!-- end row -->
@endsection
