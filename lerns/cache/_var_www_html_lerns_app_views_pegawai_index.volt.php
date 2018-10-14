<html>
 <head>
  <title>Selamat Datang di Website</title>
  <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
 </head>
 <body>
 <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">SIGIT</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="nav navbar-nav">
                 <li><a href="<?= $this->url->get('Home/index') ?>">Home</a></li>
                 <li><a href="<?= $this->url->get('Pegawai/index') ?>" >Crud</a></li>
                  
             </ul>
         </div>
     </div>
 </nav>
  
 
<div class="container-fluid" style="margin-top:100px">
<form>

<h2>Data</h2>
    <td><a href="#" class="btn btn-info" style="float: right">
    <span class="glyphicon glyphicon glyphicon-pencil"></span>
    TAMBAH
    </a>

<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>AKSI</th>
        </tr>
    </thead>

    <tbody>
         <tr>
            <td>1</td>
            <td>Sigit</td>
            <td>Lampung</td>
            <td>085XXXXXX</td>
            <td><a href="#" class="btn btn-info">
            <span class="glyphicon glyphicon glyphicon-pencil"></span>
                Edit
            </a> | <a href="#" class="btn btn-danger">
                <span class="glyphicon glyphicon glyphicon-remove"></span>
                Hapus
            </a></td>  
         </tr>
         <tr>
            <td>2</td>
            <td>Wasis</td>
            <td>Lampung</td>
            <td>085XXXXXX</td>
            <td><a href="#" class="btn btn-info">
            <span class="glyphicon glyphicon glyphicon-pencil"></span>
                Edit
            </a> | <a href="#" class="btn btn-danger">
                <span class="glyphicon glyphicon glyphicon-remove"></span>
                Hapus
            </a></td>             
        </tr>
        <tr>
            <td>3</td>
            <td>Subekti</td>
            <td>Lampung</td>
            <td>085XXXXXX</td>
            <td><a href="#" class="btn btn-info">
            <span class="glyphicon glyphicon glyphicon-pencil"></span>
                Edit
            </a> | <a href="#" class="btn btn-danger">
            <span class="glyphicon glyphicon glyphicon-remove"></span>
                Hapus
            </a></td>
        </tr>

       </tbody>
     </table>
</div>


 </body>
</html>
 
<span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>