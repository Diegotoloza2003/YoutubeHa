@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'playvideo')

@section('content')
<link href="../resources/assets/css/video.css" type="text/css" rel="stylesheet">

<div class="container play-container">
     <div class="row">
        <div class="play-video">
          <iframe width="1100" height="500" src="{{ $video->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <h3>{{ $video->titulo }}</h3>
<hr>
<div class="publisher">
    <img src="../public/img/Logo HA 98X98px.png">
    <div>
        <p>Universidad de Healthy</p>
        <span>500k Subs</span>
    </div>
</div>
    <hr>
    <div class="vid-description">
      {{ $video->description }}
    </div>
    <hr>
</div>
@endsection
