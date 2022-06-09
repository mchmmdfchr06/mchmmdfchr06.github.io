<?php if ( ! isset($_SESSION['username']) AND ! isset($_SESSION['level']) ) {?> 

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=home">Pancong Dong</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
      </ul> 
      <ul class="navbar-nav">
        <li><a class="btn btn-outline-success" href="login.php" >Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<h3>Akses Login Diperlukan</h3>

<?php }elseif ($_SESSION['level'] === "admin") {?> 
	
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=home">Pancong Dong</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Master Data</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="?page=kategori">Kategori</a></li>
              <li><a class="dropdown-item" href="?page=produk">Produk</a></li>
              <li><a class="dropdown-item" href="?page=users">Pengguna</a></li>
            </ul>
        </li>
      </ul>	
      <ul class="navbar-nav">
      	<li><a class="btn btn-outline-success" href="logout.php" >Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php }else {?>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=home">Pancong Dong</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=kategori">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=produk">Produk</a>
        </li>
      </ul> 
      <ul class="navbar-nav">
        <li><a class="btn btn-outline-success" href="logout.php" >Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php } ?>