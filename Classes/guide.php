<?php
include './../Config/config.php';
class Guide extends Utilisateur
{
    private $approved;

    public function __construct( $nom = "", $email = "", $role = "", $MotPasseHash = "", $approved = "")
    {
        parent::__construct( $nom, $email, $role, $MotPasseHash);
        $this->approved = $approved;
    }
    public function approve($email)
    {
        $pdo = new Database();
        $sql = 'SELECT * FROM utilisateur WHERE email = :email';
        $pdo->query($sql);
        $pdo->bind(':email', $email);
        $pdo->execute();
        if ($pdo->rowCount() == 1) {
            $result = $pdo->single();
            if ($result->role = 'guide' && $result->approved == 0) {
                $sql = 'UPDATE utilisateur SET approved = 1 WHERE email = :email';
                $pdo->query($sql);
                $pdo->bind(':email', $email);
            } else {
                return null;
            }
        }
    }
}

