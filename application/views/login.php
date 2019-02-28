<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="<?= base_url()?>assets/css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
    <div class="card" style="width:40%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
        <div class="card-body">
            <form action="<?=base_url('admin/user/login/kirim')?>" method="post">
            <h4 align="center">Login</h4>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <input type="submit" class="btn btn-primary form-control" value="Login">
            </form>
        </div>
    </div>

    
<!-- Bootstrap core JavaScript -->
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <!-- Menu Toggle Script -->
</body>
</html>