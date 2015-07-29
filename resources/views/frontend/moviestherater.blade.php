@extends('frontend.app')


@section('movielist')

<div class="pagination-container">


{!! $theratermovies->render() !!}
</div>
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Theraters <strong>Movies</strong></span></span></span>

					</h4>
						<ul class="thumbnails">

						@foreach($theratermovies as $theratermovie)

									<li class="span3">
							<div class="product-box">
											<span class="sale_tag"></span>

											<p><a href="{!!route('theratermovies.show',array($theratermovie->show_movie))!!}"><img src="/cover_img/{!! $theratermovie->latestmovies->coverpic !!}" /></a></p>
											<p class="title"><h4><strong>{!! $theratermovie->latestmovies->movie_name !!}</strong></h4></p>
											<p class="category"><strong>{!! $theratermovie->showday!!}</strong></p>
											<p class="category"><strong>{!! $theratermovie->showtime !!}</strong></p>

											<p class="category"><strong>{!! $theratermovie->therater_name !!}</strong></p>

										</div>
									</li>
						@endforeach;



								</ul>

				</div>
			</div>

		</div>
	</div>

</section>

{{-- end of movie  --}}
@stop