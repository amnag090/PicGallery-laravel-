@extends('layouts.main')

@section('content')

 <div class="callout primary">
            <div class="row column">
              <h1>Photo </h1>
              <p class="lead">Upload Photos to gallery </p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 large-up-4">
            <div class="main">
                   
                    {!! Form::open(array('action'=> 'PhotoController@store','enctype'=>'multipart/form-data')) !!}
                        
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', $value=null, $attributes=['placeholder'=>'Photo Titile','name'=>'title']) !!}
                        
                        {!! Form::label('description', 'Description') !!}
                        {!! Form::text('description', $value=null, $attributes=['placeholder'=>'tell me about the pics','name'=>'description']) !!}
                        
                         {!! Form::label('location', 'Location') !!}
                        {!! Form::text('location', $value=null, $attributes=['placeholder'=>'Photo Location','name'=>'location']) !!}
                        
                        {!! Form::label('image', 'Image') !!}
                        {!! Form::file('image') !!}
                        
                            <input type="hidden" name="gallery_id" value="{{$gallery_id}}"/>                        
                        
                        {!! Form::submit('Submit', $attributes=['class'=>'buton btn-primary']) !!}
                        
                        

                    
                    {!! Form::close() !!}
                    
                    
            </div>
          </div>
@stop