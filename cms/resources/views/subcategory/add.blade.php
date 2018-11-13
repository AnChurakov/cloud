@extends('layouts.admin')

@section('content')

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Подкатегории
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link " href="/subcategory/all"><i class="icon icon-list"></i>Все подкатегории</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="/subcategory/add"><i
                                class="icon icon-plus-circle"></i>Добавить новую подкатегорию</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="card">
                            <div class="card-header white">
                                <strong>Добавление новой подкатегории</strong>
                            </div>
                            <div class="card-body b-b">
                                <form action="create" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Название</label>
                                            <input type="text" name="name" class="form-control" id="validationCustom01"
                                                placeholder="Введите название подкатегории"  required>
                                                 @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Категория</label>
                                            <select name="CategoryId" class="form-control">
                                                <option selected disabled>Выберите категорию</option>
                                                @foreach ($categories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="productDetails">Описание подкатегории</label>
                                        <textarea name="desc" class="form-control p-t-40 editor" id="productDetails"
                                                placeholder="Краткое описание подкатегории (необязательно)" rows="17"></textarea>
                                        
                                    </div>
                                    <input class="btn btn-primary mt-4" type="submit" value="Добавить подкатегорию">

                                </form> 
                            </div>  
                        </div>
                    </div>
                   
                </div>
            
        </div>
    </div>
</div>


<!--<div class="row">
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
</div>-->
@endsection
