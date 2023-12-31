<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <style>
    /* tulis kode CSS internal di bawah sini */
    .card {
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 15px;
      width: 80%;
    }

    .logo a img {
      width: 180px;
      height: 2.5rem;
    }

    .card-bodydetail {
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 15px;
    }

    .card .col {
      width: 80%;
    }

    .bg-nav {
      background-color: #862B0D;
    }

    body {
      background-image: url('assets/img/bg1.jpg');
      background-color: #FAEED1;
    }

    .navbar {
      background-color: #803d28;
      font-family: poppins;
    }

    .btn-wa {
      background: white;
      color: black;
      padding: 4px 8px;
      border-radius: 8px;
      text-decoration: none;
    }

    hr.border-line {
      background: #803d28 !important;
      width: 100%;
      height: 5px;
    }

    .btn-buy {
      background-color: #b05c43;
      color: white;
    }

    .btn-buy:hover {
      background-color: #803d28;
      color: white;
    }


    span.search {
      background-color: #b05c43;
    }

    footer {
      background-color: #803d28;
    }



    @media (max-width: 768px) {

      .select-menu {
        flex-wrap: wrap;
        justify-content: space-evenly;
      }

      .form-select {
        width: 100%;
      }

      ul.nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
    }



    /* Batas Akhir penulisan kode CSS internal */
  </style>
  <title><?php echo $judul; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
    <a class="logo" class="navbar-brand pl-3" href="#">
      <!-- UBSI <span class='text-warning'>Meng.Com</span> -->
      <img src="<?= base_url(). 'assets/img/logonew.png' ?>" height='47' alt=""></a>
    </a>
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto font-weight-bold ">
          <ul class="nav nav-pills nav-fill ">
            <li class="nav-item">
              <a class="nav-item nav-link  " href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link" href="<?= base_url(); ?>Mengcom/tentang">About</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>