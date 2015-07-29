@extends('frontend.detailapp')
@section('main_content')


@foreach($moviedetails as $moviedetail)
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<div class="row">
							<div class="span4">



							 <a href="#" class="thumbnail"  ><img src="/cover_img/{!! $moviedetail->coverpic !!}" /></a>



							</div>


							<div class="span5">
								<address>
								<h4><strong>{!! $moviedetail->movie_name !!}</strong></h4>
									<br>
									<strong>Movie Type:: </strong> <span>{!! $moviedetail->movie_type !!}</span><br>
									<strong>Directors:: </strong> <span>{!! $moviedetail->director !!}</span><br>
									<strong>Writter:: </strong> <span>{!! $moviedetail->writter !!}</span><br>
								</address>
								<h4><strong>Release Date</strong></h4>
								<p><h4><span>{!! $moviedetail->release_date !!}</span></h4></p>

								<h4><strong>Remark</strong></h4>
								<p><span>{!! $moviedetail->remark !!}</span></p>

							</div>

						</div>


						<br/>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Movie Overview</a></li>

								</ul>
								<br/>
								<div class="tab-content">
									<div class="tab-pane active" id="home">{!! $moviedetail->overview !!}</div>

								</div>
							</div>

						</div>
						<br/>
						<br/>

						  <section class="content">

          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <!-- The time line -->
              <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    video
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->

                <li>
                  <i class="fa fa-video-camera bg-maroon"></i>
                  <div class="timeline-item">
                    {{-- <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>
                    <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3> --}}
                    <div class="timeline-body">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{!! $moviedetail->youtubelink!!}" frameborder="0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="timeline-footer">

                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div><!-- /.col -->
          </div><!-- /.row -->



        </section>

				</div>
				</div>
			</section>

@endforeach


@stop
