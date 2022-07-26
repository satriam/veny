<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/registrasi.css" rel="stylesheet" media="all">

    <title>Form Registrasi</title>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" style="text-align: center;">Pendaftaran Akun Karyawan</h2>
                    <form method="POST" action="home/input_user.php">
                            <div class="input-group">
                                <label class="label">id karyawan</label>
                                <input class="input--style-4" type="int" name="id_karyawan">
                            </div>
                            <div class="input-group">
                                <label class="label">Nama Lengkap</label>
                                <input class="input--style-4" type="text" name="nama_karyawan">
                            </div>
                            <div class="input-group">
                            <label class="label">Jenis Kelamin</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Laki - Laki
                                        <input type="radio" checked="checked" name="jenis_kelamin" value="pria">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Perempuan
                                        <input type="radio" name="jenis_kelamin" value="wanita">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="label">Tanggal Lahir</label>
                                <input class="input--style-4" type="date" name="tgl_lahir">
                            </div>
                            <div class="input-group">
                                <label class="label">Alamat</label>
                                <input class="input--style-4" type="text" name="alamat_karyawan">
                            </div>
                            <div class="input-group">
                                <label class="label">No Telpon</label>
                                <input class="input--style-4" type="phone" name="no_karyawan">
                            </div>
                            <div class="input-group">
                                <label class="label">Username</label>
                                <input class="input--style-4" type="text" name="username">
                            </div>
                            <div class="input-group">
                                <label class="label">Password</label>
                                <input type="password" class="input--style-4" type="text" name="password">
                            </div>
                            <div class="p-t-15">
                                <center><button class="btn btn--radius-2 btn--blue" type="submit">Daftar</button></center>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
