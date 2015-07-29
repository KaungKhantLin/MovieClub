<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<link rel="stylesheet" href="/resources/demos/style.css">
@extends('frontend.app_theraters')

@section('theraters_create')




<script>

$(function(){
	$( "#show_movie" ).autocomplete({
		source: "getdata",
		minLength: 1,
		select: function(e, ui) {

			$('#show_movie').val(ui.item.value);
		}
	});
});

</script>

<div class="row">

	{!! Form::open(array('route' => 'theratershow.store','files'=>true)) !!}
	<div class="box box-danger">
		<div class="box-header">
			<h3 class="box-title">Create Movies For Your Therater </h3>
		</div>

		<br/>

		<div class="box-header">
			<h4 class="box-title">အသုံးပြုသူများကို ကူညီရန်  data များကို စုံလင်အောင်ဖြည်. သွင်းပေးပါ၊
				အသုံးပြုသူ၏လုံခြုံရေးအတွက် သင်.ရုပ်ရှင်ရုံ အသုံးပြုသော ဖုန်းနံပါတ်ကို ထည်.သွင်းပေးပါ။
				သင်.ရုပ်ရှင်ရုံ၏ Facebook , Twitter , website လိပ်စာရှိလျှင်
				ထည်.သွင်းပေးပါ။ </h4>
			</div>

			<div class="box-header">
				<h6 class="box-title">Note ~~ အချက်အလက်များထည်.သွင်းလျှင် လတ်တလ​ောမှာ မြန်မာယူနီကုဒ်နှင်. English ဖြင်.သာထည်.သွင်းပေးပါ။ ( Zawgyi Font နှင်.ဆို  စာသားအမှန်ပေါ်မည်မဟုတ်ပါ။) ကျေးဇူးတင်ပါသည်။</h6>
			</div>





			<div class="box-body">
				<!-- Movie Name -->
				<div class="form-group">
					{!! Form::label('therater_name',"Your Therater Name:") !!}
					<div class="input-group">
						<div class="input-group-addon">
							<strong><i>N</i></strong>
						</div>

						{!! Form::text('therater_name',null,['class'=>'form-control','placeholder'=>'Writte Therater Name...']) !!}

					</div><!-- /.input group -->
				</div><!-- /.form group -->

				{{-- Movie Type --}}
				<div class="form-group">
					{!! Form::label('region',"Choose Your Therater Region:") !!}
					<div class="input-group">
						<div class="input-group-addon">
							<strong><i>R</i></strong>
						</div>

						<select class="form-control" name="region" id="region">
							<option>ရန်ကုန်တိုင်းဒေသကြီး - Yangon Region </option>

							<option>မန္တလေးတိုင်းဒေသကြီး - Mandalay Region</option>
							<option>တနင်္သာရီတိုင်းဒေသကြီး - TaninTharYi Region</option>
							<option>စစ်ကိုင်းတိုင်းဒေသကြီး - Sagaing Region</option>
							<option>ဧရာဝတီတိုင်းဒေသကြီး - Ayeyawady Region</option>
							<option>ပဲခူးတိုင်းဒေသကြီး - Bago Region</option>
							<option>မကွေးတိုင်းဒေသကြီး - Magway Region</option>
							<option>ကချင်ပြည်နယ် - Kachin State</option>
							<option>ကယားပြည်နယ် - Kayah State</option>
							<option>ကရင်ပြည်နယ် - Kayin State</option>
							<option>ချင်းပြည်နယ် -Chin State</option>
							<option>မွန်ပြည်နယ် - Mon State</option>
							<option>ရခိုင်ပြည်နယ် - Rakhine State</option>
							<option>ရှမ်းပြည်နယ် - Shan State</option>
							<option>နေပြည်တော်ကောင်စီနယ်မြေ - NayPyeeTaw</option>

						</select>
					</div><!-- /.input group -->
				</div><!-- /.form group -->


				<div class="form-group">

					{!! Form::label('address','Your Therater Address:') !!}
					<div class="input-group">
						<div class="input-group-addon">
							<strong><i>A</i></strong>
						</div>


						{!! Form::text('address',null, ['class'=>'form-control','placeholder'=>'Address ...']) !!}
					</div><!-- /.input group -->
				</div><!-- /.form group -->


				{{-- Movie Release Date --}}
				<div class="form-group">

					{!! Form::label('showday','Movie Show Day::') !!}
					<div class="input-group">
						<div class="input-group-addon">
							<strong><i>D</i></strong>
						</div>
						{{-- <input  data-provide="datepicker" name="release_date" id="release_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> --}}


						{!! Form::input('date', 'showday', null, ['class' => 'form-control','id'=>'datepicker' ,'placeholder' => 'Enter Movie Show Day ... '])  !!}


					</div><!-- /.input group -->
				</div><!-- /.form group -->

				{{-- Movie Release Date --}}
				<div class="form-group">

					{!! Form::label('showtime','Movie Show Time::  ~~ (e.g ~ 01:30:PM)') !!}
					<div class="input-group">
						<div class="input-group-addon">
							<strong><i>T</i></strong>
						</div>
						{{-- <input  data-provide="datepicker" name="release_date" id="release_date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> --}}


						{!! Form::input('time', 'showtime', null, ['class' => 'form-control','id'=>'datepicker' ,'placeholder' => 'Enter Movie Show Time ... '])  !!}


					</div><!-- /.input group -->
				</div><!-- /.form group -->



				<div class="form-group">
				{!! Form::label('show_movie','Show Movie In Therater::') !!}
			<div class="input-group">

				<div class="input-group-addon">
					<strong><i>S</i></strong>
				</div>
				<input type="text" name="show_movie" id="show_movie" class="form-control" placeholder="Search Movie Name ...." >
			</div>



				</div>


{{-- Remark --}}

			<div class="form-group">
				<label>Remark (ယခုဇာတ်ကားအတွက်မှတ်ချက်ရှိလျှင် ထည်.သွင်းပေးပါ ။)</label>
				<div class="input-group">
					<div class="input-group-addon">
						<strong><i>R</i></strong>
					</div>

					<textarea class="form-control" rows="3" name="remark" id="remark"  value="{!! csrf_token() !!}" placeholder="Enter ..."></textarea>
				</div><!-- /.input group -->
			</div>

	    </div>





			{{-- Submit --}}
			<div class="form-group">


				<div class="margin">
					{!! Form::submit('Save', array('class' => 'btn btn-block btn-success btn-lg')) !!}
				</div>


			</div><!-- /.box-body -->

		</div>
	</div>
	{!! Form::close() !!}
</div>
@stop
