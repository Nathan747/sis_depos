<div class="contenedor-editar-colaborador">
    <div class="padre-colaborador">
        <div class="contenedor-titulo">
		    <div class="col-lg-12">
                <h1>Editar perfil</h1>
            </div>
        </div>
        <div class="col-lg-12"><div class="separador"></div></div>
        <form role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="nombre-perfil-colaborador">Nombre</label>
                    <input type="nombre" name="nombre-perfil-colaborador" class="form-control" id="nombre-perfil-colaborador" value="<?php echo $colaborador["nombre"] ?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="apellido-perfil-colaborador">Apellido</label>
                    <input type="nombre" name="apellido-perfil-colaborador" class="form-control" id="apellido-perfil-colaborador" value="<?php echo $colaborador["apellido"] ?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email-perfil-colaborador">Email</label>
                    <input type="nombre" name="email-perfil-colaborador" class="form-control" id="email-perfil-colaborador" value="<?php echo $colaborador["email"] ?>" disabled>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="telefono-perfil-colaborador">Teléfono</label>
                    <input type="nombre" name="telefono-perfil-colaborador" class="form-control" id="telefono-perfil-colaborador" value="<?php echo $colaborador["telefono"] ?>">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="pass-perfil-colaborador">Contraseña</label>
                    <input type="password" name="pass-perfil-colaborador" class="form-control" id="pass-perfil-colaborador" value="<?php echo $colaborador["pass"] ?>">
                </div>
            </div>

            <div class="clearfix"></div>
        
            <div class="col-lg-12 padre-boton-invitado">
                <button type="button" id="editar-boton-invitado" class="btn btn-default boton-enviar" style="float: left">Modificar</button>
                <div class="contenedor-mensaje-colaborador" style="float: left">
                    <div class="padre-mensaje-editar-colaborador">
                        <p>Editado exitosamente</p>
                    </div>
                </div>	
            </div>
        </form>
    </div>
</div>