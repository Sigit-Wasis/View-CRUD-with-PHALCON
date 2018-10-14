{% extends 'template/index.volt' %}
 
{% block content %}
 
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

    <thead>
         <tr>
            <td>1</td>
            <td>Sigit</td>
            <td>Lampung</td>
            <td>083432274354</td>
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
            <td>084331359812</td>
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
            <td>082434567895</td>
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
<div class="container-fluid">
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Membuat Tampilan CRUD dengan phalcon {Sigit wasis subekti} </p>
            </footer>
        </div>
    </div>
</div>
{% endblock %}