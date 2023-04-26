$("#button-blue").on("click", function() {
    
    var txt_nome = $("#name").val();
    var txt_email = $("#email").val();
    var txt_comentario = $("#comment").val();

    $.ajax({
        url: "",
        
        type: "post",
        data: {name: txt_name, comment: txt_comment, email: txt_email},
        beforeSend: function() {
        
            console.log("Working...");

        }
    }).done(function(e) {
        alert("Done!");
    })

});