<?php

// it is also known as high cohesion
// it helps to find failures
// A class cannot do many things

/* Bad example */

class UserBadClass
{
    protected function formatResponse($data)
    {
        return [
            "name" => $data->name,
            "phone" => $data->phone,
            "email" => $data->email
        ];
    }
    
    protected function validateUser($user)
    {
        if ($user) return true;
        else throw new UnknownUserException("User does not exist " . $e->getMessage());
    }
    
    protected function fetchUserFromDatabase($userID)
    {
        return DB::table('users')->findOrFail($userID);
    }
}

/* Good example */

class User
{
    private $name, $phone, $email;

    public function __toString()
    {
        return [
            "name" => $this->name,
            "phone" => $this->phone,
            "email" => $this->email
        ];
    }
}

Class Validate {
    protected function validateUser($user)
    {
        if ($user) return true;
        else throw new UnknownUserException("User does not exist " . $e->getMessage());
    }
}

Class UserRepository {
    protected function fetchUserFromDatabase($userID)
    {
        return DB::table('users')->findOrFail($userID);
    }
}