<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syokuzai_Hyouki extends Model
{
    protected $connection ="buono_main";
    protected $table ='m_shokuzai_hyouki';

    public static function getSyokuzaiName($syokuzai_id){
        return self::where('syokuzai_id',$syokuzai_id)->first();
    }
}
