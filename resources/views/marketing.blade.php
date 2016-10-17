@extends('app')

@section('body-class', 'home')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			SimpleHosting
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="hero">
	<div class="container">

        <div class="content">
            <h1>¿Necesitas ayuda?</h1>
            <p>Llegaste al lugar correcto <i class="fa fa-hearth"></i></p>
        </div>

        @include('partials/browser')


        <div class="callout rule">
            <span class="text">Busca información tanto si eres principiante o experto</span>
        </div>

        <div class="callouts">
            <a href="/content" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Primeros pasos</div>
                    <div class="callout-icon">{!! svg('scout')!!}</div>
                </div>
                <p>Te explicamos desde cómo comprar tu dominio hasta como configurar tus correos</p>
            </a>

            <a href="/content" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Próximamente más...</div>
                    <div class="callout-icon"></div>
                </div>
                <p>Próximamemente agregaremos más información y contenido</p>
            </a>
        </div>
	</div>
</section>

<section class="panel light" id="ecosystem">
    <h1>SimpleHosting</h1>
    <p class="intro">Cambiando la manera de ofrecer hosting</p>

    <div class="container">
        <a href="https://simplehosting.cl" class="callout full simplehosting">
            <div class="content">
                <h2>SimpleHosting</h2>
                <p>Nuestro objetivo es ofrecer un servicio excepcional, con atención personalizada en todos nuestros planes.</p>
                <p>Queremos que te enfoques en tu empresa, no en tu hosting.</p>
            </div>
            <img style="border-radius: 10px" src="https://s3-sa-east-1.amazonaws.com/simplehosting.cl/images/simplehosting-web-preview.gif" alt="Forge UI Preview" height="350" />
        </a>

    </div>
</section>
@endsection
