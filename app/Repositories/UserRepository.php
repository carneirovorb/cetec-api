<?php

namespace App\Repositories;

use App\User;

class UserRepository implements Repository
{
    public function create(array $data)
    {
        $user = new User;
        $user->fill($data);
        User::create($user);
    }

    public function read(int $id)
    {
        return User::find($id);
    }

    public function update(int $id, array $data)
    {
        $user = $this->read($id);
        $user->fill($data);
        $user->save();
    }

    public function delete(int $id)
    {
        $user = $this->read($id);
        $user->delete();
    }

    public function all()
    {
        return User::all();
    }
} 