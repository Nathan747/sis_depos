<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<script>
    $("#boton-invitado").click(function(){
        $(".padre-mensaje-admin").animate({
            top: "-200px"
        },function(){
        $(".padre-mensaje-admin").animate({
            top: "0px"
        });
        });
        var email_invitado = $("#email-invitado").val();
        console.log(email_invitado);
        
    });
</script>