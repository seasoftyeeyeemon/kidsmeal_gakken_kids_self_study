<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\ArticleCategory;

class Article extends Model
{
    protected $dateFormat = 'U';
    
    public static function getTodayArticle($date)
    {
        return DB::table('articles')
                ->where('published', 1)
                ->where('deleted_flag', 0)
                ->where('date',$date)
                ->first();
    }
    
    public function getRelateArticles()
    {
        $limit = 5;
        return DB::table('articles')
                ->where('published', 1)
                ->where('deleted_flag', 0)
                ->where('id', '<>', $this->id)
                ->orderBy('date', 'DESC')
                ->limit($limit)
                ->inRandomOrder()
                ->get();
    }
    
	
    
  
}
