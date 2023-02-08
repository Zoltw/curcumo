<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository {

    public function getUser($email, $state = false): ?User {
        if($state) {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE md5(email) = :email
        ');
        }
        else {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        }
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return null;
        }

        return new User(
            $user['id_user'],
            $user['name'],
            $user['email'],
            $user['password'],
            $user['role']
        );
    }

    public function addUser(User $user) {
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
    }

    public function getAllUsers(): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users
        ');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
                $user['id_user'],
                $user['name'],
                $user['email'],
                $user['password'],
                $user['role']
            );
        }
        return $result;
    }

    public function deleteUser($id_user) {
        $stmt = $this->database->connect()->prepare('
            DELETE FROM public.users WHERE id_user = :id_user
        ');
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->execute();
    }


}