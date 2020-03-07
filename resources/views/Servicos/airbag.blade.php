@extends('layouts.templateServico')
@section('conteudo')
<section class="section-padding parallax section w ow fadeIn delay-08s" id="objetivos">
	<div class="container">
		<div class="row">
			<div class="format-equip col-md-12">
				<h2>Airbag: Mantenha sempre em ordem</h2>
				<p>O airbag ou bolsa de ar é um componente de segurança dos veículos. É um sistema acionado quando o veículo sofre um grande impacto para proteger os ocupantes do carro. São itens de segurança passiva obrigatórios desde 2010 nos veículos fabricados no Brasil. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="format-equip">
					<h2>Durabilidade</h2>
					<p>De acordo com a maioria dos manuais de proprietário, o airbag é projetado para durar entre 10 a 20 anos, no entanto é importante verificar recalls das montadoras. </p>
			
					<h2>Monitoramento</h2>
					<p>O sistema é monitorado por uma Unidade de Comando Eletrônica que checa constantemente suas condições e em caso de avaria a luz do airbag acenderá no painel. </p>
					<p>Qualquer anomalia é avisada, desde cabos rompidos ou oxidações nos contatos elétricos (mais comum), até bolsa acionada ou sensor de impacto danificado. </p>
				</div>
			</div>

			<div class="col-md-6">
			
					<img src="{{asset('/img/airbag.jpg')}} "alt="Airbag">
				
			</div>
		
		</div>
	</div>
</section>

@component('componentes.infoServico')
@endcomponent

@component('componentes.escolher')
@endcomponent


@endsection

