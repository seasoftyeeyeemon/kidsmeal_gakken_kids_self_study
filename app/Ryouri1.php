<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ryouri1 extends Model
{
    protected $connection ="buono_main";
    protected $table ='m_ryouri_1';

    
    public static function getRyouri($ryouri_id){
        return self::where('id',$ryouri_id)->first('img_2');
    }

    public static function getDish($ryouri_id){
        dd($ryouri_id);
        return self::where('id',$ryouri_id)->first();
    }
}