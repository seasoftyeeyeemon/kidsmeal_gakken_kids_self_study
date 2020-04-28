<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shokuzai extends Model
{
    protected $connection ="buono_main";
    protected $table ='m_syokuzai';

    public static function getShokuzaiName($shokuzai_id){
        return self::where('id',$shokuzai_id)->first();
    }
}
