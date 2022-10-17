<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="\views\Student_create.blade.php" class="btn btn-outline-primary">Add new
				student</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
                        <th scope="col" class="pr-5">ID</th>
						<th scope="col">Full name</th>
						<th scope="col">Birthday</th>
						<th scope="col">Address</th>
					</tr>
				</thead>
				<tbody>
					@forelse($Student as $item)
					<tr>
						<td>{!! $item->id !!}</td>
						<td class="pr-5 text-right">{!! $item->fullname !!}</td>
						<td>{!! $item->birthday !!}</td>
                        <td>{!! $item->address !!}</td>
						{{-- <td><a href="product/{!! $product->id !!}/edit"
							class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger ml-1"
								onClick='showModel({!! $product->id !!})'>Delete</button></td> --}}
					</tr>
					@empty
					<tr>
						<td colspan="3">No Students found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>


{{-- <div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div> --}}

<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'student/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
@endsection


</body>
</html>