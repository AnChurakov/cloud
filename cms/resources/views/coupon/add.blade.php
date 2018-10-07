@extends('layouts.admin')

@section('content')
<div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Добавление нового промокода</h4>

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
							
						<form action="create" method="post">
                        @csrf
							<div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="couponName"
                                            placeholder="Введите название промокода">									
	
                            </div>
							
							<div class="form-group">
                             <label>Значение для промокода</label>
                                <input type="text" name="procentCoupon" placeholder="" data-a-sign="%" data-p-sign="s" class="form-control autonumber">
                                <span class="font-13 text-muted">Введите процент, который будет присвоен прокомоду для использования при заказе</span>
                             </div>							

							
							<input type="submit" class="btn btn-sm btn-success" id="sub" value="Добавить">	
                        </form>
							
						</div>
                          
                        </div>
                    </div>
                </div> 
				
@endsection
