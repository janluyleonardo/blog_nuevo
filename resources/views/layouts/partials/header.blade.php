<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header>
                <h1>Blog MORJAN1</h1>
                <div class="bg-info clearfix">
                    <button type="button" class="btn btn-secondary padding">
                        <a href="{{ route('home') }}" class="{{ request()->routeIS('home') ? 'active' : '' }}" class="button">Home</a>
                    </button>
                    <button type="button" class="btn btn-secondary padding">
                        <a href="{{ route('cursos.index') }}" class="{{ request()->routeIS('cursos.*') ? 'active' : '' }}">Cursos</a>
                    </button>
                    <button type="button" class="btn btn-secondary padding">
                        <a href="{{ route('nosotros') }}" class="{{ request()->routeIS('nosotros') ? 'active' : '' }}">Nosotros</a>
                    </button>
                    <button type="button" class="btn btn-secondary padding">
                        <a href="{{ route('contacto') }}" class="{{ request()->routeIS('contacto') ? 'active' : '' }}">Contáctanos</a>
                    </button>
                </div>
            </header>
        </div>
    </div>
</div>
