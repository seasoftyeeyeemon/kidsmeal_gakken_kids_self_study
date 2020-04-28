<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cyouri;
use App\Ryouri1;
use App\Ryouri2;
use App\SettingDish;
use Illuminate\Support\Facades\Request;
use DB;

class SelfStudyController extends Controller
{
  public function cooking_challenge()
  {
    $now =now();
    $dayOfWeek = request()->query('dayOfWeek', $now->dayOfWeek);

    if($dayOfWeek < 1) {
      $dayOfWeek = 1;
    } else if($dayOfWeek > 5) {
      $dayOfWeek = 5;
    }
    
    $date = $now->copy()->weekday($dayOfWeek);
    $menu=Null;
    // $menu = DB::table('choose_menu')->where('date', $date->format('Y-m-d'))->first();
    $menu =SettingDish::getDish($date->format('Y-m-d'));
    if(!$menu) {
      abort(404);
    }

    $ryouri_id = $menu->ryouri_id;
    $ryouri_video = Ryouri1::getRyouri($ryouri_id);
    $ryouri_2_ids = Ryouri2::getRyouri2($ryouri_id);
    $instructions = Cyouri::getInstructions($ryouri_id);
    $currentDay = $this->getCurrentDay();
    return view('self_study.cooking_challenge.20200421_challenge',
        compact(
          'ryouri_video',
          'ryouri_2_ids',
          'instructions',
          'currentDay',
          'dayOfWeek'
        )
    );
  }

  public function getCurrentDay()
  {
    return (new \Datetime())->format('D');
  }

  public function educe_food_edu()
  {
    $now = now();
    $dayOfWeek = request()->query('dayOfWeek', $now->dayOfWeek);

    if($dayOfWeek < 1) {
      $dayOfWeek = 1;
    } else if($dayOfWeek > 5) {
      $dayOfWeek = 5;
    }
    
    $date = $now->copy()->weekday($dayOfWeek);
    $currentDay = $this->getCurrentDay();
    $article = Article::getTodayArticle($date->format('Y-m-d'));

    return view('self_study.educe_food_edu.20200421_edu', compact('article','currentDay','dayOfWeek'));
  }

  public function show(Request $request)
  {
    $day = $request->day;
    // return
  }
}
