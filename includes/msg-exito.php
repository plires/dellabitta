<!-- Msgs Exito -->
<?php if (isset($msgs_site)): ?>

  <div id="msgs_site" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>¡Consulta recibida!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <ul style="padding: 0;">
      <li>- <?php echo $msgs_site; ?></li>
    </ul>
  </div>

<?php endif ?>
<!-- Msgs Exito end -->