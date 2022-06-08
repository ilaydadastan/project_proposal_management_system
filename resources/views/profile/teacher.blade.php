<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğretmen Profil</title>
    
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
    <!-- öğretmen profil düzenleme -->
    <div class="container">
        <br><br>
        <h4>Profil bilgilerimi düzenle</h4><hr>
        <form action="">

            <div class="mb-3">
                <label for="name" class="form-label">İsim-Soyisim</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="unvan" class="form-label">Ünvan</label>
                <input type="text" id="unvan" name="unvan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>

</body>

</html>