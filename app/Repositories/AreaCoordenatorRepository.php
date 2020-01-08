<?php

namespace App\Repositories;

use App\AreaCoordenator;

class AreaCoordenatorRepository implements Repository
{
    public function create(array $data)
    {
        $areaCoordenator = new AreaCoordenator;
        $areaCoordenator->fill($data);
        AreaCoordenator::create($areaCoordenator);
    }

    public function read(int $id)
    {
        return AreaCoordenator::find($id);
    }

    public function update(int $id, array $data)
    {
        $areaCoordenator = $this->read($id);
        $areaCoordenator->fill($data);
        $areaCoordenator->save();
    }

    public function delete(int $id)
    {
        $areaCoordenator = $this->read($id);
        $areaCoordenator->delete();
    }

    public function all()
    {
        return AreaCoordenator::all(); 
    }
}