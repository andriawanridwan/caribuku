<?php $this->load->view('header')?>

    <div class="card" style="margin-top:2%">
        <div class="card-header">
            <h4>Input Letak Buku</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/letakbuku/tambah')?>" method="post">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control" name="buku">
                            <option>-- Pilih  Buku --</option>
                            <?php foreach($buku->result() as $r):?>
                                <option value="<?=$r->id_buku?>"><?=$r->judul?></option>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="col">
                        <select class="form-control" name="rak">
                            <option>-- Pilih  Rak --</option>
                            <?php foreach($rak->result() as $r):?>
                                <option value="<?=$r->id_rak?>"><?=$r->nama_rak?></option>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
            </form>
<br><br>
            <!-- ======================================================================================= -->

            <table id="example" class="table table-striped table-bordered" style="width:100%;">
						<thead>
							<tr>
								<th>ID Buku</th>
								<th>Judul</th>
								<th>Nama Rak</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($record->result() as $r):?>
							<tr>
								<td><?=$r->id_buku?></td>
								<td><?=$r->judul?></td>
								<td><?=$r->nama_rak?></td>
								<td width="15%">
									<a href="<?= base_url('admin/letakbuku/hapus/'.$r->id_letakbuku)?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
								<th>ID Buku</th>
								<th>Judul</th>
								<th>Nama Rak</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
        </div>
    </div>
<?php $this->load->view('footer')?>