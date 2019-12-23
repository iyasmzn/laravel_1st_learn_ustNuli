<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
</head>
<body>
	@foreach($category as $row)
	- {{ $row->name }}
	@endforeach

	<?php 
		foreach ($category as $row) {
			echo "- ".$row->name;
		}
	?>
</body>
</html>