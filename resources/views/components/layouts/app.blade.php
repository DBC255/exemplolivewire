<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <title>{{ $title ?? 'Page Title' }}</title>

        @livewireStyles
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-dark border-botton border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Gerenciador de Tarefas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('tarefa.index') }}">Tarefas</a>
                        <a class="nav-link" href="{{ route('tarefa.create') }}">Nova Tarefa</a>
                    </div>
                </div>

            </div>
        </nav>

        <div class="container">
        {{ $slot }}
        </div>
        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    </body>
</html>
