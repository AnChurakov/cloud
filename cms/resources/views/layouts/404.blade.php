@extends('layouts.admin')

@section('content')

<div id="app">
<main>
    <div id="primary" class="blue4 p-t-b-100 height-full responsive-phone">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/basic/stones.png" alt="/">
                </div>
                <div class="col-lg-6">
                    <div class="text-white text-center p-t-100">
                        <p class="glow s-256 bolder p-t-b-100">404</p>
                        <p>Something went wrong. The page you are looking for is gone</p>
                        <div class="p-t-b-20"><a href="index.html" class="btn btn-primary btn-lg"><i
                                class="icon icon-arrow_back"></i> Go Back

                            To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>
</div>

@endsection