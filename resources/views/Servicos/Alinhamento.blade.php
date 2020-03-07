@extends('layouts.templateServico')
@section('conteudo')
<section class="section-padding parallax section w ow fadeIn delay-08s" id="objetivos">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="info col-md-3">
				<div class="info">
					<img style="width:80px;height:auto;" alt="Serviços automotivos" title="Serviços automotivos" src="{{asset('/img/wifi.png')}}">
					<p> Temos um amplo estacionamento e sala de espera com Wifi
					 para que os nossos clientes tenham toda a comodidade enquanto
					aguardam a realização dos serviços.</p>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="info col-md-3">
				<div class="info">
				<img style="width:80px;height:auto;" alt="Serviços automotivos" title="Serviços automotivos" src="{{asset('/img/conveniencia.png')}}">
					<p>Estamos sempre investindo em equipamentos de última geração para que os reparos sejam realizados com alta precisão, baixo custo e prazos rápidos.</p>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="info col-md-3">
				<div class="info">
				<img style="width:80px;height:auto;" alt="Serviços automotivos" title="Serviços automotivos" src="{{asset('/img/servicos.png')}}">
					<p>Atuamos no mercado de reparação automotiva desde 1994 em sede própria, ocupando uma área total de 600 m² e levando serviços de total qualidade aos nossos clientes.</p>
				</div>
			</div>
		</div>
	</div>
</section>

@component('componentes.info')
@endcomponent


<section style="margin-top:100px;">
	<div class="container">
		<div class="row">

			<div class="format-equip col-md-6">
				<h2>Equipamentos de Ultima Geração</h2>
				<p>A Rambaldi está sempre investindo em equipamentos de última geração para que os reparos sejam realizados com alta precisão, baixo custo e prazos rápidos. </p>
				<ul>
					<li>
						Equipamentos para diagnóstico de sistemas eletrônicos embarcados (Injeção eletrônica, Freios ABS, Airbag e Imobilizador);
					</li>
					<li>
						Equipamento de limpeza e equalização de Injetores;
					</li>
					<li>
						Equipamento para teste, detecção e manutenção de sistemas climatizadores automotivos (ar condicionado);
					</li>
					<li>
						Osciloscópio automotivo;
					</li>
					<li>
						Analisador de gases;
					</li>
					<li>
						Cinco elevadores.
					</li>

				</ul>
			</div>

			<div class="col-md-6">
				<div class="img-equip">
					<img src="{{asset('/img/equip.png')}} "alt="Los Angeles">
				</div>
			</div>
		</div>
	</div>

</section>


@endsection

