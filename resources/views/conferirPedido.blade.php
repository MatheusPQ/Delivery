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
						<h2>Confirmação do pedido</h2>
						<ul>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="/{{$item->imagemItem}}">
									<div class="item__text">
										<h2>{{$item->nomeItem}}</h2>
										<p>{{$item->descItem}}</p>
										<p>R$ {{$item->precoItem}}</p>
									</div>
								</a>
							</li>
						</ul>
						<hr>
						{{--  <div class="col-xs-12 col-md-4 col-md-offset-8">
							<p><strong>Total:</strong> R$ 20,00</p>
						</div>  --}}
					</div>
					<div class="col-xs-12">
						<h2>Escolha a maneira de entrega</h2>
						<div class="order">
							<a href="#">
								<img src="/img/icon-stand.png">
								<p>Retirar no Balcão</p>
							</a>
						</div>
						<div class="order">
							<a href="#">
								<img src="/img/icon-chair.png">
								<p>Entregar no assento</p>
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<form action="{{ route('pedido.salvar') }}" method="POST">
							{{ csrf_field() }}
  							<input type="hidden" name="item_id" value="{{$item->id}}">
							<div class="form-group">
								<label for="numeroAssento">Número do Assento</label>
								<input type="text" class="form-control" name="numeroAssento" id="numeroAssento" placeholder="Nº Assento">
							</div>
							<div class="form-group">
								<label for="obsPedido">Observações</label>
								<textarea type="text" class="form-control" name="obsPedido" id="obsPedido" placeholder="Observações"></textarea>
							</div>
							<div class="button-group">
								<a href="/">Voltar</a>
								<button type="submit">Confirmar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop