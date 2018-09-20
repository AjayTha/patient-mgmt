<!DOCTYPE html>
<html>
<head>
	<title>Commenting</title>
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

    $.ajax({
        type: 'POST',
        url: 'process.php',
        data: { text1: val1, text2: val2 ,text3:val3 ,text4:val4 ,text5:val5 ,text6:val6 },
        success: function(response) {
            $('#result').html(response);
        }
    });
});
});


	</script>
</head>
<body>
      	<input type="text" id="text1" placeholder="Enter Patient's Name"> <br><br><br>
        <input type="text" id="text2" placeholder="Enter Age"><br><br><br>
        <input type="text" id="text3" placeholder="Symptoms of Illness"><br><br><br>
        <input type="text" id="text4" placeholder="Hospital Name"><br><br><br>
        <input type="text" id="text5" placeholder="Preferred Timing of Appointment"><br><br><br>
        <input type="text" id="text6" placeholder="Contact"><br><br><br>
        <button id="button"> Submit </button>
		<div id="result"></div>
</body>
</html>