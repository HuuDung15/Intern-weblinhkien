@extends('admin_layout')
@section('admin_content')


<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê mã giảm giá
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
                  
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Search</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">


    	<?php

		$message = Session::get('message');
		if($message){
			echo '<span class="text-alert">'.$message.'</span>';
			Session::put('message',null);
		}

		?>


      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên mã giảm giá</th>
            <th>Mã giảm giá</th>
            <th>Số lượng mã</th>
            <th>Điều kiện giảm</th>
            <th>Số lượng giảm</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

        	@foreach($coupon as $key => $cou)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>


            <td>{{ $cou->coupon_name }}</td>
            <td>{{ $cou->coupon_code }}</td>
            <td>{{ $cou->coupon_time }}</td>
            

            <td>
                <span class="text-ellipsis">
              
                  <?php

                    if($cou->coupon_condition==1){

                  ?>
                      Giảm theo phần trăm
                  <?php
                    }else{
                  ?>
                      Giảm theo tiền
                  <?php
                    }
                  ?>
                </span>
            </td>


            <td>
                <span class="text-ellipsis">
              
                  <?php

                    if($cou->coupon_condition==1){

                  ?>
                      Giảm {{$cou->coupon_number}}%
                  <?php
                    }else{
                  ?>
                      Giảm ${{$cou->coupon_number}}
                  <?php
                    }
                  ?>
                </span>
            </td>
            


            <td>
              
              <a onclick="return confirm('Bạn chắc chắn muốn xóa mã này?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>



          </tr>
          

          @endforeach

        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination">
            
            <li>{!!$coupon->links()!!}</li>
            
            
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>


@endsection