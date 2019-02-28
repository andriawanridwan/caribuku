<?php $this->load->view('header')?>

    <div class="card" style="margin-top:2%">
        <div class="card-header">
            <h4>Input Letak Buku</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/rakbuku/tambah')?>" method="post">
                <div class="form-row">
                    
                    <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama_rak" placeholder="Nama Rak">
                        </div>
                    </div>

                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
            </form>
            <br><br>
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
						<thead>
							<tr>
								<th>Nama Rak</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($record->result() as $r):?>
							<tr>
								<td><?=$r->nama_rak?></td>
								<td width="15%">
									<a href="<?= base_url('admin/rakbuku/hapus/'.$r->id_rak)?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
								<th>Nama Rak</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
        </div>
    </div>
<?php $this->load->view('footer')?>