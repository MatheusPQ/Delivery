@extends('app')

@section('conteudo')
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="int__container row">
					<div class="col-xs-12">
						<h1>Adicionar item no cardápio</h1>
					</div>
					
					<form action="{{ route('produto.salvar') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }} 
						<div class="form-group">
							<label for="nomeItem">Nome: </label>
							<input type="text" class="form-control" id="nomeItem" name="nomeItem" placeholder="Nome do item" required>
						</div>
						<div class="form-group">
							<label for="descItem">Descrição: </label>
							<textarea type="text" class="form-control" id="descItem" name="descItem" placeholder="Informações sobre o novo item" required></textarea>
						</div>
						<div class="form-group">
							<label for="precoItem">Preço: </label>
							{{--  <input type="text" class="form-control" id="nomeItem" placeholder="Nome do item">  --}}
							<input class="form-control" type="number" step=".50" placeholder="0,00" id="precoItem" name="precoItem" required>
						</div>
						<div class="form-group">
							<label for="imagemItem">Imagem: </label>
							<input type="file" class="form-control-file" name="imagemItem" accept="image/png, image/jpeg" id="imagemItem" aria-describedby="fileHelp" required>
							<small id="fileHelp" class="form-text text-muted">
								Imagem do produto.
							</small>
						</div>
						<div class="button-group">
							<a href="/produto">Voltar</a>
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