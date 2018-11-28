<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Tambah Buku</h3>
				</div>
				<div class="box-body">
					<form action="<?=site_url('buku/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
			                <div class="form-group">
			                	<label>Judul Buku</label>
			                	<input type="text" name="judul_buku" class="form-control" value="" placeholder="Masukkan judul buku" required="required">
			                </div>
			                <div class="form-group">
			                	<label>Kategori</label>
			                	<select name="id_kategori" size="1" class="form-control">
			                	<?php 
			                	foreach ($show_kategori as $key => $data_kategori) {
			                		echo '<option value="'.$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';
			                	}
			                	?>             		
			                	</select>
			                </div>
			                <div class="form-group">
			                	<label>Pengarang</label>
			                	<input type="text" name="pengarang" class="form-control" value="" placeholder="Masukkan nama pengarang" required="required">
			                </div>
			            	<div class="form-group">
				                <label>Tahun Terbit</label>
								<!-- <div class="input-group date">
								  <div class="input-group-addon">
								    <i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="datepicker" name="thn_terbit" value="">
								</div> -->
								<input type="number" class="form-control" name="thn_terbit" min="0">
							</div>
			                <div class="form-group">
			                  <label for="exampleInputtext1">Penerbit</label>
			                  <input type="text" name="penerbit" class="form-control" id="exampleInputtext1" placeholder="Penerbit" value="" required>
			                </div>
			                <div class="form-group">
			                  <label>ISBN</label>
			                  <input type="text" name="isbn" class="form-control" id="exampleInputtext1" placeholder="ISBN" value="" required>
			                </div>
			                <div class="form-group">
			                  <label>Jumlah</label>
			                  <input type="number" name="jumlah_buku" class="form-control" placeholder="0" value="" required min="0">
			                </div>
			                <div class="form-group">
			                  <label>Rak</label>
			                  <select name="lokasi" size="1" class="form-control">
			                  	<option value="1">Rak 1</option>
			                  	<option value="2">Rak 2</option>
			                  	<option value="3">Rak 3</option>
			                  	<option value="4">Rak 4</option>
			                  	<option value="5">Rak 5</option>
			                  </select>
			                </div>
						</div>

						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i> Batal</button>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-send"></i> Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>