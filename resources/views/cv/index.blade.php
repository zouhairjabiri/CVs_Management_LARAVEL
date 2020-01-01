@extends('layouts.app')

@section('content')

<div class="container">
  	<div class="row">
  		<div class="col-md-12">	
            <center>
                <div class="alert alert-success" role="alert">
            Welcome  ::Les List Des CV::
               </div>
            </center>

            <div class="pull-right">
                <a href="{{ url('cvs/create')}}" class="btn btn-success">Nouveau cv</a>
            </div>


            <table class="table">
            	<head>
            		<tr>
            			<th>Title</th>
                        <th>Presentation</th>
                        <th>Date Creation</th>
            			<th>Action</th>
             		</tr>
            	</head>
                <body>
                	@foreach($cvs as $cv)
                	<tr>
                		<td>{{ $cv->titre }}</td>
                        <td>{{ $cv->presentation }}</td>
                        <td>{{ $cv->created_at }}</td>
                		<td>
                			
                            <form action="{{ url('cvs/'.$cv->id) }}" method="post" >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="" class="btn btn-primary">Detail</a>
                                <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning">Editer</a>
                                <button type="submit" class="btn btn-danger">Supprimer</button>

                            </form>
                		</td>
                	</tr>
                	@endforeach
                </body>
            </table>

        </div>
    </div>
</div>


@endsection