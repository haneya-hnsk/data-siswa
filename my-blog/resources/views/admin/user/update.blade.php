<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 pt-3 pb-5 justify-content-center">
        <div class="text-center fs-2 "> <h1>updateuser</h1></div>
        <div class="row">
            <div class="col-12 justify-content-center">
               
                <div class="card shadow rounded-1">
                    <div class="card-body">
                        
                      <form action="{{ route('updateuser', $user->id) }}" method="post" >
                        @csrf



                      <div class="mb-4 mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="name" id="nama" placeholder="Masukan Nama" value="{{old('nama', $user->name)}}">
                        @error('name')
                        <div class="alert alert-danger mt-3"> 
                          {{ $message }}
                        </div> 
                        @enderror
                      </div>

                      <div class="mb-3 mt-2">
                        <label for="jurusan" class="form-label">Akses</label>
                      <select class="form-select" name="tipe" id="jurusan">
                        <option value="1">Petugas</option>
                        <option value="2">Admin</option>
                        </select>
                    </div>
                    <div class="col justify-content-end d-flex">
                      <button type="reset" class="btn btn-warning" >Reset</button>
                    <button type="submit" class="btn btn-success ms-2" >Kirim</button>
                  </div>

                      </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>