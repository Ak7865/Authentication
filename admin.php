<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
   
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="p-3 border-bottom">
                <h3 class="d-flex align-items-center">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Admin Panel
                </h3>
            </div>
            <div class="p-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="sidebar-link active">
                            <i class="bi bi-house-door"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-people"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-file-earmark-text"></i> Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-graph-up"></i> Analytics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-envelope"></i> Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-gear"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="content" class="d-flex flex-column">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg top-navbar sticky-top">
                <div class="container-fluid">
                    <button id="sidebarToggle" class="btn">
                        <i class="bi bi-list"></i>
                    </button>
                    
                    <div class="navbar-collapse">
                        <ul class="navbar-nav ms-auto">
        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-1"></i>
                                    <!-- PHP code commented out for direct preview in browser -->
                                    <?php 
                                    
                                     
                                    echo $username;
                                    ?> 
                              
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="main-content flex-grow-1">
                <h2>Dashboard</h2>
                
                </div>
        </div>
    </div>

    <!-- Bootstrap JS bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Toggle sidebar
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
        
        // Add active class to current nav item
        const navLinks = document.querySelectorAll('.sidebar-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>