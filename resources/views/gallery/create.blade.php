@extends('layouts.main')

@section('content')

 <div class="callout primary">
            <div class="row column">
              <h1>Galeries</h1>
              <p class="lead">create gallery </p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 large-up-4">
            <div class="main">
                   
                    {!! Form::open(array('action'=> 'GalleryController@store','enctype'=>'multipart/form-data')) !!}
                        
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', $value=null, $attributes=['placeholder'=>'Gallery name','name'=>'name']) !!}
                        
                        {!! Form::label('description', 'Description') !!}
                        {!! Form::text('description', $value=null, $attributes=['placeholder'=>'tell me about the pics','name'=>'description']) !!}
                        
                        {!! Form::label('cover_img', 'Cover Image') !!}
                        {!! Form::file('cover_img') !!}
                        
                        {!! Form::submit('Submit', $attributes=['class'=>'buton btn-primary']) !!}
                        
                        

                    
                    {!! Form::close() !!}
                    
                    
            </div>
          </div>
@stop