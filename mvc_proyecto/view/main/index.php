<?php
require 'view/header.php';
require 'view/menu.php';

?>


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


</head>

<body>

  <main>
    <div class="container py-4">
      <!-- <h1>
        <?php //echo $this->mensaje; ?>
      </h1> -->
      <?php echo $this->mensajeResultado ?>

      <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Built by Sosa</h1>
          <p class="col-md-8 fs-4">
            In this website you can create, read, update and delete data from sql863.main-hosting.eu. Which is an API
            made with PHP and MySQL.
          </p>
          <a href="https://paginas-web-cr.com/ApiPHP/" class="btn btn-primary btn-lg">Documentacion</a>
        </div>
      </div>

      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>How to use</h2>
            <p>To start using this website just select one of the elements from the navigation bar: Cursos, Estudiantes,
              Profesores, Grupos.</p>
            <button class="btn btn-outline-light" type="button">Example button</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-light border rounded-3">
            <h2>How to use but white</h2>
            <p>To start using this website just log in to access the crud modules from the navigation bar: Cursos,
              Estudiantes, Profesores, Grupos.</p>
            <button class="btn btn-outline-secondary" type="button">Example button</button>
          </div>
        </div>
      </div>
    </div>
  </main>


  <?php
  require 'view/footer.php';

  ?>