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

                   @foreach ($categories as $cat)
                        {{ $cat->name }} <a href="delete/{{$cat->id}}" class='btn btn-sm btn-danger'>Удалить</a><br>
                   @endforeach

                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
