@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Добавление товара</h4>

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

        <form action="{{ route('productCreate') }}" method="post" enctype="multipart/form-data">
            @csrf			
            <div class="form-group">
                    <label>Название</label>
                    <input type="text" class="form-control{{ $errors->has('ProductName') ? ' is-invalid' : '' }}" id="ProductName"
                                    placeholder="Введите название товара" name="ProductName">
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
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
                <input type="radio" id="inlineRadio2" value="subcategory" name="subcategoryRadio">
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
</div> <!-- end row -->
@endsection
