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
                <a class="nav-link" href="">Editar Creature</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <form class="form-horizontal" method="post" action="../../controllers/creature/editController.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="<?php echo $creature->getName(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $creature->getDescription(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="avatar" class="col-sm-2 control-label">Avatar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Avatar" value="<?php echo $creature->getAvatar(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="atackPower" class="col-sm-2 control-label">Attack Power</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="attackPower" name="attackPower" placeholder="Attack Power" value="<?php echo $creature->getAttackPower(); ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="lifeLevel" class="col-sm-2 control-label">Life Level</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lifeLevel" name="lifeLevel" placeholder="Life Level" value="<?php echo $creature->getLifeLevel(); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="weapon" class="col-sm-2 control-label">Weapon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="weapon" name="weapon" placeholder="Weapon" value="<?php echo $creature->getWeapon(); ?>">
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $creature->getIdCreature(); ?>">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Editar Creature</button>
            </div>
        </div>
    </form>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; A. F. 2017</p>
            </div>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>
