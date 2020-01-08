<?php

namespace App\Repositories;

use App\Center;

class CenterRepository implements Repository
{
    public function create(array $data)
    {
        $center = new Center;
        $center->fill($data);
        Center::create($center); 
    } 

    public function read(int $id)
    {
        return Center::find($id);
    }

    public function update(int $id, array $data)
    {
        $center = $this->read($id);
        $center->fill($data);
        $center->save();
    }

    public function delete(int $id)
    {
        $center = $this->read($id);
        $center->delete();
    }

    public function all()
    {
        return Center::all();
    }
}