@extends('Template.layoutTrasMel2')
@section('Contenido')

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('img/page-top-bg/3.jpg') }}">
		<div class="page-info">
			<h2>Noticias</h2>
			<div class="site-breadcrumb">
				<a href="{{ asset('TrasMel') }}">Inicio</a>  /
				<span>Noticias</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<ul class="blog-filter">
						<li><a href="#">Servicios</a></li>
						<li><a href="#">Empresas</a></li>
						<li><a href="#">Logros</a></li>
						<li><a href="#">Premios</a></li>
					</ul>
					<div class="big-blog-item">
						<img src="{{ asset('img/blog-big/1.jpg') }}" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">16.05.2019  /  in <a href="">Noticias</a></div>
							<h3>Trasmel Lanza su Aplicacion Movil</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="{{ url('TrasMel/Noticias/AppMovil') }}" class="read-more">Read More <img src="{{ asset('img/icons/double-arrow.png') }}" alt="#"/></a>
						</div>
					</div>
					<div class="big-blog-item">
						<img src="{{ asset('img/blog-big/2.jpg') }}" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Noticias</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More <img src="{{ asset('img/icons/double-arrow.png') }}" alt="#"/></a>
						</div>
					</div>
					<div class="big-blog-item">
						<img src="{{ asset('img/blog-big/3.jpg') }}" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Noticias</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More <img src="{{ asset('img/icons/double-arrow.png') }}" alt="#"/></a>
						</div>
					</div>
					<div class="site-pagination">
						<a href="#" class="active">01.</a>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<form class="search-widget">
								<input type="text">
								<button>Buscar</button>
							</form>
						</div>
						<div class="widget-item">
							<h4 class="widget-title">Ultimas Noticias</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/1.jpg') }}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/2.jpg') }}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/3.jpg') }}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./img/blog-widget/4.jpg') }}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<h4 class="widget-title">Ultimos Comentarios</h4>
							<div class="latest-comments">
								<div class="lc-item">
									<img src="{{ asset('./img/blog-widget/1.jpg') }}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Alan Brito</a> <span>En</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="{{ asset('./img/blog-widget/2.jpg') }}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Juan Perez</a> <span>En</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="{{ asset('./img/blog-widget/3.jpg') }}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Roberto Manfinfla</a> <span>En</span> The best online game out there </div>
								</div>
								<div class="lc-item">
									<img src="{{ asset('./img/blog-widget/4.jpg') }}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">Jhon Smith</a> <span>En</span> The best online game out there </div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<a href="#" class="add">
								<img src="{{ asset('./img/add.jpg') }}" alt="Anuncio Publicitario">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->