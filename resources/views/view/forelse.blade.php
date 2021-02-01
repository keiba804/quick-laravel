<body>
	<table class="table">
		<thead>
			<tr>
				<th>書名</th>
				<th>価格</th>
				<th>出版社</th>
				<th>刊行日</th>
			</tr>
		</thead>
		<tbody>
@forelse($records as $reacord)
			<tr>
				<td>{{$record->title}}</td>
				<td>{{$record->price}}</td>
				<td>{{$record->publisher}}</td>
				<td>{{$record->published}}</td>
			</tr>
@empty
<p>データなし</p>
@endforelse
		</tbody>
	</table>