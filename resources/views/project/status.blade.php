<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje Durumu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- öğrenci navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="sdashboard"><img src="https://i.hizliresim.com/nvsiniz.png" alt=""
                    width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- durum -->
    <div class="container">
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Proje Başlığı</th>
                    <th scope="col">Proje Durumu</th>
                    <th score="col">Proje Dönemi</th>
                    <th scope="col">Proje Danışmanı</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">Proje-B</td>
                    <td scope="col">Bitti</td>
                    <td scope="col">26/02/2022</td>
                    <td scope="col">Önder YAKUT</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Proje Geçmişi -->
    <div class="container">
        <br><br>
        <table class="table" id="projectHistoryTable">
            <thead>
                <tr>
                    <th scope="col">Proje Amacı ve Kapsamı</th>
                    <th scope="col">Anahtar Kelimeler</th>
                    <th score="col">Proje Materyalleri ve Yöntemi</th>
                    <th scope="col">Danışmanın Yorumu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col"> <textarea id="w3review" name="w3review" rows="2" cols="30" style="resize:none;"
                            readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at dolor nec tincidunt. In condimentum diam non orci facilisis tincidunt. Vivamus et massa ex. Duis tempor, lacus a euismod commodo, nibh justo maximus dolor, id interdum elit sem eget ante. Integer eu ultrices libero. Vivamus malesuada rhoncus mattis. Morbi dignissim sem ac odio volutpat, vitae dictum turpis laoreet. Sed facilisis porttitor mi, nec mattis dolor fringilla eu. Maecenas sed tempus urna, nec fringilla lacus. Donec volutpat blandit metus nec dignissim. Nulla ultrices, ante nec hendrerit gravida, arcu neque bibendum urna, nec auctor risus justo a augue. Donec vitae luctus dolor, sed pulvinar magna. Phasellus non mi vel massa fermentum iaculis. Vivamus vitae justo eu odio pharetra varius. Donec tempus facilisis erat non pretium. Proin vestibulum sed lorem vitae faucibus.

Aliquam turpis magna, maximus et elementum ut, gravida ac mi. Suspendisse sagittis mi nec mi dictum, luctus viverra urna faucibus. Ut eget tincidunt mauris. Phasellus porta quam et cursus sodales. Donec ut consectetur neque. Maecenas pharetra ante vel arcu vulputate, eu ullamcorper leo efficitur. In id hendrerit libero, ut tincidunt eros. Nullam risus velit, ullamcorper id ante et, commodo bibendum lorem. Suspendisse facilisis malesuada elementum. Vestibulum fermentum mauris tellus, a.</textarea>
                    </td>
                    <td scope="col"> <textarea id="w3review" name="w3review" rows="2" cols="20" style="resize:none;"
                            readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at dolor nec tincidunt. In condimentum diam non orci facilisis tincidunt. Vivamus et massa ex. Duis tempor, lacus a euismod commodo, nibh justo maximus dolor, id interdum elit sem eget ante. Integer eu ultrices libero. Vivamus malesuada rhoncus mattis. Morbi dignissim sem ac odio volutpat, vitae dictum turpis laoreet. Sed facilisis porttitor mi, nec mattis dolor fringilla eu. Maecenas sed tempus urna, nec fringilla lacus. Donec volutpat blandit metus nec dignissim. Nulla ultrices, ante nec hendrerit gravida, arcu neque bibendum urna, nec auctor risus justo a augue. Donec vitae luctus dolor, sed pulvinar magna. Phasellus non mi vel massa fermentum iaculis. Vivamus vitae justo eu odio pharetra varius. Donec tempus facilisis erat non pretium. Proin vestibulum sed lorem vitae faucibus.

Aliquam turpis magna, maximus et elementum ut, gravida ac mi. Suspendisse sagittis mi nec mi dictum, luctus viverra urna faucibus. Ut eget tincidunt mauris. Phasellus porta quam et cursus sodales. Donec ut consectetur neque. Maecenas pharetra ante vel arcu vulputate, eu ullamcorper leo efficitur. In id hendrerit libero, ut tincidunt eros. Nullam risus velit, ullamcorper id ante et, commodo bibendum lorem. Suspendisse facilisis malesuada elementum. Vestibulum fermentum mauris tellus, a.</textarea>
                    </td>
                    <td scope="col"> <textarea id="w3review" name="w3review" rows="2" cols="30" style="resize:none;"
                            readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at dolor nec tincidunt. In condimentum diam non orci facilisis tincidunt. Vivamus et massa ex. Duis tempor, lacus a euismod commodo, nibh justo maximus dolor, id interdum elit sem eget ante. Integer eu ultrices libero. Vivamus malesuada rhoncus mattis. Morbi dignissim sem ac odio volutpat, vitae dictum turpis laoreet. Sed facilisis porttitor mi, nec mattis dolor fringilla eu. Maecenas sed tempus urna, nec fringilla lacus. Donec volutpat blandit metus nec dignissim. Nulla ultrices, ante nec hendrerit gravida, arcu neque bibendum urna, nec auctor risus justo a augue. Donec vitae luctus dolor, sed pulvinar magna. Phasellus non mi vel massa fermentum iaculis. Vivamus vitae justo eu odio pharetra varius. Donec tempus facilisis erat non pretium. Proin vestibulum sed lorem vitae faucibus.

Aliquam turpis magna, maximus et elementum ut, gravida ac mi. Suspendisse sagittis mi nec mi dictum, luctus viverra urna faucibus. Ut eget tincidunt mauris. Phasellus porta quam et cursus sodales. Donec ut consectetur neque. Maecenas pharetra ante vel arcu vulputate, eu ullamcorper leo efficitur. In id hendrerit libero, ut tincidunt eros. Nullam risus velit, ullamcorper id ante et, commodo bibendum lorem. Suspendisse facilisis malesuada elementum. Vestibulum fermentum mauris tellus, a.</textarea>
                    </td>
                    <td scope="col"> <textarea id="w3review" name="w3review" rows="2" cols="30" style="resize:none;"
                            readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis at dolor nec tincidunt. In condimentum diam non orci facilisis tincidunt. Vivamus et massa ex. Duis tempor, lacus a euismod commodo, nibh justo maximus dolor, id interdum elit sem eget ante. Integer eu ultrices libero. Vivamus malesuada rhoncus mattis. Morbi dignissim sem ac odio volutpat, vitae dictum turpis laoreet. Sed facilisis porttitor mi, nec mattis dolor fringilla eu. Maecenas sed tempus urna, nec fringilla lacus. Donec volutpat blandit metus nec dignissim. Nulla ultrices, ante nec hendrerit gravida, arcu neque bibendum urna, nec auctor risus justo a augue. Donec vitae luctus dolor, sed pulvinar magna. Phasellus non mi vel massa fermentum iaculis. Vivamus vitae justo eu odio pharetra varius. Donec tempus facilisis erat non pretium. Proin vestibulum sed lorem vitae faucibus.

Aliquam turpis magna, maximus et elementum ut, gravida ac mi. Suspendisse sagittis mi nec mi dictum, luctus viverra urna faucibus. Ut eget tincidunt mauris. Phasellus porta quam et cursus sodales. Donec ut consectetur neque. Maecenas pharetra ante vel arcu vulputate, eu ullamcorper leo efficitur. In id hendrerit libero, ut tincidunt eros. Nullam risus velit, ullamcorper id ante et, commodo bibendum lorem. Suspendisse facilisis malesuada elementum. Vestibulum fermentum mauris tellus, a.</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <hr>
    </div>

    <!-- Proje raporlama -->
    <div class="container">
        <form action="">
            <div class="mb-3">
                <label for="rapor" class="form-label">Proje Raporu</label>
                <input type="text" id="projeAdi" name="projeAdi" class="form-control"
                    placeholder="Proje başlığını giriniz"><br>
                <input type="file" id="rapor" name="rapor" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Raporu Yükle</button>
            </div>
        </form>
        <br>
        <hr>
    </div>

    <!-- Proje tez -->
    <div class="container">
        <form action="">
            <div class="mb-3">
                <label for="tez" class="form-label">Proje Tezi</label>
                <input type="text" id="projeAdi" name="projeAdi" class="form-control"
                    placeholder="Proje başlığını giriniz"><br>
                <input type="file" id="tez" name="tez" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Tezi Yükle</button>
            </div>
        </form>
    </div>


</body>

</html>