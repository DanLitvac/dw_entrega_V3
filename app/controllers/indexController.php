<?php
require_once(dirname(__FILE__) . '/../../persistance/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');

function indexAction() {
    $offerDAO = new CreatureDAO();
    return $offerDAO->selectAll();
}
?>