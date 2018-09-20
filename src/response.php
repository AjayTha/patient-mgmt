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

    $.ajax({
        type: 'POST',
        url: 'nextresponse.php',
        data: { text1: val1, text2: val2 ,text3:val3 ,text4:val4,text5:val5 },
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
        <input type="text" id="text2" placeholder="Hospital Name"><br><br><br>
        <input type="text" id="text3" placeholder="Doctor Appointed"><br><br><br>
        <input type="text" id="text4" placeholder="Appointment Time and date"><br><br><br>
        <input type="text" id="text5" placeholder="Fees"><br><br><br>
        <input type="text" id="text6" placeholder="Enter Hospital ID"><br><br><br>
        <button id="button"> Submit </button>
		<div id="result"></div>
</body>
</html>