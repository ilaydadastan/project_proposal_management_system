<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğretmen Paneli</title>

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

    <!-- danışman hocanın kendi bilgisi -->
    <div class="container">
        <br><br>
        <h3>Bilgilerim</h3>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">İsim-Soyisim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ünvanı</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmet Er</td>
                    <td>teacher@gmail.com</td>
                    <td>Prof Dr</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br><br>

    <div class="container">
        <h3>Bana Atanan Öğrenci Bilgileri</h3>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">İsim-Soyisim</th>
                    <th scope="col">Öğrenci Numarası</th>
                    <th scope="col">Fakülte</th>
                    <th scope="col">Bölüm</th>
                    <th scope="col">Sınıf</th>
                    <th scope="col">Cep Telefonu</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmet Er</td>
                    <td>181307069</td>
                    <td>İşletme Fakülte</td>
                    <td>Pc</td>
                    <td>4</td>
                    <td>5555555555</td>
                    <td>ahmet@gmail.com</td>
                </tr>
                <tr>
                    <td>Enes 123123</td>
                    <td>181307000</td>
                    <td>Tek Fakülte</td>
                    <td>İşletme</td>
                    <td>3</td>
                    <td>5555555555</td>
                    <td>enes@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>