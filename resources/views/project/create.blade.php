<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje Oluştur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- öğrenci navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="sdashboard"><img src="https://i.hizliresim.com/nvsiniz.png" alt="" width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sdashboard">Öğrenci Paneli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sprofile">Öğrenci Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="create">Proje Oluştur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pstatus">Proje Durumu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Çıkış Yap</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <br><br>

    <form action="">
        <!-- Proje başlığı -->
        <div class="container">
            <h3 class="text-center">Yeni Proje Oluştur</h3>
            <hr>

            <div class="form-floating">
                <textarea class="form-control" id="baslikTextarea"></textarea>
                <label for="projeBaslik">Proje başlığını giriniz</label>
            </div>
            <hr>
        </div>

        <!-- Proje amac önemi kapsamı -->
        <div class="container">
            <div class="form-floating">
                <textarea class="form-control" id="amacTextarea" style="height: 100px"></textarea>
                <label for="projeAmac">Projenin amacı, önemi ve kapsamını giriniz (En az 200 kelime)</label>
            </div>
            <hr>
        </div>

        <!-- Proje anahtar kelimeleri 5 adet -->
        <div class="container">
            <div class="input-group">
                <span class="input-group-text">Anahtar Kelimeler</span>
                <input type="text" id="key1" name="key1" class="form-control">
                <input type="text" id="key2" name="key2" class="form-control">
                <input type="text" id="key3" name="key3" class="form-control">
                <input type="text" id="key4" name="key4" class="form-control">
                <input type="text" id="key5" name="key5" class="form-control">
            </div>
            <hr>
        </div>

        <!-- Proje materyal yöntem ve araştırma olanakları -->
        <div class="container">
            <div class="form-floating">
                <textarea class="form-control" id="materyalTextarea" style="height: 100px"></textarea>
                <label for="projeAmac">Projenin materyal, yöntem ve araştırma olanaklarını giriniz (En az 300 kelime)</label>
            </div>
            <hr>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-primary">Proje Oluştur</button>
        </div>
    </form>




</body>

</html>