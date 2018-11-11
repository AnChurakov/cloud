@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Добавление новой подкатегории</h4>
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
    <div class="col-7">
        <div class="card-box">
            <div class="col-12">
                <form action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Название</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Введите название подкатегории">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Категория</label>
                        <select class="form-control{{ $errors->has('CategoryId') ? ' is-invalid' : '' }}" name="CategoryId">
                            <option disabled selected>Выберите категорию</option>
                            @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('CategoryId'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('CategoryId') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Краткое описание</label>
                        <textarea name="desc" id="categoryDesc" class="form-control" cols="30" rows="5" placeholder="Введите описание подкатегории"></textarea>
                    </div>
                    <input type="submit" class="btn btn-sm btn-success" id="sub" value="Добавить">	
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
