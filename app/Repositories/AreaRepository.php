<?php

namespace App\Repositories;

use App\Area;

class AreaRepository implements Repository
{
    public function create(array $data)
    {
        $area = new Area;
        $area->fill($data);
        Area::create($area);
    }

    public function read(int $id)
    {
        return Area::find($id);
    }

    public function update(int $id, array $data)
    {
        $area = $this->read($id);
        $area->fill($data);
        $area->save();
    }

    public function delete(int $id)
    {
        $area = $this->read($id);
        $area->delete();
    }

    public function all()
    {
        return Area::all();
    }
}