@extends('frontend.app')


@section('movielist')

<div class="pagination-container">


{!! $latestmovies->render() !!}
</div>
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Latest <strong>Movies</strong></span></span></span>

					</h4>
						<ul class="thumbnails">

						@foreach($latestmovies as $latestmovie)



									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>

											<p><a href="{!!route('home.show',array($latestmovie->movie_name))!!}"><img src="/cover_img/{!! $latestmovie->coverpic !!}" /></a></p>
											<p class="title"><h4><strong>{!! $latestmovie->movie_name !!}</strong></h4></p><br/>
											<p class="category"><strong>{!! $latestmovie->release_date !!}</strong></p>
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