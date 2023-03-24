@extends('includes.includes')
@section('styles')
<style>

  /* Grid */
  body > main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: calc(100vh - 7rem);
    padding: 1rem 0;
  }

  article {
    padding: 0;
    overflow: hidden;
  }

  article div {
    padding: 1rem;
  }

  @media (min-width: 576px) {
    body > main {
      padding: 1.25rem 0;
    }

    article div {
      padding: 1.25rem;
    }
  }

  @media (min-width: 768px) {
    body > main {
      padding: 1.5rem 0;
    }

    article div {
      padding: 1.5rem;
    }
  }

  @media (min-width: 992px) {
    body > main {
      padding: 1.75rem 0;
    }

    article div {
      padding: 1.75rem;
    }
  }

  @media (min-width: 1200px) {
    body > main {
      padding: 2rem 0;
    }

    article div {
      padding: 2rem;
    }
  }

  /* Nav */
  summary[role="link"].secondary:is([aria-current],:hover,:active,:focus) {
    background-color: transparent;
    color: var(--secondary-hover);
  }

  /* Hero Image */
  article div:nth-of-type(2) {
    display: none;
    background-color: #039be5;
    background-image: url("https://picocss.com/examples/sign-in/assets/alessio-soggetti-8jeWeKdygfk-unsplash-1000x1200.jpg");
    background-position: center;
    background-size: cover;
  }

  @media (min-width: 992px) {
    .grid > div:nth-of-type(2) {
      display: block;
    }
  }

  /* Footer */
  body > footer {
    padding: 1rem 0;
  }

  .login-message{
      background-color: lightcoral;
      padding: 12px 0;
      color: #ffffff;
      text-align: center;
      border-radius: 10px;
  }

</style>
@endsection
@section('content')
<article class="grid">
    <div>

        <hgroup>
        <h1>Iniciar sesión</h1>
        <h2>Inicie sesión para continuar</h2>
        </hgroup>
        @error ('username')
            <p class="login-message">{{ $message }}</p>
        @enderror
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="username" placeholder="Usuario" aria-label="Usuario" autocomplete="user" value="{{ old('username') }}" required>
        <input type="password" name="password" placeholder="Contraseña" aria-label="Contraseña" autocomplete="current-password" required>
        <fieldset>
            <label for="remember">
            <input type="checkbox" role="switch" id="remember" name="remember">
              Recordarme
            </label>
        </fieldset>
        <button type="submit" class="contrast">Iniciar sesión</button>
        </form>
    </div>
    <div></div>
</article>
@endsection