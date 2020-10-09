<?php


namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface ModelInterface
{
    public function index();

    public function getPaginated($records);

    public function store(Request $request);

    public function show(Model $model);

    public function update(Request $request, Model $model);

    public function destroy(Model $model);
}