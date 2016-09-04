<div class="control-group">
    {{ Form::label("Nombre: ") }}
    <div class="controls">
    	{!! Form::text('titulo',null,["class"=>"form-control","placeholder"=>"Titulo..."]) !!}
    </div>
</div>
<div class="control-group">
    {{ Form::label("Descripcion: ") }}
    <div class="controls">
    	{!! Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>4]) !!}
    </div>
</div>
<br>