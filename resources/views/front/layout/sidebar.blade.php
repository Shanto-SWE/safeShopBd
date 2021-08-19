<?php
Use\App\Http\Controllers\BaseController;
use App\Models\Product;

$total=0;
if(Session::has('user'))
{
  $total= BaseController::cartItem();
}

$allcatagory=BaseController::sidebarCategory();
$sub=BaseController::subcatagory();
 $product=BaseController::productCount();



?>
<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="/cart"><img src="{{asset('themes/images/ico-cart.png')}}" alt="cart">{{$total}} Items in your cart  </a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			@foreach($allcatagory as $allcatagory)
			<li class="subMenu open"><a> {{$allcatagory->name}}</a>

		
				<ul>
				@foreach($sub as $suball)
				@if($allcatagory->id==$suball->category_id)
				<li><a class="active" href=""><i class="icon-chevron-right"></i>{{$suball->name}} 
				
			
			
			</a></li>
				@endif
				@endforeach
				</ul>
			</li>
			@endforeach
			
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="{{asset('themes/images/products/panasonic.jpg')}}" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="{{asset('themes/images/products/kindle.png')}}" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="{{asset('themes/images/payment_methods.png')}}" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>