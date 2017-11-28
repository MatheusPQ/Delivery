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
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-01.png">
									<div class="item__text">
										<h2>Combo 1</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12">
						<h2>Pedidos a serem entregues</h2>
						<div class="order">
							<img src="img/icon-stand.png">
							<ul>
								<li>Fulano | Pedido nª 19393</li>
								<li>Cicrano | Pedido nª 19395</li>
							</ul>
						</div>
						<div class="order">
							<img src="img/icon-chair.png">
							<ul>
								<li>Beltrano | Pedido nª 19393, Assento B-24</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="button-group">
							<a href="#">Voltar</a>
							<a href="#">Tela Inicial</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop