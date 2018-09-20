<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="jquery.js"></script>
	<script>
	$(document).ready(function() {
	$('#button').click(function() {
    var val1 = $('#text1').val();
    var val2 = $('#text2').val();
    var val3 = $('#text3').val();
    var val4 = $('#text4').val();
    var val5 = $('#text5').val();
    var val6 = $('#text6').val();
    $('#result').html="bhj";

    $.ajax({
        type: 'POST',
        url: 'report2.php',
        data: { text1: val1, text2: val2 ,text3:val3 ,text4:val4 ,text5:val5 ,text6:val6 },
        success: function(response) {
            $('#result').html(response);
        }
    });
});
});
</script>

</head>
<body style="background-color: yellow">

<br><br>

<div id="result"></div>

<center>
<label>
	Patient's Name <br><br><input type="text" id="text1" maxlength="25"><br><br>
    Problem <br><br><input type="text" id="text2" maxlength="25"><br><br>
	Hospital Name <br><br><input type="text" id="text3" maxlength="25"><br><br>    
	Expected Recovery Time<br><br><input type="text" id="text4" maxlength="25"><br><br>
	 Hospital charge<br><br><input type="text" id="text5" maxlength="25"><br><br>
	Description<br><br><textarea rows="10" cols="20" id="text6"></textarea><br><br>
<button type="button" id="button">Submit</button>	</label></center>

</body>
</html>

