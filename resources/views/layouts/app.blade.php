<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Aulas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap (estilo moderno) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #e0f7fa; /* celeste claro */
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding-top: 80px;
        }

        .navbar {
            background-color: #4caf50;
        }

        .navbar .nav-link, .navbar .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .navbar .nav-link:hover {
            text-decoration: underline;
        }

        .container-box {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        h1, h2 {
            color: #2e7d32;
        }

        footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            color: #555;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Menú -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Gestión de Aulas</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/cursos">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Aulas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cortinas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Aire Acondicionado</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Focos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Materias</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de cada página -->
    <div class="container">
        <div class="container-box">
            @yield('content')
        </div>
    </div>

    <footer>
        &copy; 2025 Gestión de Aulas - Proyecto escolar
    </footer>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

