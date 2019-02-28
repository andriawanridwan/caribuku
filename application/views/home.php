<?php $this->load->view('header')?>
<br>
<div class="card">
    <div class="card-header">
        <h4>Selamat Datang <?= ucwords($this->session->userdata('username'))?></h4>
    </div>
    <div class="card-body">
        <p>Apa Yang sedang anda pikirkan <?= ucwords($this->session->userdata('username'))?>..???</p>
    </div>
</div>


<?php $this->load->view('footer')?>