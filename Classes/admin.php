<?php
include './Config/config.php';
include './Classes/animal.php';
class Admin extends Utilisateur
{

    public function __construct( $nom, $email, $role, $MotPasseHash)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->role = $role;
        $this->MotPasseHash = $MotPasseHash;
    }
    
}
