<!doctype html>
<html lang="en">

<head>
    <!-- Require meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Student Management System</title>
</head>

<body>
    @include ("navbar")

    <section class="main">
        <div class="block">
            <h2 class="animated fadeInDown" style="animation-delay: 1s">Fakultas Teknik Universitas Hasanuddin</h2>
            <p class="animated fadeInDown" style="animation-delay: 2s">Fakultas Teknik Universitas Hasanuddin merupakan salah satu fakultas yang ada di Universitas Hasanuddin.
                Didirikan pada tanggal 7 September 1960. Pada awalnya, kampus Fakultas Teknik berada di Kampus
                Tamalanrea. Fakultas yang kini berdomisili di Kabupaten Gowa mengembangkan jaringan kerja sama nasional
                dan internasional. Fakultas ini merupakan fakultas keempat yang ada di Universitas Hasanuddin.
                Fakultas Teknik Universitas Hasanuddin berdiri sejak 7 September 1960, yang terdiri atas tiga jurusan,
                yakni Teknik Sipil, Teknik Mesin dan Teknik Perkapalan. Pengembangan fakultas melalui pembukaan jurusan
                baru tetap berjalan sampai bulan September 1963, saat terbentuk Jurusan Teknik Arsitektur dan Teknik
                Elektro. Pembentukan Jurusan Teknik Geologi pada bulan September 1982 menutup rangkaian pengembangan
                jurusan pada Fakultas Teknik.

            </p>
            <a class="btn animated fadeIn" style="animation-delay: 3s" href="https://eng.unhas.ac.id/fakultas/" target="_blank">Read More</a>
        </div>
    </section>

    @include('cv')


    @include ('footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
