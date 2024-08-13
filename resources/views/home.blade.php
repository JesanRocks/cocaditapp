@extends('layouts.app')

@section('content')

<div class="slider"> <!--add class "fullscreen"-->
    <ul class="slides">
      <li>
        <img src="https://loremflickr.com/1280/720/nature">  <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/food/"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://loremflickr.com/1280/720/home"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var slide = document.querySelectorAll('.slider');
        var instances = M.Slider.init(slide,{
            indicators:false,
        });
    });
  </script>
@endsection
