@extends("$routeAmbient.template.index")

@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route("$routeAmbient.$routeCrud.$routeMethod") }}" class="h1"><b>Mentoria</b>PN1</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Faça login!</p>

                <form action="{{ route("login") }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Acessar</button>
                        </div>
                    </div>
                </form>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-default">
                        <i class="fa fa-lock mr-2"></i> Perdi minha senha
                    </a>
                    <a href="{{ route("register") }}" class="btn btn-block btn-danger">
                        <i class="fa fa-user-plus mr-2"></i> Não tenho conta
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
