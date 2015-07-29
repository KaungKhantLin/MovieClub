@extends('backend/app_backend')
@section('body_content')

<div class="row">
{!! $theratermovie->render() !!}
<p align="right">{!! link_to_route('circle.d2tk.latestmovie.index', "Back",null,array('class'=>'btn btn-block btn-info btn-lg')) !!}</p>
 <div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Therater Movie Table</h3>
      <div class="box-tools">
        <div class="input-group">
          <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
          <div class="input-group-btn">
            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive no-padding">

 @if($theratermovie->count())
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Show Movie</th>
          <th>Therater Name</th>
          <th>Region</th>
          <th>Address</th>
          <th>Showday</th>
          <th style="padding-right:20%;">Remark</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
 @foreach($theratermovie as $movie)
        <tr>
          <td>{!! $movie->id !!}</td>
          <td>{!! $movie->show_movie !!}</td>
          <td>{!! $movie->therater_name !!}</td>
          <td>{!! $movie->region !!}</td>
          <td>{!! $movie->address !!}</td>
          <td>{!! $movie->showday!!}</td>
          <td>{!! $movie->showtime !!}</td>
          <td>{!! $movie->remark !!}</td>
       	  <td>
       	  	  {!! link_to_route(
       	  	  'circle.d2tk.theratermovie.edit','Edit',
       	  	   array($movie->id),
       	  	   array('class' => 'btn btn-block btn-info btn-lg')
       	  	   ) !!}
       	  </td>

          <td>
	           {!! Form::open(
	           	array('method' => 'DELETE',
	            'route' => array(
	            'circle.d2tk.theratermovie.destroy',
	            $movie->id)))
	           !!}
	           {!! Form::submit(
	           	'Delete', array('class' =>
	           	'btn btn-block btn-danger btn-lg'))
	           !!}
          </td>
         		{!! Form::close() !!}
       </tr>
 @endforeach
</table>
 @else
 <h3>There is no latest movies.</h3>
 @endif

   </div><!-- /.box-body -->
 </div><!-- /.box -->
</div>
</div>

@stop
