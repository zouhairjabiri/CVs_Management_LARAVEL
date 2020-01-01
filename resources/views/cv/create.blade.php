@extends('layouts.app')


@section('content')
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="alert alert-success" role="alert">
          Administrateur !! Welcome :)            
        </div>

        @if(count($errors))
           <div class="alert alert-danger" role="alert">
                  <i>Errors : </i>     
                  <ul>
                    @foreach($errors->all() as $message)
                       <li> {{ $message }}</li>
                    @endforeach
                  </ul>       
           </div>
        @endif

  			<form action="{{ url('cvs') }}" method="post">
          {{ csrf_field() }}

  				<div class="form-group">
  				<label for="">TITRE</label>
  				<input type="text" name="titre" class="form-control" value="{{ old('titre') }}">
  				</div>

                <div class="form-group">
  				<label for="">presentation</label>
  				<textarea name="presentation" class="form-control" >{{ old('presentation') }}</textarea>
  				</div>

  				<div class="form-group">		
            <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
  				</div>
  			</form>
  		</div>
  	</div>
  </div>
@endsection