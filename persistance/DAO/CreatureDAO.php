<?php
require_once(dirname(__FILE__) . '/../conf/PersistentManager.php');
class CreatureDAO{

    const CREATURE_TABLE = 'creature';
    private $conn = null;
    public function __construct(){
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    public function selectAll(){
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $creatures = array();

        while ($creatureDB = mysqli_fetch_array($result)) {

            $creature = new Creature();
            $creature->setIdCreature($creatureDB["idCreature"]);
            $creature->setName($creatureDB["name"]);
            $creature->setDescription($creatureDB["description"]);
            $creature->setAvatar($creatureDB["avatar"]);
            $creature->setAttackPower($creatureDB["atackPower"]);
            $creature->setLifeLevel($creatureDB["lifeLevel"]);
            $creature->setWeapon($creatureDB["weapon"]);
            array_push($creatures, $creature);
        }
        return $creatures;
    }

    public function insert($creature) {
        $query = "INSERT INTO " . OfferDAO::OFFER_TABLE .
            " (idCreature , name , description ,avatar , attackPower , lifeLevel ,weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);

        $name  = $creature->getName();
        $description =$creature->getDescription();
        $avatar =$creature->getAvatar();
        $attackPower =$creature->getAttackPower();
        $lifeLevel =$creature->getLifeLevel();
        $weapon = $creature->getWeapon();


        mysqli_stmt_bind_param($stmt, 'isssiis', $idCreature , $name , $description ,$avatar , $attackPower , $lifeLevel ,$weapon);
        return $stmt->execute();
    }

    public function selectById($idCreature) {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $idCreature , $name , $description ,$avatar , $attackPower , $lifeLevel ,$weapon);

        $creature = new Creature();
        while (mysqli_stmt_fetch($stmt)) {
            $creature->setIdCreature($idCreature);
            $creature->setName($name);
            $creature->setDescription($description);
            $creature->setAvatar($avatar);
            $creature->setAttackPower($attackPower);
            $creature->setLifeLevel($lifeLevel);
            $creature->setWeapon($weapon);

        }

        return $creature;
    }


    public function update($creature) {
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLE .
            " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
            . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $idCreature = $creature->getIdCreature();
        $name  = $creature->getName();
        $description =$creature->getDescription();
        $avatar =$creature->getAvatar();
        $attackPower =$creature->getAttackPower();
        $lifeLevel =$creature->getLifeLevel();
        $weapon = $creature->getWeapon();

        mysqli_stmt_bind_param($stmt, 'isssiis', $idCreature , $name , $description ,$avatar , $attackPower , $lifeLevel ,$weapon);
        return $stmt->execute();
    }

    public function delete($idCreature) {
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLE . " WHERE id =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        return $stmt->execute();
    }
}