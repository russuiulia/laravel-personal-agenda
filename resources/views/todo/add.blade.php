@extends('layouts.app')

@section('content')
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Adăugați un eveniment</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('todo.index') }}" class="btn btn-primary">Înapoi</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
			<form action="{{ route('todo.store') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="title">Titlu:</label>
					<input type="text" class="form-control" id="title" name="title">
				</div>
				<div class="form-group">
					<label for="description">Descriere:</label>
					<textarea name="description" class="form-control" id="description" rows="5"></textarea>
				</div>
				<div class="form-group">
				<label for="status">Selectați statusul</label>
				<select class="form-control" id="status" name="status">
					<option value="pending">În desfășurare</option>
					<option value="completed">Completat</option>
				</select>
				</div>
				<button type="submit" class="btn btn-primary">Adaugă</button>
			</form>
        </div>
    </div>
</div>
@endsection