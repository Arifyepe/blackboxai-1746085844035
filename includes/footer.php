<!-- Footer -->
    <footer class="footer mt-auto py-4" style="background-color: var(--primary-red); color: var(--white);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">Contact Us</h5>
                    <p class="mb-1">
                        <i class="fas fa-phone me-2"></i> +62 123 456 789
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-envelope me-2"></i> info@sportsstore.com
                    </p>
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt me-2"></i> Jl. Olahraga No. 123, Jakarta
                    </p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="soccer.php" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-2"></i>Sepakbola
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="futsal.php" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-2"></i>Futsal
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="running.php" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-2"></i>Running
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="badminton.php" class="text-white text-decoration-none">
                                <i class="fas fa-chevron-right me-2"></i>Bulutangkis
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5 class="mb-3">Follow Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-3" title="Facebook">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="#" class="text-white me-3" title="Instagram">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="text-white me-3" title="Twitter">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="text-white" title="YouTube">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-4" style="border-color: var(--white);">

            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Sports Store. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <style>
    .footer {
        margin-top: auto;
    }

    .footer h5 {
        font-family: 'Russo One', sans-serif;
        color: var(--white);
    }

    .social-links a {
        transition: opacity 0.3s ease;
    }

    .social-links a:hover {
        opacity: 0.8;
    }

    .list-unstyled a {
        transition: padding-left 0.3s ease;
    }

    .list-unstyled a:hover {
        padding-left: 5px;
    }

    /* Make footer stick to bottom */
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }
    </style>
</body>
</html>
