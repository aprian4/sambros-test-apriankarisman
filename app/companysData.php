<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companysData extends Model
{
    //
    protected $table = "companys_datas";
 
    protected $fillable = ['name','phone','address','logo','pics'];
}
