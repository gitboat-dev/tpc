<div class="brand_m"></div>
<header id="header" class="">
	<div class="h-brand">
		<a class="" href="{{ route('backoffice.dashboard') }}">
		    <img src="/assets/custom/images/home/Asset%2035.png" width="40" class="d-inline-block align-top" alt="">
		    <span class="backoff">Backoffice</span>
		</a>
	</div>
	<div class="h-icon-menu" onclick="sidenav(this)">
		<div class="burger-menu change">
		  	<div class="bar1"></div>
		  	<div class="bar2"></div>
		  	<div class="bar3"></div>
		</div>
	</div>
	<div class="h-logout">
		<div class="ddown">
			<a href="javascript:void(0)">
				<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				{{ $auth }}
				<i class="fa fa-caret-down" aria-hidden="true"></i>
			</a>
			<div class="ddown-menu">
				@if(Auth::guard('admin')->check())
					<a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout').submit();" title="Logout">
						<i class="fa fa-power-off" aria-hidden="true" style="color:red;"></i> Logout
					</a>
					<form id="logout" action="{{ route('backoffice.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
				@endif
			</div>
		</div>
	</div>
</header>