<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gestión de Aulas - Menú Principal</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Iconos Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: #eaf6f6; /* celeste clarito */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #0f5132; /* verde oscuro */
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background: #ffffff;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
      padding: 1.5rem 2rem;
      text-align: center;
      font-weight: 700;
      font-size: 1.8rem;
      color: #198754; /* verde bootstrap */
      letter-spacing: 2px;
      text-transform: uppercase;
      user-select: none;
    }

    main {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .menu-container {
      background: white;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgb(0 0 0 / 0.1);
      max-width: 700px;
      width: 100%;
      padding: 2rem;
      text-align: center;
    }

    .menu-title {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: #0f5132;
    }

    .nav-pills {
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .nav-pills .nav-link {
      border-radius: 50px;
      background: #c7f0e9; /* verde muy suave */
      color: #0f5132;
      font-weight: 600;
      font-size: 1.1rem;
      padding: 0.75rem 1.8rem;
      border: 2px solid #0f5132;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      transition: background-color 0.3s ease, color 0.3s ease;
      text-decoration: none;
    }

    .nav-pills .nav-link:hover,
    .nav-pills .nav-link.active {
      background: #198754; /* verde bootstrap */
      color: white;
      border-color: #198754;
      text-decoration: none;
    }

    /* Iconos tamaño y color */
    .nav-pills .nav-link i {
      font-size: 1.4rem;
      color: #0f5132;
      transition: color 0.3s ease;
    }

    .nav-pills .nav-link:hover i,
    .nav-pills .nav-link.active i {
      color: white;
    }

    footer {
      background: #ffffff;
      padding: 1rem 2rem;
      text-align: center;
      color: #6c757d;
      font-size: 0.9rem;
      box-shadow: 0 -2px 8px rgb(0 0 0 / 0.05);
      user-select: none;
    }
  </style>
</head>
<body>
  <header>
    Gestión de Aulas
  </header>
  <main>
    <div class="menu-container">
      <h2 class="menu-title">Seleccione una sección</h2>
      <nav>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a href="/aulas" class="nav-link"><i class="bi bi-building"></i> Aulas</a>
          </li>
          <li class="nav-item">
            <a href="/reservas" class="nav-link"><i class="bi bi-calendar-check"></i> Reservas</a>
          </li>
          <li class="nav-item">
            <a href="/cortinas" class="nav-link"><i class="bi bi-window-dock"></i> Cortinas</a>
          </li>
          <li class="nav-item">
            <a href="/aire-acondicionado" class="nav-link"><i class="bi bi-fan"></i> Aire Acondicionado</a>
          </li>
          <li class="nav-item">
            <a href="/focos" class="nav-link"><i class="bi bi-lightbulb"></i> Focos</a>
          </li>
          <li class="nav-item">
            <a href="/materias" class="nav-link"><i class="bi bi-journal-text"></i> Materias</a>
          </li>
          <li class="nav-item">
            <a href="/cursos" class="nav-link"><i class="bi bi-book"></i> Cursos</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <footer>
    &copy; 2025 Gestión de Aulas - Proyecto Colegial
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



