<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<?php
  
		      if($this->session->flashdata('pesan') == true){
		        echo '<div class="alert alert-success" role="alert"> Data berhasil Ditambahkan</div>';
		      }
		      if($this->session->flashdata('pesan_create') == true){
		        if($_SESSION['pesan_create'] == 1){
		          echo '<div class="alert alert-success" role="alert"> Tambah data berhasil</div>';
		        }else{
		          echo '<div class="alert alert-danger" role="alert"> Tambah data gagal</div>';
		        }
		        
		      }

		    ?>
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title"><?=$sub_title;?></h3>
				</div>
				
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($show as $key => $data) {
								?>
								<tr>
									<td><?=$key+1;?></td>
									<td><?=$data->nama_kategori;?></td>
									<td>
										<a href="#" class="btn btn-xs btn-primary">Detail</a>
<a href="<?=site_url('kategori/edit/'.$data->id_kategori);?>" class="btn btn-xs btn-warning">Edit</a>
<a href="<?=site_url('kategori/soft_delete/'.$data->id_kategori);?>" class="btn btn-xs btn-danger">Hapus</a>
									</td>
								</tr>
								<?php 
								} 
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Kategori</th>
									<th>Aksi</th>
								</tr>
							</tfoot>  

						</table>		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>