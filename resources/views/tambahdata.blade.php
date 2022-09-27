<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Pegawai</h1>

    <div class="container">
      
        <div class="row justify-content-center">
          <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertdata" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap:</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin:</label>
                    <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                      <option selected>Pilih Jenis Kelamin</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                    </select></div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No Telepon:</label>
                      <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                        <input type="file" name="foto" class="form-control"></div>
               <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            </div>
          </div> 
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>