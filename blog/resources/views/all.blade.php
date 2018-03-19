<!DOCTYPE html>
<html>
<head>
	<title>Laravel exercise</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td><a href="/user/{{ $user->id }}">Detail</a></td>
			<td><a href="/user/delete{{ $user->id }}">Delete</a></td>
			<td><a href="/user/edit{{ $user->id }}">Edit</a></td>
		</tr>
		@endforeach	
	</table>
</body>
</html>