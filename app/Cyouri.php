<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cyouri extends Model
{
    protected $connection ="buono_main";
    protected $table ='t_cyouri';

    public static function getInstructions($ryouri_1_id){
        return self::where('ryouri_id',$ryouri_1_id)->first();
    }
}
