<?php
Use\App\Http\Controllers\BaseController;

$total=0;
if(Session::has('user'))
{
  $total= BaseController::cartItem();
}
$allcatagory=BaseController::sidebarCategory();
?>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> {{Session::get('user')['name']}}</strong></div>
	<div class="span6">
	<div class="pull-right">
	
		<a href="/cart"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ {{$total}} ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
  <a class="brand" href="/"><img src="{{asset('themes/images/logo.png')}}" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			@foreach($allcatagory as $catagory)
			<option>{{$catagory->name}} </option>
			@endforeach
			
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="/specialoffer">Specials Offer</a></li>
	 <li class=""><a href="/delivery">Delivery</a></li>
	 <li class=""><a href="/contact">Contact</a></li>
	 <li class="">
		 @if(Session()->has('user'))
		 <a href="{{route('user.logout')}}" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">logout</span></a>
		 @else
	 <a href="{{route('user.login')}}" role="button"  style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	@endif
	</li>
    </ul>
  </div>
</div>
</div>
</div>

