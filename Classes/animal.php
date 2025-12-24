<?php
include './Config/config.php';
class Animal
{
    private Database $pdo;
    private $nom;
    private $espece;
    private $alimentation;
    private $image;
    private $paysOrigine;
    private $descriptionCourte;
    private $id_habitat;

    public function __construct($nom, $espece, $alimentation, $image, $paysOrigine, $descriptionCourte, $id_habitat)
    {
        $this->nom = $nom;
        $this->espece = $espece;
        $this->alimentation = $alimentation;
        $this->image = $image;
        $this->paysOrigine = $paysOrigine;
        $this->descriptionCourte = $descriptionCourte;
        $this->id_habitat = $id_habitat;
    }

    public function getAnimals(Database $pdo)
    {
        $sql = 'SELECT a.*, h.nom FROM animal a LEFT JOIN habitat h ON a.id_habitat = h.id_habitat';
        $this->pdo = $pdo;
        $pdo->query($sql);
        $pdo->execute();
        if ($pdo->rowCount() > 0) {
            $result = $pdo->get();
            return $result;
        } else {
            return null;
        }
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setEspece($espece)
    {
        $this->espece = $espece;
    }

    public function setAlimentation($alimentation)
    {
        $this->alimentation = $alimentation;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setPaysOrigin($paysOrigine)
    {
        $this->paysOrigine = $paysOrigine;
    }

    public function setDescription($descriptionCourte)
    {
        $this->descriptionCourte = $descriptionCourte;
    }

    public function setIdHabitat($id_habitat)
    {
        $this->id_habitat = $id_habitat;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getEspece()
    {
        return $this->espece;
    }
    public function getAlimentation()
    {
        return $this->alimentation;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getPaysOrigin()
    {
        return $this->paysOrigine;
    }
    public function getDescription()
    {
        return $this->descriptionCourte;
    }
    public function getIdHabitat()
    {
        return $this->id_habitat;
    }
}
