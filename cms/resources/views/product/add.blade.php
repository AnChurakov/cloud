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
                    <li>
                        <a class="nav-link" href="panel-page-products.html#"><i class="icon icon-trash-can"></i>В корзине</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form id="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Название товара</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                       placeholder="Product Name" value="Apple Iphone 8" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Product Brand</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                       value="Apple" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category">Категория</label>
                                
                                <select id="category" class="custom-select form-control" required>
                                    <option value="" selected disabled>Выберите категорию</option>
                                    <option value="1">Mobile Phone</option>
                                    <option value="2">Laptop & Computers</option>
                                    <option value="3">Accessories</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid category.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Цена</label>
                                <input type="number" class="form-control" id="validationCustom04" placeholder="Введите цену"
                                       required>
                                <div class="invalid-feedback">
                                    Please provide a valid price.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="sku">Артикуль</label>
                                <input type="text" class="form-control" id="sku" placeholder="Введите артикуль" required>
                                <div class="invalid-feedback">
                                    Please provide a valid sku.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="productDetails">Описание товара</label>
                            <textarea class="form-control p-t-40 editor" id="productDetails"
                                      placeholder="Информация о новом товаре" rows="17" required></textarea>
                            <div class="invalid-feedback">
                                Please provide a product details.
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="tags">Метки товара</label><br>
                            <input type="text" class="tags-input"  id="tags" placeholder="Add New"
                                   value="Amsterdam,Washington,Sydney,Beijing,Cairo" required>
                        </div>-->
                        
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary mt-4" type="submit">Добавить товар</button>                           
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Добавление товара</h4>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-7">
        <div class="card-box">
            <div class="col-12">

             
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Отлично!</strong> Ваш новый товар успешно добавлен
            </div>
        @endif
        
        @if ($errors->any())

        <div class="alert alert-danger" role="alert">
            <strong>Ошибка!</strong> Новый товар не добавлен! Проверьте, вы заполнили все поля или нет
        </div>
        @endif
       
        <form action="{{ route('productCreate') }}" method="post" enctype="multipart/form-data">
            @csrf			
            <div class="form-group">
                    <label>Название</label>
                    <input type="text" class="form-control{{ $errors->has('ProductName') ? ' is-invalid' : '' }}" id="ProductName"
                                    placeholder="Введите название товара" name="ProductName">
                    @if ($errors->has('ProductName'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('ProductName') }}</strong>
                        </span>
                    @endif
            </div>
            <label>Добавить товар в</label>
            <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="category" name="categoryRadio">
                <label for="inlineRadio1"> Категорию </label>
            </div>
            <div class="radio radio-inline radio-info">
                <input type="radio" id="inlineRadio2" value="subcategory" name="categoryRadio">
                <label for="inlineRadio2"> Подкатегорию </label>
            </div>
            <div class="form-group" id="showCategory">
                <label>Категория</label>
                <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category">
                    <option disabled selected>Выберите категорию</option>
                    @forelse ($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @empty
                        <option>Нет категорий</option>
                    @endforelse
                </select>
                @if ($errors->has('category'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group" id="showSubcategory">
                <label>Подкатегория</label>
                <select class="form-control{{ $errors->has('subcategory') ? ' is-invalid' : '' }}" name="subcategory">
                    <option disabled selected>Выберите подкатегорию</option>
                    @forelse ($subcategory as $subcat)
                        <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                    @empty
                        <option>Нет подкатегорий</option>
                    @endforelse
                </select>
                @if ($errors->has('subcategory'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('subcategory') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Цена</label>
                <input type="number" name="Price" placeholder="Введите цену" class="form-control{{ $errors->has('Price') ? ' is-invalid' : '' }}">
                <span class="font-13 text-muted">За 1 единицу товара</span>
                @if ($errors->has('Price'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('Price') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Описание товара</label>
                <textarea name="Description" class="form-control{{ $errors->has('Description') ? ' is-invalid' : '' }}"></textarea>
                @if ($errors->has('Description'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('Description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Фотографии</label><br>
                <span>Вы можете загрузить одновременно несколько фотографий</span>
                <input type="file" multiple class="dropify" name="photos"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-success" id="sub" value="Добавить">	
            </div>
        </div>
            
        </div>
            
        </div>
    </div>
</div>--> <!-- end row -->
@endsection
