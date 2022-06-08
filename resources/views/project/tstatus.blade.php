<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje Durum</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- öğretmen navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="tdashboard"><img src="https://i.hizliresim.com/nvsiniz.png" alt="" width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tdashboard">Öğretmen Paneli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tprofile">Öğretmen Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tstatus">Proje Durumu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Çıkış Yap</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <br><br>

    <!-- gelen başvuru projeler -->
    <div class="container">
        <h4>Bekleyen Projeler</h4>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">İsim-Soyisim</th>
                    <th scope="col">Öğrenci Numarası</th>
                    <th scope="col">Email</th>
                    <th scope="col">Proje Adı</th>
                    <th scope="col">Proje Detayı</th>
                    <th scope="col">Onay/Red</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmet Er</td>
                    <td>181307069</td>
                    <td>ahmet@gmail.com</td>
                    <td>Akciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td>
                        <button type="button" class="btn btn-success">Onayla</button>
                        <button type="button" class="btn btn-danger">Reddet</button>
                    </td>
                </tr>
                <tr>
                    <td>Enes 123123</td>
                    <td>181307000</td>
                    <td>enes@gmail.com</td>
                    <td>Karaciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td>
                        <button type="button" class="btn btn-success">Onayla</button>
                        <button type="button" class="btn btn-danger">Reddet</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- onaylanan projeler -->
    <div class="container">
        <h4>Onaylanan Projeler</h4>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">İsim-Soyisim</th>
                    <th scope="col">Öğrenci Numarası</th>
                    <th scope="col">Email</th>
                    <th scope="col">Proje Adı</th>
                    <th scope="col">Proje Detayı</th>
                    <th scope="col">Rapor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmet Er</td>
                    <td>181307069</td>
                    <td>ahmet@gmail.com</td>
                    <td>Akciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td><button type="button" class="btn btn-info">Rapor</button></td>
                </tr>
                <tr>
                    <td>Enes 123123</td>
                    <td>181307000</td>
                    <td>enes@gmail.com</td>
                    <td>Karaciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td><button type="button" class="btn btn-info">Rapor</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- reddedilen projeler -->
    <div class="container">
        <h4>Reddedilen Projeler</h4>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">İsim-Soyisim</th>
                    <th scope="col">Öğrenci Numarası</th>
                    <th scope="col">Email</th>
                    <th scope="col">Proje Adı</th>
                    <th scope="col">Proje Detayı</th>
                    <th scope="col">Red Sebebi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmet Er</td>
                    <td>181307069</td>
                    <td>ahmet@gmail.com</td>
                    <td>Akciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td>Kopya</td>
                </tr>
                <tr>
                    <td>Enes 123123</td>
                    <td>181307000</td>
                    <td>enes@gmail.com</td>
                    <td>Karaciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td>Çalıntı</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- biten projeler -->
    <div class="container">
        <h4>Biten Projeler</h4>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">İsim-Soyisim</th>
                    <th scope="col">Öğrenci Numarası</th>
                    <th scope="col">Email</th>
                    <th scope="col">Proje Adı</th>
                    <th scope="col">Proje Detayı</th>
                    <th scope="col">Tez</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmet Er</td>
                    <td>181307069</td>
                    <td>ahmet@gmail.com</td>
                    <td>Akciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td><button type="button" class="btn btn-warning">Tez</button></td>
                </tr>
                <tr>
                    <td>Enes 123123</td>
                    <td>181307000</td>
                    <td>enes@gmail.com</td>
                    <td>Karaciğer</td>
                    <td><button type="button" class="btn btn-primary">Proje Bilgisi</button></td>
                    <td><button type="button" class="btn btn-warning">Tez</button></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>