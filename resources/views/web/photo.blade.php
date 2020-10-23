@extends('layouts.default')
@section('content')

<div class="photos">
	<div class="container">
		<h2>Photos</h2>	
		<!-- portfolio-section -->
		<div class="portfolio"  id="portfolio">
			<div id="portfoliolist">
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img9.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img9.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>				
				<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img10.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img10.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>					

				<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{'public/frontend/images/img11.jpg'}}" class="swipebox"  title="Image Title"> <img src="{{'public/frontend/images/img11.jpg'}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>	
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img13.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img13.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>				
				<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img14.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img14.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>					

				<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img15.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img15.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>									

				<div class="clearfix"></div>
				<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img17.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img17.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>				
				<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box">		
						<a href="{{asset('public/frontend/images/img12.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img12.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>		
				<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper grid_box last">		
						<a href="{{asset('public/frontend/images/img16.jpg')}}" class="swipebox"  title="Image Title"> <img src="{{asset('public/frontend/images/img16.jpg')}}" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
					</div>
				</div>							
				<div class="clearfix"></div>					
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop


