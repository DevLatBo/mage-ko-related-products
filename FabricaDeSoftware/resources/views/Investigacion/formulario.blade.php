
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
                            {{ Form::checkbox('area[]',$area->id,false) }}{{$area->nombre }}<br>
                        @endforeach
                    </div>
                </div>
                <br>