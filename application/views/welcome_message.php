<?php $this->load->view('header')?>

			<div class="card" style="margin-top:2%;">
				<div class="card-header">
					<h4>Input Buku</h4>
				</div>
				<div class="card-body">
					<a href="<?= base_url('admin/buku/tambah')?>" class="btn btn-primary" style="margin-bottom:2%">Tambah Buku</a>
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>ID Buku</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Penerbit</th>
								<th>Tahun</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($record->result() as $r):?>
							<tr>
								<td><?=$r->id_buku?></td>
								<td><?=$r->judul?></td>
								<td><?=$r->penulis?></td>
								<td><?=$r->penerbit?></td>
								<td><?=$r->tahun?></td>
								<td width="15%">
									<a href="<?= base_url('admin/buku/edit/'.$r->id_buku)?>" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a>
									<a href="<?= base_url('admin/buku/hapus/'.$r->id_buku)?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
								<th>ID Buku</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Penerbit</th>
								<th>Tahun</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
<?php $this->load->view('footer')?>