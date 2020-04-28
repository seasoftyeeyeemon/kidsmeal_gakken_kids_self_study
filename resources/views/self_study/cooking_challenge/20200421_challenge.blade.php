@extends('layouts.nav')
@section('title')
        <li class="nav-item active">
            <a class="nav-link" href="#">給食クッキング<span class="sr-only">(current)</span></a>
        </li>
@endsection
@section('content')
<?php
  use App\Shokuzai;
  use App\Syokuzai_Hyouki;
?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 img-section text-center my-5">
          <div class="circle">
            <a class="circle-icons"
              style="cursor: pointer; text-decoration: none;
                @if($dayOfWeek == 1) background: #D9CBA0; color: #000; @endif
              "
              href="{{route('challenge', ['dayOfWeek' => 1])}}"
            >月</a>
            <a class="circle-icons"
              style="cursor: pointer; text-decoration: none;
                @if($dayOfWeek == 2) background: #D9CBA0; color: #000; @endif
              "
              href="{{route('challenge', ['dayOfWeek' => 2])}}"
            >火</a>
            <a class="circle-icons"
              style="cursor: pointer; text-decoration: none;
                @if($dayOfWeek == 3) background: #D9CBA0; color: #000; @endif
              "
              href="{{route('challenge', ['dayOfWeek' => 3])}}"
            >水</a>
            <a class="circle-icons" 
              style="cursor: pointer; text-decoration: none;
                @if($dayOfWeek == 4) background: #D9CBA0; color: #000; @endif
              "
              href="{{route('challenge', ['dayOfWeek' => 4])}}"
            >木</a>
            <a class="circle-icons"
              style="cursor: pointer; text-decoration: none;
                @if($dayOfWeek == 5) background: #D9CBA0; color: #000; @endif
              "
              href="{{route('challenge', ['dayOfWeek' => 5])}}"
            >金</a>
          </div>
        　<div class="youtube-wrapper">
            <iframe src="{{$ryouri_video->img_2}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-12 article-section">
          <div class="article-header d-flex justify-content-between border-bottom border-secondary mb-4">
            <h4 class="mb-1">ピザトースト</h4>
          </div>
          <div class="container-fluid mb-3">
            <div class="row justify-content-between">
              <div class="col-sm-5">
                <h5 class="cook_instruction_header"><span class="border_left_style"></span> 材料（1食分）<span class="underline_style"></span></h5>
                <ul class="list-unstyled list_fs">
                  @foreach($ryouri_2_ids as $value)
                    @php
                    $shokuzai_name =Shokuzai::getShokuzaiName($value->shokuzai_id);
                    $shokuzai_hyouki =Syokuzai_Hyouki::getSyokuzaiName($value->shokuzai_id);
                    @endphp
                    <li class="d-flex justify-content-between">
                    {{$shokuzai_name->syokuzai_name_6}}<span>{{$value->siyou_ryou}}g</span></li>
                  @endforeach
                </ul>
              </div>
              <div class="col-sm-5">
                <h5 class="cook_instruction_header"><span class="border_left_style"></span> 作り方<span class="underline_style"></span></h5>
                <ul class="list-unstyled list_fs">
                  @if(!empty($instructions))
                    @for ($i = 6; $i < 60; $i++)
                      @php
                      $tejyun = 'tejyun_'.$i;
                      @endphp
                      @if(!is_null($instructions->$tejyun))
                        @php
                        $data []=[$i];
                        @endphp
                        <li class="d-flex">{{count($data)}}. <span class="ml-2">{{$instructions->$tejyun}}</span></li>
                      @endif
                    @endfor
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

<script>
  jQuery(document).ready(function($) {
    function showEdit(){

    }
  });
</script>