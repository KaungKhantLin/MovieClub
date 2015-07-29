@extends('backend/app_backend')
@section('body_content')

<div class="row">
{!! $latestmovies->render() !!}
 {!! Form::open(array('route' => 'circle.d2tk.latestmovie.store')) !!}
 <p align="right">{!! link_to_route('circle.d2tk.latestmovie.create', "Add Movies",null,array('class'=>'btn btn-block btn-info btn-lg')) !!}</p>
<p align="right">{!! link_to_route('circle.d2tk.theratermovie.index', "Control Therater Movie",null,array('class'=>'btn btn-block btn-info btn-lg')) !!}</p>


 <div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Latest Movie Table</h3>
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

 @if($latestmovies->count())
      <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>MovieName</th>
          <th>Genre</th>
          <th>ReleaseDate</th>
          <th>Director</th>
          <th style="padding-right:5%;">Writer</th>
          <th style="padding-right:35%;">OvierView</th>
          <th style="padding-right:20%;">Remark</th>
          <th style="padding-right:15%;">CoverPic</th>

          <th>Edit</th>
          <th>Delete</th>
        </tr>

        @foreach($latestmovies as $latestmovie)
        <tr>


          <td>{!! $latestmovie->id !!}</td>
          <td>{!! $latestmovie->movie_name !!}</td>
          <td>{!! $latestmovie->movie_type !!}</td>
          <td>{!! $latestmovie->release_date !!}</td>
          <td>{!! $latestmovie->director !!}</td>
          <td>{!! $latestmovie->writer!!}</td>
          <td>{!! $latestmovie->overview !!}</td>
          <td>{!! $latestmovie->remark !!}</td>
          <td><img src="/cover_img/{{ $latestmovie->coverpic }}"</td>



       <td>{!! link_to_route('circle.d2tk.latestmovie.edit','Edit', array($latestmovie->id), array('class' => 'btn btn-block btn-info btn-lg')) !!}</td>

          <td>
           {!! Form::open(array('method' => 'DELETE', 'route' => array('circle.d2tk.latestmovie.destroy', $latestmovie->id))) !!}
           {!! Form::submit('Delete', array('class' => 'btn btn-block btn-danger btn-lg')) !!}
           {!! Form::close() !!}
         </td>
       </tr>
       @endforeach

</table>
     @else
     <h3>There is no latest movies.</h3>
     @endif

   </div><!-- /.box-body -->
 </div><!-- /.box -->
</div>

{!! Form::close() !!}
</div>



@stop
