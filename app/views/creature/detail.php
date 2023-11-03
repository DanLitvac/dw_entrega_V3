<?php
require_once(dirname(__FILE__) . '/../../../persistance/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RolePlay</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../../../../index.php"><img src="assets/img/small-logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="app/views/insert.php">Agregar una Creature</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="card">
        <img class="card-img-top rounded mx-auto d-block avatar" src='<?php echo $creature->getAvatar() ?>' alt="Card image cap">
        <div class="card-block">
            <h2 class="card-title"> <?php echo $creature->getName() ?></h2>
            <p class="card-text description"> <?php echo $creature->getDescription() ?></p>
        </div>
        <div class="btn-group card-footer" role="group">
            <a type="button" class="btn btn-success" href="edit.php?id=<?php echo $creature->getId() ?>">Modificar</a>
            <a type="button" class="btn btn-danger" href="../../controllers/creature/deleteController.php?id=<?php echo $creature->getIdCreature() ?>">Borrar</a>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; D. L. 2017</p>
            </div>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>
