@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавление новой подкатегории</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action='create' method='post'>

                    @csrf

                    Название
                    <input type='text' name='nameProduct' class='form-control'>
                    Описание
                    <textarea class="form-control" name='desc'></textarea>
                    Категория
                    <select class="form-control" name="category">
                    <option selected disabled>Выберите категорию</option>
                    @foreach ($category as $cat)
                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                    @endforeach               

                    </select>
                    Подкатегория
                    <select class="form-control" name="subcategory">
                    <option selected disabled>Выберите подкатегорию</option>
                    @foreach ($subcategory as $subcat)
                        <option value="{{$subcat->id}}">{{ $subcat->name }}</option>
                    @endforeach               

                    </select>

                    <label>Цена</label>
                    <input type="number" name='price' class='form-control' />



                    <input type='submit' class="btn btn-primary" value="Добавить" />

                    </form>

                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
