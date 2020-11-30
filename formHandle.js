$(document).ready(function(){
    $('#form').submit(function(event){
        event.preventDefault();
		var newData = $('#form').serializeArray();
        $.ajax({
            url: "To_Do.php",
            type: "post",
            data: newData,
            success: function(data){
			//$('#result tbody').append("<tr><th></th><td>" + newData[0].value + "</td><td>" + newData[1].value + "</td><td>" + newData[2].value + "</td></tr>");
            $('#result').load("index.php #result");
			$('#form').trigger("reset");
			},
            error: function(){
                alert("Form submission failed!");
            }
		});
    });	
});
