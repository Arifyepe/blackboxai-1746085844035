<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Store</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Custom CSS Variables -->
    <style>
        :root {
            --primary-red: #FF0000;
            --dark-red: #CC0000;
            --light-red: #FFE5E5;
            --white: #FFFFFF;
            --black: #000000;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Russo One', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--primary-red);">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-running me-2"></i>
                Sports Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#catalogModal">
                            <i class="fas fa-th-list me-1"></i> Katalog
                        </a>
                    </li>
                </ul>
                
                <ul class="navbar-nav">
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <?php if($_SESSION['role'] === 'admin'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin/admin_dashboard.php">
                                    <i class="fas fa-tachometer-alt me-1"></i> Admin Panel
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="purchase_history.php">
                                <i class="fas fa-history me-1"></i> Riwayat Pembelian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">
                                <i class="fas fa-user-plus me-1"></i> Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Catalog Modal -->
    <div class="modal fade" id="catalogModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--primary-red); color: white;">
                    <h5 class="modal-title">Katalog Olahraga</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <a href="soccer.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-futbol me-2"></i> Sepakbola
                        </a>
                        <a href="futsal.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-running me-2"></i> Futsal
                        </a>
                        <a href="running.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-running me-2"></i> Running
                        </a>
                        <a href="badminton.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-table-tennis me-2"></i> Bulutangkis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
