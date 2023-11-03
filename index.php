
<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/app/controllers/indexController.php');
//Recupero de la BD todos los empleos a través del controlador
$creatures = indexAction();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Artean</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="../../../assets/img/small-logo.png" alt="" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a  class="nav-link " href=#>Logo</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link " href="./app/views/creature/insert.php">Crear Criatura</a>
                    </li>

                </ul>

            </div>
        </nav>
        <!-- Page Content -->
        <div class="container">
            <!-- Heading Row -->
            <div class="row">
                <div class="col-md-8">
                    <img class="img-fluid " src="./assets/images/imgPrincipal.jpg" alt="">
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <h1>Comunidad de usuarios de heroes</h1>
                    <p class="lead">La aventura empieza aqui en tu ordenador. </p>
                        <p class="lead">
                            <a href="user/signup.php" class="btn btn-lg btn-success-outline">Juega Ahora</a>
                        </p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Content Row -->
        <?php
        for ($i = 0; $i < sizeof($creatures); $i+=3) {
            ?>
            <div class="card-group">
                <!--  <div class="row">  -->
                <?php
                for ($j = $i; $j < ($i + 3); $j++) {
                    if (isset($creatures[$j])) {

                        echo $creatures[$j]->creature2HTML();
                    }
                }
                ?>
            </div>
            <!-- /.row -->
            <?php
        }
        ?>
    <!-- /.container -->
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; D. L. 2023</p>
            </div>
        </div>
    </footer>
    <!-- Java Script Boostrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
</body>
</html>













