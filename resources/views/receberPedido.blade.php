@extends('app')

@section('conteudo')
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="int__container row">
					<div class="col-xs-12">
						<h1>Cardápio</h1>
					</div>
					<div class="col-xs-12">
						<h2>Pedidos pendentes</h2>
							<ul>
							@foreach($pedidos as $pedido)
								<li class="int__item">
									{{--  <a href="#" class="item__container">  --}}
										{{--  <img src="img/icon-01.png">  --}}
										<div class="item__text">
											<h2>{{$pedido->item->nomeItem}}</h2>
											<p># {{$pedido->id}}</p>
											<p>{{$pedido->item->descItem}}</p>
											<p>R$ {{$pedido->item->precoItem}}</p>
										</div>
									{{--  </a>  --}}
								</li>
							@endforeach
						</ul>
					</div>
					<div class="col-xs-12">
						<h2>Pedidos a serem entregues</h2>
						<div class="order">
							<img src="/img/icon-stand.png">
							<ul>
								@foreach($pedidos as $pedido)
									@if(empty($pedido->numeroAssento))
										<li>{{ $pedido->user->name }} | Pedido nª {{$pedido->id}} <a class="btn btn-success" style="margin:1px; font-size: 12px; padding: 2px;" href="#">Ok</a></li>
										{{--  <li>Cicrano | Pedido nª 19395</li>  --}}
									@endif
								@endforeach
							</ul>
						</div>
						<div class="order">
							<img src="/img/icon-chair.png">
							<ul>
							@foreach($pedidos as $pedido)
								@if($pedido->numeroAssento)
									<li>{{ $pedido->user->name }} | Pedido nª {{$pedido->id}}, Assento {{$pedido->numeroAssento}}<a class="btn btn-success" style="margin:1px; font-size: 12px; padding: 2px;" href="#">Ok</a></li>
									{{--  <li>Beltrano | Pedido nª 19393, Assento B-24</li>  --}}
								@endif
							@endforeach
							</ul>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="button-group">
							<a href="/produto">Voltar</a>
							<a href="/">Tela Inicial</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop