    
    <div class="form-group">
        <label class="control-label" for="Nombre">{{'Nombre'}}</label>
        <input class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" type="text" name="Nombre" id="Nombre" 
        value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
        {!! $errors->first('Nombre','<div class="invalid-feedback"> :message</div>')!!}
    </div>

        
    <div class="form-group">
        <label class="control-label" for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
        <input class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" type="text" name="ApellidoPaterno" id="ApellidoPaterno" 
        value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
        {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback"> :message</div>')!!}
    </div>
    

    <div class="form-group">
        <label class="control-label"for="ApellidoMaterno">{{'Apellido Materno'}}</label>
        <input class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" type="text" name="ApellidoMaterno" id="ApellidoMaterno" 
        value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
        {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback"> :message</div>')!!}
    </div>
    
    <div class="form-group">
        <label class="control-label"for="Correo">{{'Correo'}}</label>
        <input class="form-control {{$errors->has('Correo')?'is-invalid':''}}" type="email" name="Correo" id="Correo" 
        value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
        {!! $errors->first('Correo','<div class="invalid-feedback"> :message</div>')!!}
    </div>
    
    <div class="form-group">
        <label class="control-label"for="Foto">{{'Foto'}}</label>
    
        @if (isset($empleado->Foto ))
            <br>
                <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
            <br>
        @endif
            
        <input  class="form-control {{$errors->has('Foto')?'is-invalid':''}}" type="file" name="Foto" id="Foto" value="">
        {!! $errors->first('Foto','<div class="invalid-feedback"> :message</div>')!!}
    </div>
       
    <input class="btn btn-success img-thumbnail img-fluid"  type="submit" value="{{$Modo=='crear' ? 'Agregar empleado':'Modificar'}}">
    <a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>