<?php

namespace App\Repositories;

use App\AcademicClass;

class AcademicClassRepository implements Repository
{
    public function create(array $data)
    {
        $academicClass = new AcademicClass;
        $class->fill($data);
        AcademicClass::create($class);
    }

    public function read(int $id)
    {
        return AcademicClass::find($id);
    }

    public function update(int $id, array $data)
    {
        $academicClass = $this->read($id);
        $academicClass->fill($data);
        $academicClass->save();
    }

    public function delete(int $id)
    {
        $academicClass = $this->read($id);
        $academicClass->delete();
    }

    public function all()
    {
        return AcademicClass::all();
    }
}