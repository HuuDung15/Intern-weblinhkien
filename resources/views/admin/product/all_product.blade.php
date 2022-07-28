@extends('admin_layout')
@section('admin_content')


<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
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
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>

            <th>Hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

        	@foreach($all_product as $key => $pro)

          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>
            	{{ $pro->product_name }}
            </td>
            <td>
              <img src="public/uploads/product/{{ $pro->product_image }}" height="80" width="80">
            </td>
            <td>
              ${{ $pro->product_price }}
            </td>
            <td>
              {{ $pro->product_quantity }}
            </td>
            <td>
              {{ $pro->category_name }}
            </td>
            <td>
              {{ $pro->brand_name }}
            </td>
            <td><span class="text-ellipsis">
            	
            	<?php

            	if($pro->product_status==1){

            	?>
            		 <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
            	<?php
            	}else{
            	?>
            		<a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
            	<?php
            	}


            	?>

            </span></td>


            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>

              <a onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>



          </tr>
          

          @endforeach

        </tbody>
      </table>



      <form action="{{URL::to('/import-product')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="file" name="file_product" accept=".xlsx" required=""><br>
          <input type="submit" value="Import" name="import_csv" class="btn btn-warning">
      </form>
      <form action="{{URL::to('/export-product')}}" method="POST">
          {{ csrf_field() }}
          <input type="submit" value="Export" name="export_csv" class="btn btn-success">
      </form>


    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination">
            
            <li>{!!$all_product->links()!!}</li>
            
            
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>


@endsection