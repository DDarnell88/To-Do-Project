$(document).ready(function(){
    $('#form').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "To_Do.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data){
                $("#result").html(data);
            },
            error: function(){
                alert("Form submission failed!");
            }
        });
    });
});
