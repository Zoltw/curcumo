<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository {

    public function getUser($email): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return null;
        }

        return new User(
            $user['name'],
            $user['email'],
            $user['password'],
//            $user['id_user']
        );
    }

    public function addUser(User $user) {
        echo "dupaaddUser";
        $db = $this->database->connect();
        $stmt = $db->prepare('
            INSERT INTO users (name, email, password)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getEmail(),
            $user->getPassword()
        ]);

//        $id = $db->lastInsertId();
    }

//    public function getUserDetailsId(User $user): int {
//        $stmt = $this->database->connect()->prepare('
//            SELECT * FROM public.users_details WHERE name = :name
//        ');
//        $name = $user->getName();
//        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//        $stmt->execute();
//
//        $data = $stmt->fetch(PDO::FETCH_ASSOC);
//        return $data['id'];
//    }
}