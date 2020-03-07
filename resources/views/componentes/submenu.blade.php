<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
				<a href="route{{('home')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Home">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">EMPRESA</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						SERVIÇOS
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#191035;">
					<a href="{{route('site.airbag')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Airbag">Airbag</a>
					<a href="{{route('site.AlinhamentoeBalanceamento')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Alinhamento e Balanceamento">Alinhamento e Balanceamento</a>
					<a href="{{route('site.ArCondicionado')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="ArCondicionado">Ar Condicionado</a>
					<a href="{{route('site.AutoEletrico')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Auto Elétrico">Auto Elétrico</a>
					<a href="{{route('site.Cambio')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Câmbio">Câmbio</a>
					<a href="{{route('site.Direcao')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Direcao">Embreagem</a>
					<a href="{{route('site.Embreagem')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Embreagem">Embreagem</a>
					<a href="{{route('site.Freios')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Freios">Freios | Freios ABS</a>
					<a href="{{route('site.Injecao')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Injecao">Injeção Eletrônica</a>
					<a href="{{route('site.Manutencao')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Manutencao">Manutenção Preventiva</a>
					<a href="{{route('site.Suspensao')}}" class="indexnav__link btn text-center" data-toggle="tooltip" data-placement="top" title="Suspensao">Suspensão</a>

					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">CONTATO</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
			</form>
		</div>
	</nav>
</header>