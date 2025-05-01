<?php
session_start();
include 'includes/header.php';
include 'includes/catalog_modal.php';
?>

<div class="category-header">
    <div class="container">
        <h1>Sepakbola</h1>
    </div>
</div>

<div class="container">
    <!-- Soccer Shoes Section -->
    <section class="mb-5">
        <h2 class="section-title">Sepatu Sepakbola</h2>
        <div class="row">
            <?php
            $brands = ['Nike', 'Adidas', 'Puma', 'Specs', 'Ortusheight'];
            $sizes = range(32, 45);
            
            // Example product card for shoes
            foreach($brands as $brand): ?>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <img src="https://images.pexels.com/photos/2385477/pexels-photo-2385477.jpeg" class="card-img-top" alt="<?= $brand ?> Soccer Shoes">
                    <div class="card-body">
                        <h5 class="card-title"><?= $brand ?> Pro</h5>
                        <p class="card-text">Sepatu Sepakbola Professional</p>
                        <p class="card-text">
                            <small>Ukuran: <?= implode(', ', $sizes) ?></small>
                        </p>
                        <p class="card-text"><strong>Rp 1.500.000</strong></p>
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="purchase.php?id=1" class="btn btn-primary w-100">Beli</a>
                        <?php else: ?>
                            <a href="login.php" class="btn btn-primary w-100">Login untuk Membeli</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Soccer Jerseys Section -->
    <section class="mb-5">
        <h2 class="section-title">Jersey Sepakbola</h2>
        <div class="row">
            <?php
            $teams = [
                'Timnas Indonesia' => ['Home', 'Away'],
                'Manchester United' => ['Home', 'Away'],
                'AC Milan' => ['Home', 'Away'],
                'Real Madrid' => ['Home', 'Away'],
                'Barcelona' => ['Home', 'Away'],
                'AL-NASR' => ['Home', 'Away'],
                'PSG' => ['Home', 'Away'],
                'Liverpool' => ['Home', 'Away'],
                'Persib' => ['Home', 'Away'],
                'Persija' => ['Home', 'Away']
            ];
            
            foreach($teams as $team => $variants):
                foreach($variants as $variant): ?>
                <div class="col-md-3 mb-4">
                    <div class="card product-card">
                        <img src="https://images.pexels.com/photos/3621104/pexels-photo-3621104.jpeg" class="card-img-top" alt="<?= $team ?> Jersey">
                        <div class="card-body">
                            <h5 class="card-title"><?= $team ?></h5>
                            <p class="card-text">Jersey <?= $variant ?> 2024</p>
                            <p class="card-text">
                                <small>Ukuran: S, M, L, XL</small>
                            </p>
                            <p class="card-text"><strong>Rp 750.000</strong></p>
                            <?php if(isset($_SESSION['user_id'])): ?>
                                <a href="purchase.php?id=1" class="btn btn-primary w-100">Beli</a>
                            <?php else: ?>
                                <a href="login.php" class="btn btn-primary w-100">Login untuk Membeli</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            endforeach; ?>
        </div>
    </section>

    <!-- Soccer Socks Section -->
    <section class="mb-5">
        <h2 class="section-title">Kaos Kaki Sepakbola</h2>
        <div class="row">
            <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <img src="https://images.pexels.com/photos/6823462/pexels-photo-6823462.jpeg" class="card-img-top" alt="Soccer Socks">
                    <div class="card-body">
                        <h5 class="card-title">Pro Soccer Socks <?= $i ?></h5>
                        <p class="card-text">Kaos Kaki Sepakbola Professional</p>
                        <p class="card-text"><strong>Rp 150.000</strong></p>
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="purchase.php?id=1" class="btn btn-primary w-100">Beli</a>
                        <?php else: ?>
                            <a href="login.php" class="btn btn-primary w-100">Login untuk Membeli</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
