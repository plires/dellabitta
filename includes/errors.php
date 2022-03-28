<!-- Errores Formulario -->
<?php if (isset($errors) && !empty($errors) ): ?>

  <div id="error_seguro" class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <ul style="padding: 0;">

      <?php foreach ($errors as $error): ?>
        <li>- <?= $error ?> </li>
      <?php endforeach ?>

    </ul>
  </div>

<?php endif ?>
<!-- Errores Formulario end -->