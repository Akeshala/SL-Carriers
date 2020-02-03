<?php
$connect = mysqli_connect("localhost", "root", "", "registration");
$output = '';
$search = '';

if (isset($_POST["query"])) {

	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM usersall 
	WHERE username LIKE '%" . $search . "%'
	OR field LIKE '%" . $search . "%' 
	OR position1 LIKE '%" . $search . "%' 
	OR position2 LIKE '%" . $search . "%' 
	OR cityname LIKE '%" . $search . "%' 
	";
} else {
	$query = "
	SELECT * FROM userall ORDER BY id";
}
$result = mysqli_query($connect, $query);

if ($search != '') {

	if (mysqli_num_rows($result) > 0) {
		$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Userame</th>
							<th>Field</th>
							<th>Position requiring 1</th>
							<th>Position requiring 2</th>
							<th>City</th>
							<th>CV</th>
						</tr>';
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
			<tr>
				<td>' . $row["username"] . '</td>
				<td>' . $row["field"] . '</td>
				<td>' . $row["position1"] . '</td>
				<td>' . $row["position2"] . '</td>
				<td>' . $row["cityname"] . '</td>
				<td>' . $row["cv"] . '</td>

			</tr>
		';
		}
		echo $output;
	} else {
		echo 'Data Not Found';
	}
}
