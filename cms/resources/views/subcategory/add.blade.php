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

                    <input type='text' name='nameSubcategory' class='form-control'>

                    <select class="form-control" name="category">

                    @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                    @endforeach               

                    </select>


                    <input type='submit' class="btn btn-primary" value="Добавить" />

                    </form>

                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
