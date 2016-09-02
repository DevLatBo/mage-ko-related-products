<div class="control-group">
    {{ Form::label("Nombre: ") }}
    <div class="controls">
    	{!! Form::text('nombre',null,["class"=>"form-control","placeholder"=>"Investigacion..."]) !!}
    </div>
</div>
<div class="control-group">
    {{ Form::label("Descripcion: ") }}
    <div class="controls">
    	{!! Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>5]) !!}
    </div>
</div>
<div class="control-group">
    {{Form::label("Areas: ")}}
    <div class="controls">
        @foreach($areas as $area)
            @if(!$bandera)
                {{ Form::checkbox('area[]',$area->id,false) }}{{$area->nombre }}<br>
            @else
                <?php
                    $checked=false;
                    if(in_array($area->id, $seleccionadas)) $checked=true;
                ?>
                {{Form::checkbox('area[]',$area->id,$checked)}}{{$area->nombre}}<br>
            @endif
        @endforeach
    </div>
</div>
<br>