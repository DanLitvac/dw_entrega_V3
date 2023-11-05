<?php
require_once(dirname(__FILE__) . '/../../../persistance/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');

if (isset($_GET["id"])) {
    $idCreature = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($idCreature);
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <a class="nav-link" href="../../../index.php">home</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <h2>Detalles de la Criatura</h2>
    <table class="table">
        <tr>
            <th>Nombre:</th>
            <td><?php echo $creature->getName(); ?></td>
        </tr>
        <tr>
            <th>Descripción:</th>
            <td><?php echo $creature->getDescription(); ?></td>
        </tr>
        <tr>
            <th>Avatar:</th>
            <td><?php echo $creature->getAvatar(); ?></td>
        </tr>
        <tr>
            <th>Poder de Ataque:</th>
            <td><?php echo $creature->getAttackPower(); ?></td>
        </tr>
        <tr>
            <th>Nivel de Vida:</th>
            <td><?php echo $creature->getLifeLevel(); ?></td>
        </tr>
        <tr>
            <th>Arma:</th>
            <td><?php echo $creature->getWeapon(); ?></td>
        </tr>
    </table>
    <a href="edit.php?id=<?php echo $creature->getIdCreature(); ?>" class="btn btn-success">Modificar</a>
    <a href="../../controllers/creature/deleteController.php?id=<?php echo $creature->getIdCreature(); ?>" class="btn btn-danger">Borrar</a>
</div>
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; D. L. 2023</p>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>
