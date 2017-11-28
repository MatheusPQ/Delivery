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
						<ul class="row">

							@foreach($itens as $item)
								<li class="int__item">
									<a href="#" class="item__container">
										<img src="{{$item->imagemItem}}">
										<div class="item__text">
											<h2>{{$item->nomeItem}}</h2>
											<p>{{$item->descItem}}</p>
											<p>R$ {{$item->precoItem}}</p>
										</div>
									</a>
								</li>
							@endforeach
						</ul>
						<div class="button-group">
							<a href="#">Alterar Itens</a>
							<a href="/produto/novo">Adicionar Novo Item</a>
						</div>
						<div class="button-group">
							<a href="#">Cancelar</a>
							<a href="#">Confirmar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop