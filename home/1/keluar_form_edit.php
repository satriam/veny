<?php

include "../koneksi.php";

//error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
$id_kry = $_GET['id'];

echo "$id_kry";

$querykry = mysqli_query($konek, "SELECT * FROM pengeluaran WHERE id_pengeluaran ='$id_kry'");
if($querykry == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($pengeluaran = mysqli_fetch_array($querykry)){

?>
	<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Barang Masuk</h4>
			</div>
			<div class="modal-body">
				<form action="masuk_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label>ID Transaksi</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
							<input name="id_penerimaan" type="text" class="form-control" placeholder="ID Transaksi"/>
						</div>
					</div>
					<div class="form-group">
						<label>ID Pelanggan</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input name="id_pelanggan" type="text" class="form-control" placeholder="ID Pelanggan"/>
							</div>
					</div>
					<div class="form-group">
								<label>Pilih Layanan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<select name="hitung" class="form-control">
											<?php
												
												$querylayanan = mysqli_query($konek, "SELECT * FROM layanan");
												if($querylayanan == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($layanan = mysqli_fetch_array($querylayanan)){
													echo "<option value='$layanan[id_layanan]'>$jurusan[nama_layanan]</option>";
												}
											?>
										</select>
									</div>
							</div>
						<div class="form-group">
							<label>Berat (Kg)</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input name="berat" type="text" class="form-control" placeholder="Berat Barang"/>
							</div>
						</div>
						<div class="form-group">
							<label>Harga</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
									<input name="harga" type="text" class="form-control" placeholder="Harga Barang"/>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Masuk</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input class="input--style-4" type="date" name="tgl_masuk">
							</div>
						</div>
						<div class="form-group">
							<label>Estimasi</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input class="input--style-4" type="date" name="estimasi">
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
									<input name="alamat_pelanggan" type="text" class="form-control" placeholder="Alamat"/>
							</div>
						</div>
						<div class="form-group">
							<label>Total Transaksi</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
									<input name="tot_harga" type="text" class="form-control" placeholder="Alamat"/>
							</div>
						</div>
						<div class="form-group">
							<label>Status</label>
							<div class="p-t-10">
                                <label class="radio-container m-r-45">Proses
                                    <input type="radio" checked="checked" name="status" value="proses">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Selesai
                                    <input type="radio" name="proses" value="selesai">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-id-card"></i>
								</div>
								<input name="keterangan" type="text" class="form-control" placeholder="Keterangan"/>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-success" type="submit">
								Add
							</button>
							<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
								Cancel
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
			}

?>