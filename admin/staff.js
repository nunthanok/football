$(document).ready(function(){
    $("#add_staff").submit(function(event){
        event.preventDefault();
        /* 
        var formData = {
            'name' : $('name').val(),
            'username' : $('username').val(),
            'password' : $('password').val(),
            'phone' : $('phone').val()
        };

            $.ajax({

                type: 'POST',
                url: 'insert_staff.php',
                data: formData,
                dataType: 'json',
                encode : true
            }).done(function(data){
                console.log(data);
            });

            */

            $.ajax({
                type: "POST",
                url: "insert_staff.php",
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);
                    // $("#feedback").html(message)
                    $("#myModal").modal('hide'); 
                    $("#add_staff")[0].reset();
                },
                error: function(){
                    alert("Error");
                }
            });

           

    });
});