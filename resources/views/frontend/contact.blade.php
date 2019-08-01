@extends('frontend.layouts.master')
@section('content')
<section id="content">
<section class="content-row content-row-border-top">
				<div class="container">
					<div class="column-row">
						<div class="column-25">
							<h4>
								Frame Overlays
							</h4>
							<p>
								Embed custom content in an overlay iframe using a supported link.
							</p>
							<ul class="list-style-icon">
								<li>
									<a class="iframe-overlay" data-src="https://www.google.com/maps?output=embed&q=Rio+de+Janeiro+Brazil"><i class="fab fa-google icon-left"></i>Google Maps</a>
								</li>
								<li>
									<a class="iframe-overlay" data-src="https://www.openstreetmap.org/export/embed.html?bbox=-43.60473632812501%2C-23.07594158968702%2C-42.93182373046875%2C-22.675164137272372"><i class="fas fa-map-pin icon-left"></i>OpenStreetMap</a>
								</li>
								<li>
									<a class="iframe-overlay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/171014506" data-width="640" data-height="180"><i class="fab fa-soundcloud icon-left"></i>SoundCloud</a>
								</li>
							</ul>
						</div>
						<div class="column-75">
							<div class="network-map">
								<ul>
									<li style="top: 40%; left: 26%;">
										<a class="iframe-overlay" data-src="https://www.google.com/maps?output=embed&q=Rochester+NY+14621+USA"><span class="label-top-right">New York</span></a>
									</li>
									<li style="top: 34%; left: 49.5%;">
										<a class="iframe-overlay" data-src="https://www.google.com/maps?output=embed&q=60313+Frankfurt+Germany"><span class="label-bottom-right">Frankfurt</span></a>
									</li>
									<li style="top: 44%; left: 85%;">
										<a class="iframe-overlay" data-src="https://www.google.com/maps?output=embed&q=Tokyo+100-0004+Japan"><span class="label-bottom-right">Tokyo</span></a>
									</li>
								</ul>
								<img src="{{asset('frontend/img/layout/map-dark.svg')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>
			</section>
@endsection