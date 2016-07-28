@if(count($errors)>0)
	<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
        
        	@foreach($errors->all() as $error)
        		<p><strong>{!! $error !!}</strong></p>
        	@endforeach
    </div>
@endif