<?php
    class inscription
    {
        private $nom;
        private $email;
        private $role;

        public function __construct($nom, $email, $role)
        {
            $this->nom = $nom;
            $this->email = $email;
            $this->role = $role;
        }
        public function setName($nom){
            $this->nom = $nom;
        }
        public function setRole($role){
            $this->role = $role;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function validateForm(){
            $errors = [];
            if (empty($this->nom) || !preg_match('/^[a-zA-Z\s]+$/', $this->nom)) {
                $errors['nom'] = 'Name must contains letters and spaces and not empty';
            }
            if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email format';
            }
            $availableRoles = ['Visitor', 'guide'];
            if (empty($this->role) || !in_array($this->role, $availableRoles)) {
                $errors['role'] = 'Please select a role';
            }
            return empty($errors) ? true : $errors;
        }
    }