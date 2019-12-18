@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modificar Asociación</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($medicamento_tratamiento, [ 'route' => ['medicamento_tratamientos.update',$medicamento_tratamiento->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!!Form::label('medicamento_id', 'Medicamento') !!}
                            <br>
                            <select id="medicamento_id" name="medicamento_id" class="form-control">
                                @foreach($medicamentos as $medicamento)
                                    <option value={{$medicamento->id}}> {{$medicamento->nombre_comercial}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!!Form::label('tratamiento_id', 'Tratamiento') !!}
                            <br>
                            <select id="tratamiento_id" name="tratamiento_id" class="form-control">
                                @foreach($tratamientos as $tratamiento)
                                    <option value={{$tratamiento->id}}> {{$tratamiento->cita->paciente->fullname}}/{{$tratamiento->fecha_inicial}}:{{$tratamiento->fecha_final}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('unidades', 'Unidades del medicamento') !!}
                            {!! Form::text('unidades',$medicamento_tratamiento->unidades,['class'=>'form-control','required','autofocus']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('frecuencia', 'Frecuencia del consumo') !!}
                            {!! Form::text('frecuencia',$medicamento_tratamiento->frecuencia,['class'=>'form-control','required','autofocus']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('instrucciones', 'Instrucciones') !!}
                            {!! Form::text('instrucciones',$medicamento_tratamiento->instrucciones,['class'=>'form-control','required','autofocus']) !!}

                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
