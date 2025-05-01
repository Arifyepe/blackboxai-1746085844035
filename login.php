<?php
session_start();
include 'includes/header.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body">
                    <?php if (isset($_SESSION['login_errors'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                            foreach ($_SESSION['login_errors'] as $error) {
                                echo $error . "<br>";
                            }
                            unset($_SESSION['login_errors']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success_message'])): ?>
                        <div class="alert alert-success">
                            <?php 
                            echo $_SESSION['success_message'];
                            unset($_SESSION['success_message']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <form action="login_process.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" 
                                   class="form-control" 
                                   id="email" 
                                   name="email" 
                                   value="<?php echo isset($_SESSION['login_email']) ? $_SESSION['login_email'] : ''; ?>"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" 
                                       class="form-control" 
                                       id="password" 
                                       name="password" 
                                       required>
                                <button class="btn btn-outline-secondary" 
                                        type="button" 
                                        id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                        <div class="text-center">
                            <p class="mb-0">Belum punya akun? 
                                <a href="register.php" class="text-primary">Register disini</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Login page specific styles */
.card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
}

.card-header {
    background-color: var(--primary-red) !important;
    padding: 1.5rem;
}

.card-header h3 {
    font-family: 'Russo One', sans-serif;
    margin: 0;
}

.form-control:focus {
    border-color: var(--primary-red);
    box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25);
}

.btn-primary {
    background-color: var(--primary-red);
    border-color: var(--primary-red);
    font-weight: 500;
}

.btn-primary:hover {
    background-color: var(--dark-red);
    border-color: var(--dark-red);
}

.text-primary {
    color: var(--primary-red) !important;
}

.alert {
    border-radius: 8px;
    font-size: 0.9rem;
}

/* Password toggle button */
.input-group .btn-outline-secondary {
    border-color: #ced4da;
}

.input-group .btn-outline-secondary:hover {
    background-color: #f8f9fa;
    border-color: #ced4da;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .col-md-6 {
        padding: 0 15px;
    }
    
    .card {
        margin-bottom: 2rem;
    }
}
</style>

<script>
// Toggle password visibility
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    const icon = this.querySelector('i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});

// Clear session data when leaving the page
window.addEventListener('beforeunload', function() {
    <?php
    unset($_SESSION['login_email']);
    unset($_SESSION['login_errors']);
    ?>
});
</script>

<?php include 'includes/footer.php'; ?>
