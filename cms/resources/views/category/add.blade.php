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
							
						<form action="create" method="POST">
                        @csrf
							<div class="form-group">
                             <label>Название</label>
                                <input type="text" class="form-control" name="CategoryName" placeholder="Введите название категории">	
                            </div>
							
							<input type="submit" class="btn btn-sm btn-success" id="sub" value="Добавить">	

							
						    </div>
                        </form>

                        </div>
                    </div>
                </div> <!-- end row -->
				
@endsection
