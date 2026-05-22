<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        return "This is INDEX (All data show)";
    }

    public function create()
    {
        return "This is CREATE (Form page)";
    }

    public function store()
    {
        return "This is STORE (Data saved)";
    }

    public function show($id)
    {
        return "This is SHOW for ID: " . $id;
    }

    public function edit($id)
    {
        return "This is EDIT for ID: " . $id;
    }

    public function update($id)
    {
        return "This is UPDATE for ID: " . $id;
    }

    public function destroy($id)
    {
        return "This is DELETE for ID: " . $id;
    }
}