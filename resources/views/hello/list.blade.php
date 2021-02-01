<!DOCTYPE html>
<html>
<head>
	<title>速習laravel</title>
	<link rel="stylesheet" type="text/css" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>書名</th>
				<th>価格</th>
				<th>出版社</th>
				<th>刊行日</th>
			</tr>
		</thead>
		<tbody>
			@foreach($records as $id => $record)
			<tr>
				<td>{{$id + 1}}</td>
				<td>{{$record->title}}</td>
				<td>{{$record->price}}</td>
				<td>{{$record->publisher}}</td>
				<td>{{$record->published}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>



</body>
</html>