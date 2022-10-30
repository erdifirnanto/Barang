@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
	

		<!-- Main content -->
		<section class="content">
		  <div class="row"> 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Deskripsi Barang</h3>
                  <a href="{{route('user.add')}}" style="float:right;" type="button" class="btn btn-success mb-5">Tambah Barang</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table">
						<thead>
							<tr>
                                <th><img src="{{asset('backend/images/foto.png')}}" height="150" width="350"/></th>
							</tr>
                            <tr>
                                <th><h3><b>{{$dataD->Nama_Barang}}</b></h3></th>
                            </tr>
						</thead>
						<tbody>
                            
							<tr>
								<td><b>Deskripsi</b></td>
							</tr>
                            <tr>
                                <td>{{$dataD->Deskripsi}}</td>
                            </tr>
                            <tr>
                                <td> Stok : {{$dataD->Stok}}</td>
                            </tr>
                            <tr>
                                <td><a href="" id="delete"  class="btn btn-success">Buy Now {{$dataD->Harga}}</a></td>
                            </tr>
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<!-- JS -->
<script src="{{asset('backend/assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>