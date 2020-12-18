<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

 
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="color:#777"><span style="font-size:15pt"></span> Hotel la Rivera</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
                

                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ Request::is('hotel') && ! Request::is('hotel')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="{{url('hotel')}}"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            hotel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('hotel/mision-vision')}}">Mision y Vision</a>
                     <a class="dropdown-item" href="{{url('hotel/ubicacion')}}">Ubicacion</a>
                     
                    </div>
                    </div>
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ Request::is('servicios') && ! Request::is('servicios')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="{{url('servicios')}}"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('servicios/habitaciones')}}">Habitaciones</a>
                <a class="dropdown-item" href="{{url('servicios/eventos/{id}')}}">Eventos</a>
                
                    </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown {{ Request::is('clientes') && ! Request::is('clientes')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="{{url('clientes')}}"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            clientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('clientes/cliente')}}">visualizar</a>
                
                    
                    </div>
                    </div>
                
                        
                        
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('reservas') && ! Request::is('reservas')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/reservas')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Reservas
                        </a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('facturacion') && ! Request::is('facturacion')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('facturacion')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            facturacion
                        </a>
                        
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('contactos') && ! Request::is('contactos')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('contactos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            contactos
                        </a>
                        
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('consultas') && ! Request::is('consultas')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/consultas')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Consultas
                        </a>
                    </li>
             
                

                
            </div>
        @endif
    </div>
</nav>
