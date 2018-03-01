<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($employee)?'Editar':'Nuevo'}} Empleado</h1>
        <hr/>
        @if(isset($employee))
            {!! Form::model($employee,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("id","Identidad",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("id",null,["class"=>"form-control".($errors->has('id')?" is-invalid":""),"autofocus",'placeholder'=>'Identidad']) !!}
                <span id="error-id" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("name","Nombre",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')?" is-invalid":""),"autofocus",'placeholder'=>'Nombre']) !!}
                <span id="error-name" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("email","Email",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::email("email",null,["class"=>"form-control".($errors->has('email')?" is-invalid":""),'placeholder'=>'Email']) !!}
                <span id="error-email" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label("address","Dirección",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("address",null,["class"=>"form-control".($errors->has('address')?" is-invalid":""),'placeholder'=>'Dirección']) !!}
                <span id="error-address" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label("phone","Teléfono",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("phone",null,["class"=>"form-control".($errors->has('phone')?" is-invalid":""),'placeholder'=>'Teléfono']) !!}
                <span id="error-phone" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label("position","Posición",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("position",null,["class"=>"form-control".($errors->has('position')?" is-invalid":""),'placeholder'=>'Posición']) !!}
                <span id="error-position" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label("gender","Género",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::select("gender",['male'=> 'Masculino', 'female' => 'Femenino'],null,["class"=>"form-control".($errors->has('gender')?" is-invalid":"")]) !!}
                <span id="error-gender" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label("age","Edad",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("age",null,["class"=>"form-control".($errors->has('age')?" is-invalid":""),'placeholder'=>'Edad']) !!}
                <span id="error-age" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label("salary","Salario",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("salary",null,["class"=>"form-control".($errors->has('salary')?" is-invalid":""),'placeholder'=>'Salario']) !!}
                <span id="error-salary" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label("isOnline","En Línea",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::select("isOnline",['1' => 'SI', '0' => 'NO'],null,["class"=>"form-control".($errors->has('isOnline')?" is-invalid":"")]) !!}
                <span id="error-isOnline" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('employees')}}')" class="btn btn-danger btn-xs"> Regresar</a>
                {!! Form::button("Grabar",["type" => "submit","class"=>"btn btn-primary btn-xs"])!!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>