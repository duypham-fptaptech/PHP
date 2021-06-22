<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        return "Create";
    }
    public function getList(){
        return "Get list";
    }
    public function getById(){
        return "Get by Id";
    }
    public function update(){
        return "update";
    }
    public function delete(){
        return "Delete";
    }

}
