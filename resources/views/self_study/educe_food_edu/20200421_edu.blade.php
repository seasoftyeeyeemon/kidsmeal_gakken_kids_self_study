@extends('layouts.nav')

@section('title')
    <li class="nav-item active">
        <a class="nav-link" href="#">給食クッキング<span class="sr-only">(current)</span></a>
    </li>
@endsection
@section('content')
<div class="container mb-4">
      <div class="row">
        <!-- Days of week -->
        <div class="col-12 mt-2">
          <div class="d-flex justify-content-center w-100">
            <div class="circle">
              @if($currentDay=='Mon')
                <a class="circle-icons"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 1) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 1])}}"
                >月</a>
              @else
              <a class="circle-icons hidden"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 1) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 1])}}"
                >月</a>
              @endif
              @if($currentDay=='Tue')
                <a class="circle-icons"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 2) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 2])}}"
                >火</a>
              @else
              <a class="circle-icons hidden"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 2) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 2])}}"
                >火</a>
              @endif
              @if($currentDay=='Wed')
                <a class="circle-icons"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 3) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 3])}}"
                >水</a>
              @else
              <a class="circle-icons hidden"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 3) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 3])}}"
                >水</a>
              @endif
              @if($currentDay=='Thus')
                <a class="circle-icons"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 4) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 4])}}"
                >木</a>
              @else
              <a class="circle-icons hidden"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 4) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 4])}}"
                >木</a>
              @endif

              @if($currentDay=='Fri')
                <a class="circle-icons"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 5) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 5])}}"
                >金</a>
              @else
              <a class="circle-icons hidden"
                  style="cursor: pointer; text-decoration: none;
                    @if($dayOfWeek == 5) background: #D9CBA0; color: #000; @endif
                  "
                  href="{{route('challenge', ['dayOfWeek' => 5])}}"
                >金</a>
              @endif
            </div>
          </div>
        </div>

        
      </div>
      <div class="row">
        <div class="col-md-12 img-section text-center my-5">
          <img src="https://pro.kids-meal.jp/img/article/{{$article->main_image}}" class="img-fluid w-100" alt="">
        </div>
        <div class="col-md-12 article-section">
          <div class="article-header d-flex justify-content-between border-bottom border-secondary align-items-center mb-5">
            <h4 class="mb-1 educe_article_header">{{$article->title}}</h4>
           <?php
            $year =date('Y',strtotime($article->date));
            $month =date('j',strtotime($article->date));
            $day =date('d',strtotime($article->date));

           ?>
            <span class="article_date">{{$year}}年{{$month}}月{{$day}}日</span>
          </div>
          <div class="article-body">
              {!! $article->content!!}
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
