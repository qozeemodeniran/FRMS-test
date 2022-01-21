<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEES DATA</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.getJSON('http://localhost/FRMS-test/api-read.php', function(json){
                var tr=[];
				for (var i = 0; i < json.length; i++) {
					tr.push('<tr>');
					tr.push('<td>' + json[i].id + '</td>');
					tr.push('<td>' + json[i].employee_id + '</td>');
                    tr.push('<td>' + json[i].name + '</td>');
                    tr.push('<td>' + json[i].address + '</td>');
                    tr.push('<td class="count-me">' + json[i].salary + '</td>');
					tr.push('</tr>');
				}
				$('table').append($(tr.join('')));
			});
        });
    </script>
</head>
<body>
    <table id="myTable" border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Id</th>
			<th>Employee ID</th>
			<th>Name</th>
            <th>Address</th>
            <th>Salary</th>
		</tr>
	</table>
    <span id="val"></span>
    <script type="text/javascript">
        var table = document.getElementById("myTable");
        let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
            return total + parseFloat(row.cells[5].innerHTML);
        }, 0);
        document.getElementById("val").innerHTML = "Salary Total = NGN " + subTotal.toFixed(2);
    </script>
</body>
</html>