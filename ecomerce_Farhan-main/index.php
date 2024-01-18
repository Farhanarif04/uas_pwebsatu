<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farchoclate</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Far<span>choco</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
      <a href="masuk.php">Logout</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar end -->
  
  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1> Beli Aneka Coklat di <span>FarChoco</span></h1>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img coklat/4.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa harus FarChoco?</h3>
        <p>Kami menyediakan berbagai aneka coklat dengan harga yang ekonomis, dengan coklat yang berkualitas</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span> Menu </span> Coklat </h2>

    <div class="row">
      <div class="menu-card">
        <img src="img coklat/3.jpg" alt="Sweet Choco" class="menu-card-img">
        <h3 class="menu-card-title">- Sweet Choco -</h3>
        <p class="menu-card-price">Rp 15K</p>
        <a href="pembelian.php">Beli Sekarang</a>
      </div>
      <div class="menu-card">
        <img src="img coklat/4.jpg" alt="White Coklat" class="menu-card-img">
        <h3 class="menu-card-title">- White Coklat -</h3>
        <p class="menu-card-price">Rp 20K</p>
        <a href="pembelian.php">Beli Sekarang</a>
      </div>
      <div class="menu-card">
        <img src="img coklat/6.jpg" alt="Milk Coklat" class="menu-card-img">
        <h3 class="menu-card-title">- Milk Coklat -</h3>
        <p class="menu-card-price">Rp 30K</p>
        <a href="pembelian.php">Beli Sekarang</a>
      </div>
      <div class="menu-card">
        <img src="img coklat/5.jpg" alt="Coklat Almond" class="menu-card-img">
        <h3 class="menu-card-title">- Coklat Almond -</h3>
        <p class="menu-card-price">Rp 20K</p>
        <a href="pembelian.php">Beli Sekarang</a>
      </div>
    </div>
  </section>
  <!-- Menu Section end -->

  

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <div class="contact_form">
        <a href="https://api.whatsapp.com/send?phone=628988066903" class="footer__social">
        <img src="img coklat/Safeimagekit-resized-img (4).png" alt="footer img" class="footer__img img">
        </a>
        <a href="https://instagram.com/m.farhan_arf?igshid=OGQ5ZDc2ODk2ZA==" class="footer__social">
        <img src="img coklat/Safeimagekit-resized-img (5).png" alt="footer img" class="footer__img img">
        </a>
      </a>
    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://api.whatsapp.com/send?phone=628988066903&text=Saya%20mau%20beli"><i data-feather="whatsapp"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="https://api.whatsapp.com/send?phone=628988066903&text=Saya%20mau%20beli">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Farhan Arif</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>