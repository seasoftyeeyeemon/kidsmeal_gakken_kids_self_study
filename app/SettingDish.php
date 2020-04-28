<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingDish extends Model
{
    protected $connection ="pro";
    protected $table ='choose_menu';

    public static function getDish($date){
        return self::where('date', $date)->first();
    }
}
