<?php  
                if ($this->session->has_userdata('newsession')){
                    if ($this->session->newsession==="yes"){

    ?>
                        

                           <!-- Contenido de la página -->
    <div class="container">

        <!-- Encabezado de página / Breadcrumb -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Perfil de usuario
                    <small>editando datos</small>
                </h1>
                <ol class="breadcrumb">
                    
                    <li class="active">Perfil de usuario</li>
                    <li><a href="<?php echo base_url('perfil/editar');?>">Editar Perfil</a></li>
                    
                </ol>
            </div>
        </div>
        <!-- Fin Encabezado de página / Breadcrumb -->

        <!-- Contact Form -->
        <!-- Campos del formulario de contacto con validación de campos-->
        <div class="row">
            <!-- Columna de la izquierda -->
            <div class="col-md-3">
                <div class="col-md-12" align="center">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url($foto);?>">
                </div>
                <div class="col-md-12">
                    <p class="text-center"><strong><?php echo $nombre_completo ?></strong></p>
                     <p class="text-center"><strong><?php echo $profesion; ?></strong></p>

                </div>

                <div class="col-md-12 text-center">
                   <!-- Redes sociales-->
                   <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-linkedin-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                    <!-- Fin redes sociales -->
                </div>

                <div class="col-md-12">
                <!-- Barra vertical de opciones del perfil de usuairo -->
                    <br >
                    <ul class="list-group list-primary">
                        <a href="<?php echo base_url('perfil');?>" class="list-group-item">Mi perfil</a>
                        <a href="<?php echo base_url('perfil/editar');?>" class="list-group-item">Editar Perfil</a>
                        <a href="<?php echo base_url('perfil');?>" class="list-group-item">Donar</a>
                    </ul>
                </div>
                <!-- Fin Barra vertical de opciones del perfil de usuario -->
            </div>
            <!-- Fin de Columna de la izquierda -->

            <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
                </div>

                    <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">

                    <p style="text-align: center"><?php echo $biografia; ?></p>
                </div>

                        

            </div>  
            <!-- Fin del div de parte central -->

        &nbsp;
        <hr>

                        <?php
                    }else{
                        if ($this->session->newsession==="no"){
                            ?>
               
                            <?php
                        }
                    }
                }else{
                    ?>
   
                        <?php
                    }
                    ?>
 