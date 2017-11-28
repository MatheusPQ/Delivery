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
								<a href="/item/{{$item->id}}" class="item__container">
									<img src="{{$item->imagemItem}}">
									<div class="item__text">
										<h2>{{$item->nomeItem}}</h2>
										<p>{{$item->descItem}}</p>
										<p>R$ {{$item->precoItem}}</p>
									</div>
								</a>
							</li>
						@endforeach
							{{--  <li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-02.png">
									<div class="item__text">
										<h2>Combo 2</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-03.png">
									<div class="item__text">
										<h2>Combo 2</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-04.png">
									<div class="item__text">
										<h2>Combo 3</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-05.png">
									<div class="item__text">
										<h2>Combo 4</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-06.png">
									<div class="item__text">
										<h2>Combo 5</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-07.png">
									<div class="item__text">
										<h2>Combo 6</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>
							<li class="int__item">
								<a href="#" class="item__container">
									<img src="img/icon-08.png">
									<div class="item__text">
										<h2>Combo 7</h2>
										<p>Descrição do Produto</p>
										<p>R$ 20,00</p>
									</div>
								</a>
							</li>  --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop