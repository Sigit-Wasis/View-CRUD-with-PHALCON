<html>
 <head>
  <title>Wolcome to website</title>
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
                 <li><a href="<?= $this->url->get('Crud/index') ?>" >Crud</a></li>
                  
             </ul>
         </div>
     </div>
 </nav>
  

<div class="jumbotron">
    <div class="container-fluid">
        <h1>Selamat Datang</h1>
        <p>
           Jangan salahkan orang ketika kamu kecewa, tapi salahkan dirimu sendiri 
           Karena terlalu berharap sesuatu yang belum pasti.
        </p>
        <p><a href="http://getbootstrap.com/" target="_blank" class="btn btn-success btn-lg">No Click</a></p>
    </div>
</div>
<div class="container-fluid">
     
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Membuat Tampilan CRUD dengan phalcon </p>
            </footer>
        </div>
    </div>
</div>


 </body>
</html>
 
<span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>