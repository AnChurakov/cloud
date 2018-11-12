@extends('layouts.admin')

@section('content')

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Все товары
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link active" href="/product/all"><i class="icon icon-list"></i>Все товары</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/product/add"><i
                                class="icon icon-plus-circle"></i>Добавить новый товар</a>
                    </li>
                    <li>
                        <a class="nav-link" href="panel-page-products.html#"><i class="icon icon-trash-can"></i>В корзине</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="row">
                <div class="col-md-12">
                    <div class="card no-b shadow">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <tbody>
                                    <tr class="no-b">
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s1.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-success">Published</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s2.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-success">Published</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s3.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-danger">Pending</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s4.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-success">Published</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s5.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-primary">Sold Out</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s6.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Apple Product</h6>
                                            <small class="text-muted">Mobile Phones</small>
                                        </td>
                                        <td>$250</td>
                                        <td><span class="badge badge-warning">Low Stock</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                        <td>
                                            <a class="btn-fab btn-fab-sm btn-primary shadow text-white"><i class="icon-pencil"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="pt-3" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="panel-page-products.html#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="panel-page-products.html#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="panel-page-products.html#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="panel-page-products.html#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="panel-page-products.html#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection
