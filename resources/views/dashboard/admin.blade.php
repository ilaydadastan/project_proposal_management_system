<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- admin navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="adashboard"><img src="https://i.hizliresim.com/nvsiniz.png" alt="" width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="adashboard">Admin Paneli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aprofile">Admin Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Çıkış Yap</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- aktif dönem -->
    <div class="container">
        <br>
        <h4>Aktif Dönem</h4>
        <hr>
        <form action="">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Bahar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Güz</label>
            </div>
            <div class="form-check form-check-inline">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>
    <br>

    <!-- proje danışmanı ekle -->
    <div class="container">
        <br><br>
        <h4>Proje Danışmanı Ekle</h4>
        <hr>
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

    <!-- proje danışmanlarına, öğrenci atama -->
    <div class="container">
        <form action="">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Öğrenci Adı</th>
                        <th scope="col">Öğrenci Numarası</th>
                        <th scope="col">Öğrenci Email</th>
                        <th scope="col">Atanacak Danışman Hoca</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>11111111</td>
                        <td>@mdo</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Danışman Hoca Seçin</option>
                                <option value="1">Danışman 1</option>
                                <option value="1">Danışman 2</option>
                                <option value="1">Danışman 3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>22222222</td>
                        <td>@fat</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Danışman Hoca Seçin</option>
                                <option value="1">Danışman 1</option>
                                <option value="1">Danışman 2</option>
                                <option value="1">Danışman 3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>33333333</td>
                        <td>@twitter</td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Danışman Hoca Seçin</option>
                                <option value="1">Danışman 1</option>
                                <option value="1">Danışman 2</option>
                                <option value="1">Danışman 3</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </form>

    </div>




</body>

</html>