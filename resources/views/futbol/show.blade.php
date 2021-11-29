@extends('futbol.layout')
@section('title','vista')
@section('content')
{{-- contenedor --}}
<div class="container-fluid">
    <div class="container py-5">
        <div class="row">
            {{-- contenedor 1 --}}
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">posicion</th>
                            <th scope="col">equipo</th>
                            <th scope="col">gol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locales as $local)
                        <tr>
                            <td>local</td>
                            <td>{{$local->equ_local}}</td>
                            <td>{{$local->goles_local}}</td>
                        </tr>
                        <tr>
                            <td>visitante</td>
                            <td>{{$local->equ_visitante}}</td>
                            <td>{{$local->goles_visitante}}</td>
                        </tr>
                        <tr>
                            <td>---</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- end contenedor 1 --}}
            {{-- contenedor 2 --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/futbol')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">local</label>
                                <select name="equ_local" class="form-select">
                                    <option value="">Disabled select</option>
                                    @foreach ($equipos as $equipo)
                                    <option value="{{$equipo['name_equipo']}}">{{ $equipo['name_equipo'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">visitante</label>
                                <select name="equ_visitante" class="form-select">
                                    <option value="">Disabled select</option>
                                    @foreach ($equipos as $equipo)
                                    <option value="{{$equipo['name_equipo']}}">{{ $equipo['name_equipo'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="disabledSelect" class="form-label">goles locales</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="goles_local" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="disabledSelect" class="form-label">goles visitante</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="goles_visitante" class="form-control">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Button</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            {{-- end contenedor 2 --}}
            {{-- contenedor 3 --}}
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">equipo</th>
                            <th scope="col">tr</th>
                            <th scope="col">ta</th>
                            <th scope="col">pj</th>
                            <th scope="col">sueldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($date as $dato)
                        <tr>
                            <td>{{$dato->id}}</td>
                            <td>{{$dato->name}}</td>
                            <td>{{$dato->name_equipo}}</td>
                            <td>{{$dato->tr}}</td>
                            <td>{{$dato->ta}}</td>
                            <td>{{$dato->pj}}</td>
                            <td>{{$dato->sueldo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- end contenedor 3 --}}
        </div>
    </div>
</div>
{{-- end contenedor --}}
{{-- contenedor --}}
<div class="container-fluid">
    <div class="container py-5">
        <div class="row">
            {{-- contenedor 1 --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/form')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">nombre</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="disabledSelect" class="form-label">equipo</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="name_equipo" id="disabledSelect" class="form-select">
                                        <option value="">Disabled select</option>
                                        @foreach ($equipos as $equipo)
                                        <option value="{{$equipo['name_equipo']}}">{{ $equipo['name_equipo'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="disabledSelect" class="form-label">edad</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="edad" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="disabledSelect" class="form-label">sueldo</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="sueldo" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">tr</label>
                                <input class="form-check-input" type="radio" name="tr" id="inlineRadio1"
                                    value="✓">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">ta</label>
                                <input class="form-check-input" type="radio" name="ta" id="inlineRadio2"
                                    value="✓">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">pj</label>
                                <input class="form-check-input" type="radio" name="pj" id="inlineRadio2"
                                    value="✓">
                            </div>
                            <br><br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Button</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            {{-- end contenedor 1 --}}
            {{-- contenedor 2 --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/formdos')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="disabledSelect" class="form-label">nombre</label>
                                </div>
                                <div class="col-md-4">
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label for="disabledSelect" class="form-label">num jugadores</label>

                                </div>
                                <div class="col-md-4">
                                    <input name="num_jugadores" type="number" class="form-control">

                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="disabledSelect" class="form-label">ciudad</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="name_ciudad" id="disabledSelect" class="form-select">
                                        <option value="">Disabled select</option>
                                        @foreach ($equipos as $equipo)
                                        <option value="{{$equipo['name_ciudades']}}">{{ $equipo['name_ciudades'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="disabledSelect" class="form-label">division</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="name_equipo" id="disabledSelect" class="form-select">
                                        <option value="">Disabled select</option>
                                        @foreach ($equipos as $equipo)
                                        <option value="{{$equipo['name_equipo']}}">{{ $equipo['name_equipo'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end contenedor 2 --}}
            {{-- contenedor 3 --}}
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">ciudad</th>
                            <th scope="col">num jugadores</th>
                            <th scope="col">división</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($date_jugadores as $date_jugador)
                        <tr>
                            <td>{{$date_jugador->id}}</td>
                            <td>{{$date_jugador->name}}</td>
                            <td>{{$date_jugador->name_ciudad}}</td>
                            <td>{{$date_jugador->num_jugadores}}</td>
                            <td>{{$date_jugador->name_equipo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            {{-- end contenedor 3 --}}
        </div>
        {!!$locales->links()!!}
    </div>
    
</div>
{{-- end contenedor --}}
@endsection