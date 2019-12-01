<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="<?php echo base_url("assets");?>/plugins/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script src="<?php echo base_url("assets");?>/custom.js" referrerpolicy="origin"></script>
<script src="<?php echo base_url("assets");?>/plugins/filemanager/plugin.min.js" referrerpolicy="origin"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<head>
	<meta charset="utf-8">
	<title>Responsive File Manager</title>
</head>
<body>


<div class="container">
    <header class="jumbotron my-4">
      <h1 class="display-3">Responsive File Manager</h1>
      <p class="lead"> Hata ve Önerilerinizi Benimle paylaşarak geliştirmeleri destekleyebilirsiniz.</p>
      <a href="#" class="btn btn-sm btn-outline-danger">Proje Kodlarını İndir</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-8 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
			<form id="fileupload" action="<?php echo base_url();?>" method="post" enctype="multipart/form-data"><textarea rows="8" cols="80"></textarea></form>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-sm btn-outline-primary btn-block">Editor ve Responsive File Manager Codeigniter Kullanıcıları için hazırlandı.</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title text-left">Yardım</h4>
            <p class="card-text text-left">Responsive File Manager'ı projelerinizde kullanmak için benimle iletişime geçebilirsiniz.
			<br>Email: baykalseyhmus@gmail.com <br> Tel: 05534116621</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Nasıl Kullanırım</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>

</body>
</html>



