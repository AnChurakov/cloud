@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавление новой роли</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action='create' method='post'>

                    @csrf

                    <input type='text' name='nameRole' class='form-control'>

                    <input type='submit' class="btn btn-primary" value="Добавить" />

                    </form>

                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
