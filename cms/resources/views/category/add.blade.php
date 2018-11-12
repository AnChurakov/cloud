@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Добавление новой категории</h4>
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

        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            <strong>Отлично!</strong> Новая категория успешно добавлена
        </div>
        @endif
        
        @if ($errors->any())

        <div class="alert alert-danger" role="alert">
            <strong>Ошибка!</strong> Новая категория не добавлена! Проверьте, вы заполнили все поля или нет
        </div>
        @endif

                <form action="create" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Название</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Введите название категории">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        <label>Краткое описание</label>
                        <textarea name="desc" id="categoryDesc" class="form-control" cols="30" rows="5" placeholder="Введите описание категории"></textarea>
                    </div>
                    <input type="submit" class="btn btn-sm btn-success" id="sub" value="Добавить">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
