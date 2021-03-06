<!DOCTYPE html>
<html>
<head>
    <title>Simple Codeigniter CRUD System</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
    <script src="<?php echo base_url() ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>js/popper.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

    <style type="text/css">
        body { padding-top: 80px; }
    </style>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</head>
<body>
<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-content">
            <a class="navbar-brand" href="#">CODEIGNITER CRUD SYS</a>
            <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
            </ul> -->
            <div class="collapse navbar-collapse justify-content-end" id="nav-content">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
