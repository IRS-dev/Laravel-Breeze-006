@extends('layouts.main')
@section('indexmain')
		<!--sofa-collection start -->
		<section id="pengertian">
			<div class=" owl-theme" >
				<div class="sofa-collection collectionbg1">
					<div class="container">
						<div class="sofa-collection-txt">
							<h2>Pengertian</h2>
							<p>
								Laravel Breeze adalah Starter kits dari laravel yang mengimplementasikan semua fitur otentikasi termasuk, login,registrasi, reset password,konfirmasi password dan, verifikasi email
							</p>
						</div>
					</div>	
				</div><!--/.sofa-collection-->
			</div><!--/.collection-carousel-->

		</section><!--/.sofa-collection-->
		<!--sofa-collection end -->

        <section id="pengertian">
			<div class=" owl-theme" >
				<div class="sofa-collection collectionbg1">
					<div class="container">
						<div class="sofa-collection-txt">
							<h2>Kenapa Harus Laravel Breeze?</h2>
							<p>
								Laravel Breeze itu ramah untuk pemula, jadi unutk kalian yang baru menggunakan framework laravel laravel breeze ini adalah pilihan starter kit yang bagus untuk kalian pelajari. Tidak seperti Jetstream, Breeze ini lebih simple dan mudah untuk di kustomisasi
							</p>
						</div>
					</div>	
				</div><!--/.sofa-collection-->
			</div><!--/.collection-carousel-->

		</section><!--/.sofa-collection-->
		<!--sofa-collection end -->

	

		<!--blog start -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>Fitur-Fitur</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-3">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/blog/auth.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2>Otentikasi</h2>
									
									<p>Dalam Website Modern sistem registrasi sudah umum dilakukan, di laravel breeze kalian bisa membuat sistem ini dengan cepat & mudah. kalian tidak usah repot repot membuatnya sendiri kalian tinggal mengetikan beberapa command di CLI maka laravel dengan sendirinya membuatkanya</p>
								</div>
							</div>
							
						</div>
						<div class="col-sm-3">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/blog/react and vue.png" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2>Breeze & React / Vue</h2>
									
								<p>Laravel breeze juga menawarkan implementasi dari frontend baik itu Vue ataupun React melalui Inertia.js. Ini memungkinkan kamu bisa membuat aplikasi React ataupun Vue dalam satu halaman menggunakan routing dan controller klasik di sisi server</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/blog/nextjs-logo.png" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2>Breeze & Next / API</h2>
									
									<p>Laravel Breeze juga dapat mengimplementasikan API otentikasi yang siap untuk mengotentikasi aplikasi JavaScript modern seperti yang didukung oleh Next, Nuxt, dan lainnya. </p>
								</div>
							</div>
						</div>
                        <div class="col-sm-3">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="images/blog/taildwid.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2>Tailwind CSS</h2>
									
									<p>Tailwind css adalah css framework yang memiliki design simple dan memprioritaskan proses untuk membangun desaign antarmuka khusus dengan cepat. Di laravel secara default(bawaan) tailwind menjadi pilihan css framework, tetapi kalian juga bisa menggantinya dengan css framework yang lain. tetapi kalian harus mengatur terlebih dahulu</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

	
		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
                                    
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="https://youtu.be/CWjCKSmX03Q">Tutorial Youtube</a></li><!--/li-->
										<li><a href="https://masteringbackend.com/posts/laravel-breeze-tutorial-the-definitive-guide/"> Tutorial Website</a></li><!--/li-->
										<li><a href="https://laravel.com/docs/9.x/starter-kits#laravel-breeze">Dokumentasi</a></li><!--/li-->
										<li><a href="#">Github Repo</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->
@endsection