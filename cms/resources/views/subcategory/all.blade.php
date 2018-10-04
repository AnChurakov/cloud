@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавление новой категории</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   @foreach ($subcategories as $subcat)
                        {{ $subcat->name }}
                        <a href="delete/{{$subcat->id}}" class="btn btn-danger btn-sm">Удалить</a><br>
                   @endforeach

                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
