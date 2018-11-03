@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Добавление города</h4>
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
                <form action="{{ route('city.update', ['id'=>$city->id]) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Название</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Введите название города" value="{{ $city->name }}">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input type="submit" class="btn btn-sm btn-success" id="sub" value="Сохранить">
                    <a href="#" class="btn btn-sm btn-primary">Отмена</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection