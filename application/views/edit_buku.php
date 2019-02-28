<?php $this->load->view('header')?>

    <div class="card" style="margin-top:2%;">
        <div class="card-header">
            <h4>Input Buku</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/buku/tambah/kirim')?>" method="post">
            <input type="hidden" name="kd" value="<?= $record->id_buku?>">
                <input type="hidden" name="id_buku" value="<?= $record->id_buku?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">ID Buku</label>
                    <input type="input" class="form-control" name="id_buku" id="exampleFormControlInput1" value="<?= $record->id_buku?>" disabled>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul Buku</label>
                    <input type="input" class="form-control" name="judul" id="exampleFormControlInput1" value="<?= $record->judul?>">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Penulis</label>
                    <input type="input" class="form-control" name="penulis" id="exampleFormControlInput1" value="<?= $record->penulis?>">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Penerbit</label>
                    <input type="input" class="form-control" name="penerbit" id="exampleFormControlInput1" value="<?= $record->penerbit?>">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Tahun Terbit</label>
                    <input type="input" class="form-control" name="tahun" id="exampleFormControlInput1" value="<?= $record->tahun?>">
                </div>
            
        </div>
        <div class="card-footer">
            <a href="<?= base_url('admin/buku')?>" class="btn btn-success">Kembali</a>
            <input type="submit" class="btn btn-primary" value="Simpan" style="float:right">
            </form>
        </div>
    </div>

<?php $this->load->view('footer')?>