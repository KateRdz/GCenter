<?php
     require("connect_db.php");
     

      $query1 = "SELECT nombre,id from gamers";
      $result1 = mysqli_query($link, $query1);
      date_default_timezone_set("America/Monterrey");
   
      $query6 = "SELECT nombre,id, precio  from dulceria";
      $result6 = mysqli_query($link, $query6);



?>

       

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Revoluxion-Dulceria</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span></span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                   
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Cerrar Sesion</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
  <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Inicio</li>
                    <li>
                       
                    </li>
                    <li class="mega-menu mega-menu-sm">
                       
                    </li>
                    <li class="nav-label">LISTADOS</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Consolas</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index2.php">Listado de Consolas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Jugadores</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index3.php">Listado de Jugadores</a></li>
                        </ul>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Rentas</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index4.php">Listado de Rentas</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Enviar Correo a Gamers</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Enviar Correo</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./email-compose.php">Enviar Correo</a></li>
                        </ul>
                    </li>
                    <li>
                        
                   
                    <li class="nav-label">Registrar</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Jugador</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation.php">Registro de Jugador</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Plataforma</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation2.php">Registro de Plataforma</a></li>
                            
                        </ul>
                    </li>

                       <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Consola</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form_validation5.php">Registro de Consola</a></li>
                            
                        </ul>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Renta</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation3.php">Registro de Renta</a></li>
                            
                        </ul>
                    </li>

     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Compra en Dulceria</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validationDulce.php">Registro de Compra</a></li>
                            
                        </ul>
                    </li>



                   

            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="insertarDulce.php" method="POST">
                                       <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Jugador <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-jugado" name="val-jugado">
                                                <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                                    <option value="<?php echo $row1[1];?>" ><?php echo $row1[0];?></option>
                                                    <?php 
                                                        endwhile;?>
                
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Dulceria <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-jugador" name="val-jugador" onchange="obtenerID()">
                                                <?php while($row1 = mysqli_fetch_array($result6)):;?>
                                                    <option value="<?php echo $row1[1];?>" ><?php echo $row1[0];?></option>
                                                    <?php 
                                                        endwhile;?>
                                               
                                                </select>
                                            </div>
                                        </div>

                                           <!-- <div class="form-group row">
                                           <label class="col-lg-4 csol-form-label" for="val-username">Total a pagar: <span></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <?php ?>
                                                <?php ?>
                                                     <input type="text" class="form-control" id="val-monedas" name="val-monedas" placeholder="" value="<?php //echo $row2[0];?>" disabled="true" >
                                                  <?php 
                                              //endwhile;?>
                                            </div>
                                        </div>-->

                                         </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 csol-form-label" for="val-username">Total a pagar:  <span></span>
                                            </label>
                                            <div class="col-lg-6">

                                                <?php 
                                             /*   if(isset($_POST["val-jugador"])){
                                                      $var = $row
                                                      echo $var . "if";
                                                  //    echo "if"
                                                }
                                               

                                                    $query2 = "SELECT monedas from gamers where id=".$var.";";
                                                    echo $var;
                                                    echo $query2;
                                                    $result2 = mysqli_query($link, $query2);
                                                



                                                    */ ?>
      
                                                <?php //while($row2 = mysqli_fetch_array($result2)):;?>

                                                    
                                                     <input type="text" class="form-control" id="val-monedas" name="val-monedas" placeholder="" value="<?php //echo $row2[0];?>" disabled="true" >

                                                  <?php //endwhile;?>

                                            </div>
                                        </div>

<!--
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Jugador <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-jugador" name="val-jugador" onchange="obtenerID()">
                                                <?php// while($row1 = mysqli_fetch_array($result1)):;?>

                                                    <option value="<?php //echo $row1[1];?>" ><?php //echo $row1[0];?></option>
                                                    <?php 
//                                                        endwhile;?>
                                               
                                                </select>
                                            </div>
                                        </div>
    -->                                    


                                                                     
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Pagar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/codigo-formValidation.js"></script>
    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>
    <script src="js/codigoFVD.js"></script>
   <!-- <script src="js/codigoFV2.js"></script>-->



</body>

</html>