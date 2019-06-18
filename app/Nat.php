<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nat extends Model
{
    protected $fillable=['nationalityDesc','active','remark'];
    protected $primaryKey='nationalityId';

   protected $table="datatables_data";
}
