<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengcom Login</title>
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        /* tulis kode CSS internal di bawah sini */
        .card1 {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            width: 80%;
            margin-top: 2rem;
            margin-left: 2rem;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            width: 80%;
            margin-top: 2rem;
            margin-left: 2rem;
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

        .rumah {
            background-image: url('assets/img/bg1.jpg');
            background-color: #F2D8B3;
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

</head>

<body class="rumah">