<body class="bg-gradient-white" style="background-color: white;">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg" style="height: 550px;">
                    <div class="card-body p-0 h-100 d-flex align-items-center">
                        <!-- Nested Row within Card Body -->
                        <div class="row w-100">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-1">Toko Yokatta 7 Mulyo</h1>
                                        <p>Alamat: Ds. Karangmulyo, Kec. Tambakromo, Kab. Pati, Jawa Tengah</p>
                                    </div>
                                    <?= $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?= base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username">
                                            <?= form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" placeholder="Masukan Password" name="password">
                                            <?= form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-dark col-md-3">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
