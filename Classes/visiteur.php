<?php
include './../Config/config.php';

class Visiteur extends Utilisateur
{
    private $isactive;

    public function __construct( $nom, $email, $role, $MotPasseHash, $isactive)
    {
        parent::__construct($nom, $email, $role, $MotPasseHash);
        $this->isactive = $isactive;
    }

    public function changeStatus($email)
    {
        $pdo = new Database();
        $sql = 'SELECT * FROM utilisateur WHERE email = :email';
        $pdo->query($sql);
        $pdo->bind(':email', $email);
        if ($pdo->rowCount() > 0) {
            $result = $pdo->single();
            if ($result->isactive = 1) {
                $sql = 'UPDATE utilisateur SET isactive = 0 WHERE email = :email';
                $pdo->query($sql);
                $pdo->bind(':email', $email);
                $pdo->execute();
            } else {
                $sql = 'UPDATE utilisateur SET isactive = 1 WHERE email = :email';
                $pdo->query($sql);
                $pdo->bind(':email', $email);
                $pdo->execute();
            }
        }
    }
}
