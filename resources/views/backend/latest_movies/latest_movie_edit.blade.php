@extends('backend/app_backend')
@section('body_content')

<div class="row">

	{!! Form::model( $latestmovies,[
		'method'=>'PATCH',
		'route' => array('circle.d2tk.latestmovie.update',
		 $latestmovies -> id,'files'=>true)
	]) !!}

	<div class="box box-danger">
		<div class="box-header">
			<h3 class="box-title">Latest Movies Control</h3>
		</div>

		<div class="box-body">
			<!-- Movie Name -->
			<div class="form-group">
				{!! Form::label('movie_name',"Movie Name:") !!}
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>N</i></strong>
					</div>
					{!! Form::text('movie_name',null,['class'=>'form-control','placeholder'=>'Writter Name...']) !!}
				</div><!-- /.input group -->
			</div><!-- /.form group -->

			{{-- Movie Type --}}
			<div class="form-group">
				{!! Form::label('movie_type',"Movie Type:") !!}
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>T</i></strong>
					</div>

					{!! Form::text('movie_type',null,['class'=>'form-control','placeholder'=>'Writter Name...']) !!}
				</div><!-- /.input group -->
			</div><!-- /.form group -->

			{{-- Movie Release Date --}}
			<div class="form-group">

				{!! Form::label('release_date','Movie Release Date::') !!}
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					{{-- <input  data-provide="datepicker" name="release_date" id="release_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> --}}


					{!! Form::input('date', 'release_date', null, ['class' => 'form-control','id'=>'datepicker' ,'placeholder' => 'Date'])  !!}


				</div><!-- /.input group -->
			</div><!-- /.form group -->


			<div class="form-group">

				{!! Form::label('director','Director Name:') !!}
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>D</i></strong>
					</div>


					{!! Form::text('director',null, ['class'=>'form-control','placeholder'=>'Director Name...']) !!}
				</div><!-- /.input group -->
			</div><!-- /.form group -->


			{{-- Writter Name --}}
			<div class="form-group">

				{!! Form::label('writter','Writer Name:') !!}
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>W</i></strong>
					</div>

					{!! Form::text('writter',null, ['class'=>'form-control','placeholder'=>'Writter Name...']) !!}
				</div><!-- /.input group -->
			</div><!-- /.form group -->


			{{-- Overview Editor --}}

			<section class="content">

				<div class='row'>
					<div class='col-md-12'>
						<div class='box'>
							<div class='box-header'>
								<h3 class='box-title'>Overview Movie<small>By Admin</small></h3>
								<!-- tools box -->
								<div class="pull-right box-tools">
									<button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
									<button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
								</div><!-- /. tools -->
							</div><!-- /.box-header -->
							<div class='box-body pad'>
								<form>
									<textarea class="textarea" name="overview" id="overview" value="{!! csrf_token() !!}" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

								</form>
							</div>
						</div>
					</div><!-- /.col-->
				</div><!-- ./row -->
			</section><!-- /.content -->
			{{-- finish overview --}}

			{{-- Remark --}}

			<div class="form-group">
				<label>Remark:</label>
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>R</i></strong>
					</div>

					<textarea class="form-control" rows="3" name="remark" id="remark"  value="{!! csrf_token() !!}" placeholder="Enter ..."></textarea>
				</div><!-- /.input group -->
			</div>

			{{-- End remark --}}

			{{-- For photo choose --}}
			<div class="form-group">
				<label>Choose MovieCover Photo:</label>

				{{-- <input type="file" class="file" name="coverpic"  value="{!! csrf_token() !!}" > --}}
				{!! Form::file('coverpic',['class'=>'file']) !!}
			</div>
			{{-- End Choose Photo --}}

			{{-- Youtube video link --}}
			<div class="form-group">
				<label>YoutubeLink:</label>
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>Y</i></strong>
					</div>
					<input type="text" name="youtubelink"  class="form-control"  placeholder="YoutubeLink ..."/>

				</div><!-- /.input group -->
			</div>
			{{-- end of youtube video --}}


			{{-- Submit --}}
			<div class="form-group">


			<div class="margin">
			 {!! Form::submit('Save', array('class' => 'btn btn-block btn-success btn-lg')) !!}
			 <br>
			 <li><a>{!!  link_to_route('circle.d2tk.latestmovie.index',"Cancel",null,array('class'=>'btn btn-block btn-success btn-lg')) !!}</a></li>
			</div>


		</div><!-- /.box-body -->

		</div>
	</div>
	{!! Form::close() !!}
</div>

@stop