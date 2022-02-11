<div class="sidenav">
	<div class="side-body">
		<ul class="side-menu m-0 p-0">
			<li class="treeview">
				<div class="treeview-title-block {{ isset($nav_frontend_page_setting) && $nav_frontend_page_setting == 1 ? "active" : " "}}">
					<div class="treeview-icon">
						<i class="fa fa-globe" aria-hidden="true"></i>
					</div>
					<div class="treeview-title">Frontend Page Setting</div>
				</div>
				<ul class="treeview-menu m-0 p-0 {{ isset($nav_blog) && $nav_blog == 1 ? "active" : " "}}">
					<li class="treeview-item">
						<a href="{{ route("backoffice.blog") }}" class="{{ isset($nav_blog) && $nav_blog == 1 ? "active" : " "}}">Blog</a>
					</li>
				</ul>
			</li>
			{{-- <li class="treeview">
				<div class="treeview-title-block">
					<div class="treeview-icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					</div>
					<div class="treeview-title">Shop</div>
				</div>
				<ul class="treeview-menu m-0 p-0">
					<li class="treeview-item"><a href="#">Shop</a></li>
				</ul>
			</li>
			<li class="treeview">
				<div class="treeview-title-block">
					<div class="treeview-icon">
						<i class="fa fa-commenting" aria-hidden="true"></i>
					</div>
					<div class="treeview-title">Contact Us</div>
				</div>
				<ul class="treeview-menu m-0 p-0">
					<li class="treeview-item"><a href="#">Message</a></li>
				</ul>
			</li> --}}
		</ul>
	</div>
</div>