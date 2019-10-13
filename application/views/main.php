
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
<!--            <li class="nav-item d-none d-sm-inline-block">-->
<!--                <a href="index3.html" class="nav-link">Home</a>-->
<!--            </li>-->
<!--            <li class="nav-item d-none d-sm-inline-block">-->
<!--                <a href="#" class="nav-link">Contact</a>-->
<!--            </li>-->
        </ul>

        <!-- SEARCH FORM -->
<!--        <form class="form-inline ml-3">-->
<!--            <div class="input-group input-group-sm">-->
<!--                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
<!--                <div class="input-group-append">-->
<!--                    <button class="btn btn-navbar" type="submit">-->
<!--                        <i class="fas fa-search"></i>-->
<!--                    </button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?=base_url()?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?=$_SESSION['user']?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Administrar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url()?>Welcome/logout" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                                Salir

                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Personas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>Main">Home</a></li>
                            <li class="breadcrumb-item active">Control</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Controlar</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-success p-1 m-1" data-toggle="modal" data-target="#modal-default">
                       <i class="fa fa-user"></i> Registrar persona
                    </button>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Registrar persona</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?=base_url()?>Main/insert">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nombre">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Apellidos y nombres">
                                            </div>
                                            <div class="form-group">
                                                <label for="ci">Carnet</label>
                                                <input type="text" class="form-control" name="ci" id="ci" placeholder="Carnet">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Carnet</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query=$this->db->query("SELECT * FROM persona");
                        foreach ($query->result() as $row){
                            echo "
                                <tr>
                                    <td>$row->idpersona</td>
                                    <td>$row->nombre</td>
                                    <td>$row->carnet</td>
                                    <td>$row->fecha</td>
                                    <td>
                                        <button type='button' class='btn btn-success' data-toggle='modal' data-target='#modal-success' data-id='$row->idpersona'>
                                          <i class='fa fa-eye'></i> Registro
                                        </button>
                                    </td>
                                </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Control de personas
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <style>
            .modal-lg{
                min-width: 98%;
            }
        </style>
        <div class="modal fade" id="modal-success">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-success">
                    <div class="modal-header">
                        <h4 class="modal-title">REGISTROS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="<?=base_url()?>Main/subir" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="archivo" class="col-sm-1">Selecionar archivo</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="text" name="tabla" value="REGISTROS" hidden>
                                                <input type="text" name="idpersona" id="codigor" hidden>
                                                <input type="file" required id="archivo" name="archivo">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="nombrer" class="col-sm-2">EL nombre del archivo sera</label>
                                    <div class="col-sm-4">
                                        <input type="text" required class="form-control" id="nombrer" name="nombre" placeholder="Nombre del archivo">
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-power-off"></i> Close</button>
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Subir</button>
                            </div>
                        </form>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Modificados</th>
                                <th>Cancelados</th>
                                <th>Fecha</th>
                                <th style="width: 40px">Ver</th>
                            </tr>
                            </thead>
                            <tbody id="contenidor">
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0-rc.3
        </div>
        <strong>Copyright &copy; 2014-2019  All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar modificaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?=base_url()?>Main/modificar" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="archivo" class="col-sm-3">Selecionar archivo</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="text" name="idpersona" id="idpersonam" hidden>
                                        <input type="text" name="idregistro" id="idregistrom" hidden>
                                        <input type="file" required id="archivo" name="archivo">
                                    </div>
                                </div>
                            </div>
<!--                            <label for="nombrer" class="col-sm-3">El nombre archivo</label>-->
<!--                            <div class="col-sm-9">-->
<!--                                <input type="text" required class="form-control" id="nombrem" name="nombre" placeholder="Nombre del archivo">-->
<!--                            </div>-->

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-power-off"></i> Close</button>
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Subir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar cancelaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?=base_url()?>Main/cancelar" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="archivo" class="col-sm-3">Selecionar archivo</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="text" name="idpersona" id="idpersonac" hidden>
                                        <input type="text" name="idregistro" id="idregistroc" hidden>
                                        <input type="file" required id="archivo" name="archivo">
                                    </div>
                                </div>
                            </div>
                            <!--                            <label for="nombrer" class="col-sm-3">El nombre archivo</label>-->
                            <!--                            <div class="col-sm-9">-->
                            <!--                                <input type="text" required class="form-control" id="nombrem" name="nombre" placeholder="Nombre del archivo">-->
                            <!--                            </div>-->

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-power-off"></i> Close</button>
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Subir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="vermodificaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ver modificaciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?=base_url()?>Main/cancelar" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                          <table class="table" >
                              <thead class="thead-dark">
                              <tr>Archivo</tr>
                              <tr>Ver</tr>
                              </thead>
                          </table>
                            <!--                            <label for="nombrer" class="col-sm-3">El nombre archivo</label>-->
                            <!--                            <div class="col-sm-9">-->
                            <!--                                <input type="text" required class="form-control" id="nombrem" name="nombre" placeholder="Nombre del archivo">-->
                            <!--                            </div>-->

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-power-off"></i> Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>dist/js/demo.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
</body>
</html>
<script !src="">
    /*$('#modal-success').on('show.bs.modal',function (event) {
        var button=(event.relatedTarget);
        var id=button.data('id');
        console.log(id);
    });*/
    var idpersona;
    var nombre;
    var carnet;
        $('#modal-success').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id');
        idpersona=id;
        $('#codigor').val(id);
            $.ajax({
                url:'Main/persona/'+id,
                success:function (e) {
                    // console.log(e);
                    var datos=JSON.parse(e)[0];
                    nombre=datos.nombre;
                    carnet=datos.carnet;
                    $.ajax({
                        url:'Main/consulta/registros/'+id,
                        success:function (e) {
                            // console.log(e);
                            var datos=JSON.parse(e);
                            $('#nombrer').val(nombre+'-'+carnet+'-'+parseInt(datos.length+1));
                            var html='';
                            var con=0;
                            $('#contenidor').html('');
                            datos.forEach(function (e) {
                                con++;
                                html+='<tr><td>'+con+'</td><td>'+e.nombre+'</td><td>'+e.estado+'</td><td>'+
                                    '<button type="button" class="btn btn-warning" data-id="'+e.idregistro+'" data-toggle="modal" data-target="#exampleModalCenter">\n' +
                                    ' <i class="fa fa-plus-circle"></i>' +
                                    '</button>'+
                                    // '<button type="button" class="btn btn-info" data-id="'+e.idregistro+'" data-toggle="modal" data-target="#vermodificaciones">\n' +
                                    // ' <i class="fa fa-eye"></i>' +
                                    // '</button>'+
                                    '</td>' +
                                    '<td>'+
                                    '<button type="button" class="btn btn-danger" data-id="'+e.idregistro+'" data-toggle="modal" data-target="#exampleModalCenter2">\n' +
                                    ' <i class="fa fa-plus-circle"></i>' +
                                    '</button>'+
                                    '</td><td>'+e.fecha+'</td><td><a class="btn btn-primary" href="'+window.location+'/../archivos/REGISTROS/'+e.nombre.replace(new RegExp(' ', 'g'),"_")+'.pdf" target="_blank"><i class="fa fa-file-pdf"></i></a></td></tr>';
                            });
                            $('#contenidor').html(html);
                        }
                    });
                }
            });
    })
    $('#exampleModalCenter').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id');
        var idregistro=id;
        $('#idpersonam').val(idpersona);
        $('#idregistrom').val(idregistro);

    });
    $('#exampleModalCenter2').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id');
        var idregistro=id;
        $('#idpersonac').val(idpersona);
        $('#idregistroc').val(idregistro);

    });
</script>
