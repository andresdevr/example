<?php


namespace App\Interfaces;

use Illuminate\Http\Request;

interface PermissionInterface
{
    public function index();

    public function getPaginated($records, Request $request);
}
