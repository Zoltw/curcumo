<?php

class User {
    private $id_user;
    private string $name;
    private string $email;
    private string $password;
    private int $role;

    public function __construct(int $id_user, string $name, string $email, string $password, int $role) {
        $this->id_user = $id_user;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId() {
        return $this->id_user;
    }

    public function setId(int $id_user) {
        $this->$id_user = $id_user;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getRole(): int {
        return $this->role;
    }

    public function setRole(int $role) {
        $this->role = $role;
    }


}