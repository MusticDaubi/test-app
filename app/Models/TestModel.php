<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TestModel extends Model
{
    public function testCheck(){
        return DB::table('sessions')->get();/*->getTableListing();*///("sessions")->get();
    }

}
