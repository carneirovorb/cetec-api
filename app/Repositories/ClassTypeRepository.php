<?php

namespace App\Repositories;

use App\ClassType;

class ClassTypeRepository implements Repository
{
    public function create(array $data)
    {
        $classType = new ClassType;
        $classType->fill($data);
        ClassType::create($classType);
    }

    public function read(int $id)
    {
        return ClassType::find($id);
    }

    public function update(int $id, array $data)
    {
        $classType = $this->read($id);
        $classType->fill($data);
        $classType->save();
    }

    public function delete(int $id)
    {
        $classType = $this->read($id);
        $classType->delete();
    }

    public function all()
    {
        return ClassType::all(); 
    } 
}