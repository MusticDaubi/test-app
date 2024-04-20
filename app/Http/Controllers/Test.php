<?php

namespace App\Http\Controllers;
use App\Models\TestModel;
use Illuminate\Http\Request;
class Test extends Controller
{
    public function test(){
        $model = new TestModel();
        dd($model->testCheck());

    }
}
