<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Menambah Layanan Praktek\style.css">
</head>
<body>
        <!-- Layanan -->
        <section id="membership">
            <div class="tengah">
                <div class="kolom">
                    <h2>Layanan</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus reprehenderit voluptatem recusandae? Obcaecati amet, maiores, iusto quidem earum voluptas repudiandae at suscipit blanditiis nam possimus sed, consequuntur fugiat. Doloribus, repudiandae.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 mb-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://img.freepik.com/free-vector/doctors-concept-illustration_114360-1515.jpg?w=1380&t=st=1682750853~exp=1682751453~hmac=a3ea911931976df1c22e11c1bf9226b532c3bb930018223dc2b7af8ac0822da5" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Layanan</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, esse</p>
                                <a href="#Formpesan" class="btn btn-primary">Add</a>
                            </div> 
                        </div>
                    </div>
                </div>      
            </div>
        </section>
        <!-- Form -->
        <section id="Formpesan">
            <form action="Form Registrasi Mobil">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col">
                        <h2>Form Tambah Layanan</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="" class="row justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Layanan</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="Fullname"
                            
                        />
                    </div>

                    <div class="col-md-8 mb-3">
                        <label
                            for="exampleFormControlTextarea1"
                            class="form-label"
                            >Deskripsi Layanan</label>
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                        ></textarea>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label
                            for="exampleFormControlInput1"
                            class="form-label"
                            >Jam Praktek</label
                        >
                        <input
                            type="datetime-local"
                            class="form-control"
                            id="exampleFormControlInput1"
                        />
                    </div>

                    <div class="col-md-8 mb-3">
                        <label
                            for="exampleFormControlInput1"
                            class="form-label"
                            >Harga</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            id="exampleFormControlInput1"
                        />
                        <br>
                        <a href="#" class="btn btn-primary">Tambah Layanan</a>
                    </div>
                    
            </div>
            </form>
        </section>
</body>
</html>