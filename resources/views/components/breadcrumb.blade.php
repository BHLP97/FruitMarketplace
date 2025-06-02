<section class="bread-crumb" style="background-image: url('{{ asset('images/bg-breadcrumb.webp') }}')">
	<div class="container">
		<div class="nd-main-title-breadcrumb text-center">{{$breadcrumb_1 ?? ucfirst(str_replace('-', ' ', request()->segment(1)))}}</div>
		<ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">					
			<li class="home" itemtype="https://schema.org/ListItem">
				<a href="/" title="Homepage">
					<span>Homepage</span>
					<meta itemprop="position" content="1">
				</a>
			</li>
			<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
				<a href="{{$link_1 ?? ''}}" disabled="{{(count(request()->segments()) == 1) ? 'disabled' : ''}}">
					@if(count(request()->segments()) == 1)
						<strong>
							{{ucfirst(str_replace('-', ' ', request()->segment(1)))}}
						</strong>
					@else
						<span>
							{{ucfirst(str_replace('-', ' ', request()->segment(1)))}}
						</span>
					@endif
					<meta itemprop="position" content="2">
				</a>
			</li>
			@if(isset($breadcrumb_2))
				<li itemtype="https://schema.org/ListItem">
					<a href="{{$link_2}}" disabled="{{($isLastCrumb == 2) ? 'disabled' : ''}}">	
						<strong>{{$breadcrumb_2}}</strong>
						<meta itemprop="position" content="3">
					</a>
				</li>
			@endif
		</ul>
	</div>
</section>