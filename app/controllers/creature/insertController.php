<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.


use validations\ValidationsRules;

require_once(dirname(__FILE__) . '/../../../persistance/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../models/Creature.php');
require_once(dirname(__FILE__) . '/../../models/validations/ValidationsRules.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
   createAction();
}
// Función encargada de crear nuevas ofertas
function createAction() {
    // Obtención de los valores del formulario y validación
    $idCreature = ValidationsRules::test_input($_POST["idCreature"]);
    $name = ValidationsRules::test_input($_POST["name"]);
    $description = ValidationsRules::test_input($_POST["description"]);
    $avatar = ValidationsRules::test_input($_POST["avatar"]);
    $attackPower= ValidationsRules::test_input($_POST["attackPower"]);
    $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
    $weapon = ValidationsRules::test_input($_POST["weapon"]);
    // Creación de objeto auxiliar
    $creature = new Creature();
    $creature->setIdCreature($idCreature);
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);

    //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
    $creatureDAO = new CreatureDAO();
    $creatureDAO->insert($creature);
 
    header('Location: ../../../index.php');
}
?>
