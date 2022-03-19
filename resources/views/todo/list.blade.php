@extends('layouts.app')

@section('content')
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Lista de evenimente</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('todo.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Adăugați un nou eveniment</a>
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
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        	<table class="table table-bordered">
				<thead class="thead-light">
					<tr>
						<!-- <th width="5%">#</th> -->
						<th>Numele evenimentului</th>
						<th width="10%"><center>Statusul evenimentului</center></th>
						<th width="20%"><center>Acțiunea</center></th>
					</tr>
				</thead>
				<tbody>
					@forelse ($todos as $todo)
					    <tr>
							<!-- <th>{{ $todo->id }}</th> -->
							<td>{{ $todo->title }}</td>
							<td><center>{{ $todo->status }}</center></td>
							<td>
								<div class="action_btn">
									<div class="action_btn">
										<a href="{{ route('todo.edit', $todo->id)}}" class="btn btn-warning">Editează</a>
									</div>
									<div class="action_btn margin-left-10">
										<form action="{{ route('todo.destroy', $todo->id)}}" method="post">
											@csrf
											@method('DELETE')
											<button class="btn btn-danger" type="submit">Șterge</button>
										</form>
									</div>
								</div>
							</td>
						</tr>
					@empty
					    <tr>
							<td colspan="4"><center>Nu există date. </center></td>
						</tr>
					@endforelse
				</tbody>
			</table>
        </div>
    </div>
</div>
@endsection