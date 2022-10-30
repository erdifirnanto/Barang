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
				  <h3 class="box-title">Data Barang</h3>
                  <a href="{{route('user.add')}}" style="float:right;" type="button" class="btn btn-success mb-5">Tambah Barang</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Foto</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>								
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataBarang as $key => $barang)
							<tr>
								<td>{{$key+1}}</td>
								<td><img src="{{asset('backend/images/foto.png')}}" height="150" width="350"></></td>
								<td>{{$barang->Nama_Barang}}</td>
								<td>{{$barang->Harga}}</td>
								<td>{{$barang->Stok}}</td>								
								<td>
                                    <a href="{{route('barang.deskripsi', $barang->id)}}" class="btn btn-info">view</a>
                                    <a href="" id="delete"  class="btn btn-danger">Delete</a>
                                </td>
                            @endforeach
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Foto</th>
								<th>Harga</th>
								<th>Stok</th>
								<th>Aksi</th>						
							</tr>
						</tfoot>
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