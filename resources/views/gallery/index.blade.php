@extends('layouts.main')

@section('content')

 <div class="callout primary">
            <div class="row column">
              <h1>Galeries</h1>
              <p class="lead">create gallery </p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 large-up-4">
          <?php foreach($galleries as $gallery):?>
            <div class="column">
            <a href="/gallery/show/{{$gallery->id}}">
              <img class="thumbnail" src="/images/{{$gallery->cover_img}}" alt="no image uploaded">
              </a>
              <h5>{{$gallery->name}}</h5>
              <p align="justify">"{{$gallery->description}}"</p>
            </div>
            <?php endforeach;?>
          </div>
@stop