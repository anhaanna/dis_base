<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('/dashboard')}}" method="post">
		{{ csrf_field() }}
		<h1>asdasdasdada</h1>
		<input placeholder="email" type="" name="email">
		<input placeholder="password" type="" name="password">
		<a href="">forgot password</a>
		<button>LOGIN</button>
	</form>
</body>
</html>