@extends('layouts.app')

@section('content')

    <div class="container">

    @if(Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{Session::get('Mensaje')}}
        </div>
    
    @endif

    <a class="btn btn-success" href="{{url('empleados/create')}}">Agregar Empleados</a>
    <br>
    <br>
        <table class="table table-light table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img class="img-thumbnail img-fluid"src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100"></td>
                            <td>{{$empleado->Nombre}} {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}}</td>
                            <td>{{$empleado->Correo}}</td>
                            <td>
                            <a class="btn btn-warning" href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
                                 
                                <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" style="display:inline">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                                </form>    
                            </td>
                        </tr>    
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                    </tr>
                </tfoot>
            </table>
        
        
        
        
            {{ $empleados->links() }}
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        </div>
        
@endsection