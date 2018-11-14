@extends('layouts.admin')

@section('content')

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Заказ №{{$order->id}}
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white">
                    <li>
                        <a class="nav-link " href="/order/all"><i class="icon icon-list"></i>Все заказы</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
        
        <div class="invoice white shadow">
           

           <div class="p-5">
<!-- title row -->
<div class="row">
       <div class="col-12">
           
             <div class="float-left">
                 
                   <h4>Заказ {{$order->id}}</h4><br>
                   <table>
                       <tr>
                           <td class="font-weight-normal">Дата заказа:</td>
                           <td>{{$order->created_at}}</td>
                       </tr>
                      
                           <tr>
                                   <td class="font-weight-normal">Payment Due: &nbsp;  &nbsp; &nbsp;</td>
                                   <td> 2/22/2014</td>
                               </tr>
                               <tr>
                                       <td class="font-weight-normal">Account:</td>
                                       <td>968-34567</td>
                                   </tr>
                   </table>
          
             </div>
       
       </div>
       <!-- /.col -->
     </div>
     
                 <!-- info row -->
           <div class="row my-3 ">
                   <div class="col-sm-4">
                     <strong>Покупатель</strong>
                     <address>
                       <strong>{{$order->user->middlename}} {{$order->user->lastname}}</strong><br>
                       {{$order->user->address}}<br>
                       Телефон: {{$order->user->phone}}<br>
                       Почта: {{$order->user->email}}
                     </address>
                   </div>
                   
                 </div>
                 <!-- /.row -->
           
                 <!-- Table row -->
                 <div class="row my-3">
                   <div class="col-12 table-responsive">
                     <table class="table table-striped">
                       <thead>
                       <tr>
                         
                         <th>Название</th>
                         <th>Артикуль</th>
                         <th>Описание</th>
                         <th>Количество</th>
                         <th>Цена</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach ($order->productOrder as $productList)
                       <tr class="singleProduct">
                         
                         <td>{{$productList->product->name}}</td>
                         <td>{{$productList->product->vendorcode}}</td>
                         <td>{{$productList->product->description}}</td>
                         <td class="countProduct">{{$productList->count()}}</td>
                         <td class="priceProduct">{{$productList->product->price}}</td>
                       </tr>
                      @endforeach
                       </tbody>
                     </table>
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
           
                 <div class="row">
                  
                   <!-- /.col -->
                   <div class="col-6">
                     <p class="lead">Amount Due 2/22/2014</p>
           
                     <div class="table-responsive">
                       <table class="table">
                         <tbody>
                        <tr>
                           <th style="width:50%">Цена за товары</th>
                           <td id="totalPriceProduct"></td>
                         </tr>
                         <tr>
                           <th>Tax (9.3%)</th>
                           <td>$10.34</td>
                         </tr>
                         <tr>
                           <th>Shipping:</th>
                           <td>$5.80</td>
                         </tr>
                         <tr>
                           <th>Total:</th>
                           <td>$265.24</td>
                         </tr>
                       </tbody></table>
                     </div>
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
           
                 

           </div>
         
         </div>
         </div>
                
            
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

        var sum = 0;

        var proizv = 0;

        $(".singleProduct").each(function() {

            var priceProduct = parseInt($(this).find('.priceProduct').text());

            var countProduct = parseInt($(this).find('.countProduct').text());

            proiz = priceProduct * countProduct;

            sum += proiz;

        });

        $("#totalPriceProduct").text(sum);

    })
</script>

@endsection
