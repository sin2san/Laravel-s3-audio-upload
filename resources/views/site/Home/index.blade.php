@extends('site.layouts.default')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div id="genit-main">
        <section id="hero-area" class="hero-area">
			<div class="slider-area">
                <div class="single-slider slider-center" style="background-image:url('{!! asset('storage/sliders/1.jpg') !!}');">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1 col-12">
								<div class="slider-text text-center">
									<h1>Lorem Ipsum is simply dummy text of the <span>printing</span> and typesetting industry.</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="single-slider slider-center" style="background-image:url('{!! asset('storage/sliders/2.jpg') !!}');">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-lg-1 col-12">
								<div class="slider-text text-center">
									<h1>Lorem Ipsum is simply dummy text of the <span>printing</span> and typesetting industry.</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="blogs-main section">
			<div class="container">
				<div class="row">
					<div class="col-12 wow fadeInUp">
						<div class="section-title">
							<h1 class="mb-4"><span>Mind</span> Form</h1>
							<p>Our mission is to improve mental wellbeing by empowering individuals like you to get the most out of your interactions with others.<p>
						</div>
					</div>
                </div>
                <div class="row text-center">
					<div class="col-lg-12 col-md-12 col-12 wow fadeInUp mb-3">
                        @if(Auth::user())
                            <a class="btn primary text-white" href="{{url('intro')}}" style="width: 250px;"><i class="fa fa-microphone mr-1"></i> Add My Audio </a>
                        @else
                            <a class="btn primary text-white" href="{{url('register')}}" style="width: 250px;"> New User? </a>
                        @endif
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 wow fadeInUp">
                        @if(Auth::user())
                            <a class="btn text-white" href="{{url('logout')}}" style="width: 250px;"> Logout </a>
                        @else
                            <a class="btn text-white" href="{{url('login')}}" style="width: 250px;"> Log In </a>
                        @endif
                    </div>
                </div>
            </div>
		</section>
    </div>
@endsection
