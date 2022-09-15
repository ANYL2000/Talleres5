
<!--Seccion del modal de la informacion de la persona-->

<!-- Modal -->
<div class="modal fade" id="suscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información del estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="recipient-codigo" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre Completo:</label>
            <input type="text" class="form-control" id="recipient-nombre"  disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Carrera:</label>
            <input type="text" class="form-control" id="recipient-carrera"  disabled>
          </div>
          <div class="modal-footer">
        <button type="submit" class="btn btn-secondary"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="inscribir" name="inscribir">Inscribirse</button>
      </div>
        </form>
      </div>
      </div>
  </div>
</div>

<script> window.history.back();</script>

