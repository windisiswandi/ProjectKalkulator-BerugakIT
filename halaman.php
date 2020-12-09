<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-5">
            <h2>Kalkulator</h2>
            <form action="hasil.php" method="post">
                <div>
                    <label for="bilangan1">Bilangan Pertama :</label>
                    <input type="text" name="bilangan1" id="bilangan1" class="form-control">
                </div>

                <div>
                    <label for="bilangan2">Bilangan Kedua :</label>
                    <input type="text" name="bilangan2" id="bilangan2" class="form-control">
                </div><br>
                <div>
                    <button class="btn btn-success" name="tambah">Tambah</button>
                    <button class="btn btn-success" name="kurang">Kurang</button>
                    <button class="btn btn-success" name="kali">Kali</button>
                    <button class="btn btn-success" name="bagi">Bagi</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>