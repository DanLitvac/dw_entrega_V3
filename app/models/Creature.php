<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Criatura
 *
 * @author danul
 */
class Creature {

    private $idCreature;
    public $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;

    public function __construct() {
        
    }
    public function getIdCreature() {
        return $this->idCreature;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setIdCreature($idCreature): void {
        $this->idCreature = $idCreature;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setAvatar($avatar): void {
        $this->avatar = $avatar;
    }

    public function setAttackPower($attackPower): void {
        $this->attackPower = $attackPower;
    }

    public function setLifeLevel($lifeLevel): void {
        $this->lifeLevel = $lifeLevel;
    }

    public function setWeapon($weapon): void {
        $this->weapon = $weapon;
    }

    public function creature2HTML() {
        $result = '<div class="col-md-4">';
        $result .= '<div class="card">';
        $result .= '<img class="card-img-top rounded mx-auto d-block email" src="'.$this->getAvatar().'" alt="Card image cap"></img>';
        $result .= '<div class="card-block">';
        $result .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $result .= '<p class="card-text description">'.$this->getDescription().'</p>';
        $result .= '</div>';
        $result .= '<div class="btn-group card-footer" role="group">';
        $result .= '<a type="button" class="btn btn-secondary" href="/dw_entrega_v3_Dan/app/views/creature/detail.php?id='.$this->getIdCreature().'">Detalles</a>';
        $result .= '<a type="button" class="btn btn-success" href="/dw_entrega_v3_Dan/app/views/creature/edit.php?id='.$this->getIdCreature().'">Modificar</a> ';
        $result .= '<a type="button" class="btn btn-danger" href="/dw_entrega_v3_Dan/app/controllers/creature/deleteController.php?id='.$this->getIdCreature().'">Borrar</a> ';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';

        return $result;
    }


}
