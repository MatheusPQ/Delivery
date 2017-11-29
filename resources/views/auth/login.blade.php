@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="login__container row">
					<div class="col-xs-12 col-md-6">
						<figure class="login__img">
							<img src="img/icon-copo.png" />
						</figure>
					</div>
					<div class="col-xs-12 col-md-6">
						<h1>Login</h1>
						<form method="post" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="email">Usuário</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="password">Senha</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
							<button type="submit" class="btn btn-login btn-lg">Entrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
