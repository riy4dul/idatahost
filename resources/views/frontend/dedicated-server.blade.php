@extends('frontend.layouts.master')
@section('content')
<section id="content">
<section class="content-row content-row-border-top">
				<div class="container">
					{{-- <h4>
						Pricing Table
					</h4> --}}
					<table>
						<caption>
							Dedicated Servers
						</caption>
						<thead>
							<tr>
								<th>CPU Model</th>
								<th>CPU Cores</th>
								<th>CPU Speed</th>
								<th>ECC Memory</th>
								<th>Storage</th>
								<th>Monthly Price</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Intel Xeon E3 1225v2</td>
								<td>4C / 4T</td>
								<td>3.2 GHz</td>
								<td>16 GB</td>
								<td>2x 2 TB SATA3</td>
								<td class="highlight">$99</td>
								<td><a class="button button-secondary" href="#dedicated-server-1"><i class="fas fa-shopping-cart icon-left"></i>Order Now</a></td>
							</tr>
							<tr>
								<td>Intel Xeon E3 1225v2</td>
								<td>4C / 4T</td>
								<td>3.2 GHz</td>
								<td>32 GB</td>
								<td>4x 2 TB SATA3</td>
								<td class="highlight">$149</td>
								<td><a class="button button-secondary" href="#dedicated-server-2"><i class="fas fa-shopping-cart icon-left"></i>Order Now</a></td>
							</tr>
							<tr>
								<td>Intel Xeon E3 1245v2</td>
								<td>4C / 8T</td>
								<td>3.2 GHz</td>
								<td>32 GB</td>
								<td>6x 2 TB SATA3</td>
								<td class="highlight">$199</td>
								<td><a class="button button-secondary" href="#dedicated-server-3"><i class="fas fa-shopping-cart icon-left"></i>Order Now</a></td>
							</tr>
							<tr>
								<td>Intel Xeon E5 1620</td>
								<td>4C / 8T</td>
								<td>3.6 GHz</td>
								<td>32 GB</td>
								<td>2x 3 TB SATA3</td>
								<td class="highlight">$249</td>
								<td><a class="button button-secondary" href="#dedicated-server-4"><i class="fas fa-shopping-cart icon-left"></i>Order Now</a></td>
							</tr>
							<tr>
								<td>Intel Xeon E5 1650</td>
								<td>6C / 12T</td>
								<td>3.2 GHz</td>
								<td>64 GB</td>
								<td>4x 3 TB SATA3</td>
								<td class="highlight">$399</td>
								<td><a class="button button-secondary" href="#dedicated-server-5"><i class="fas fa-shopping-cart icon-left"></i>Order Now</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
		</section>
		@endsection