@extends('backend.layout.master')
@section('content')
    <div class="row mt-2 mb-2">
        <div class="col-lg-12">

        	<h2 class="relative heading-title-outer">Add Subscriber
                <!--<a class="btn btn-success heading-title" href="">
                    Update
                </a>-->
            </h2>
            
        </div>
    </div>

    <!-- Sucess Message -->
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">

            {{ session()->get('success') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        </div>
    @endif
    <!-- /Sucess Message -->

<div class="card">


    <div class="card-body">

    	<form action="{{ route('store_subs') }}" method="post" enctype='multipart/form-data'>
 
    		{{ csrf_field() }}

	    	<div class="row">

		        <div class="col-md-12">
		        	
		        	<div class="form-group">
		        	    <label for="email">Subscriber Email:</label>
		        	    <input type="text" value="{{ old('email') }}" name="email" class="form-control" id="name" required="">
		        	</div>

                    <div class="form-group">
                        <label for="pwd">Select List:</label>
                        {{ Form::select('slist', $slists, null, ['class' => 'form-control']) }}
                    </div>

		        	<div class="form-group">
		        	    <input type="submit" value="Add Subscriber" class="form-control btn btn-success submit-button">
		        	</div>

		        </div>

	    	</div>

    	</form>

    </div>

</div>
@endsection
@section('scripts')
@endsection
