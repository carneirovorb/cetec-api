<?php

namespace App\Repositories;

use App\SchoolSemester;

class SchoolSemesterRepository implements Repository
{
    public function create(array $data)
    {
        $schoolSemester = new SchoolSemester;
        $schoolSemester->fill($data);
        SchoolSemester::create($SchoolSemester);
    }

    public function read(int $id)
    {
        return SchoolSemester::find($id);
    }

    public function update(int $id, array $data)
    {
        $schoolSemester = $this->read($id);
        $schoolSemester->fill($data);
        $schoolSemester->save();
    }

    public function delete(int $id)
    {
        $schoolSemester = $this->read($id);
        $schoolSemester->delete();
    }

    public function all()
    {
        return SchoolSemester::all();
    }
}