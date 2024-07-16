<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width, initial-scale=1.0"> 
        <title>Tambah Data Peminjam</title>
        <style>
            body{
    background-color: #FCF8F3;
}
.Header{
    padding:20px;
    margin: 10px;
}

.JudulHeader{
    color: #698474;
    font-family: Arial, Helvetica, sans-serif;
    position: absolute;
    margin-top: 40px;
    margin-left: 120px;
    font-size: 30px;
    
}

.NavMenu ul{
    list-style-type: none;
    margin-left: 70%;
    cursor: pointer;
    float: left;
    font-weight: 400;
    
}
.NavMenu ul li{
    list-style-type: none;
    display: inline-block;
    padding: 15px 15px;

}
.NavMenu ul li a{
    color: #698474;
    text-decoration: none;
}

.NavMenu ul li :hover{
    border-bottom: 3px solid #DCA47C;
    transition: all .3s ease ;
    
}
table{
    margin-top: 40px;
    margin-left: 140px;
    color: #DCA47C;
}
form{
    color: #DCA47C;
}
        </style>
    </head>
    
    <body>
    <div class="Header">
    <div class="JudulHeader"><b>Tambah Data Peminjam</b></div>

    </div>

    <div class="NavMenu">
        
        <b><ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tampildata.php">Daftar Peminjam</a></li>
        </ul></b>
        
    </div>

        <table>
            <form action="" method="POST">
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>

                <tr>
                    <td><label for="nohp">NO HP/WA</label></td>
                    <td><input type="nohp" name="nohp" id="nohp" required></td>
                </tr>

                <tr>
                    <td><label for="judulbuku">Judul Buku</label></td> 
                    <td> 
                        <select name="judulbuku" id="judulbuku" required>
                            <option value="Tarikh">At-Tarikh Al-Islamiyah</option> 
                            <option value="alazkar">Al-Adzkar</option> 
                            <option value="Fathul Mu'in">Fathul Mu'in</option> 
                            <option value="Idoh">Idoh Ushul Fiqh</option> 
                            <option value="amsilahjadidah">Amsilatul Jadidah</option> 
                            <option value="mawahibbu">Mawahibu Laduniyah</option> 
                            <option value="qurrotul">Qurrotul Uyyun</option>
                            <option value="minhajul">Minhajul 'Abidin</option>
                            <option value="tafsiribnu">Tafsir Ibnu Katsir</option>
                            <option value="Tafsirjalalain">Tafsir Jalalain</option>
                            <option value="balagoh">Balagoh</option>
                            <option value="tasyrik">Tarikh Tasyrikh Islamiyah</option>
                            <option value="arud">Arud</option>
                            <option value="hadis">Bulugul Marom</option>
                            <option value="alluma">Al-Luma'</option>
                            <option value="kawakib">Kawakib</option>
                            <option value="tafsirahkam">Tafsir Ahkam</option>
                        </select> 
                    </td>
                </tr>

                <tr> 
                    <td><label for="email">Email</label></td> 
                    <td><input type="email" name="email" id="email" required></td> 
                </tr>
                <tr> 
                <td><label for="alamat">Alamat</label></td> 
                <td><input type="text" name="alamat" id="alamat" required></td> 
            </tr> 

            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>
            </form>
        </table>

        <?php

            require("koneksi.php");
            if(isset($_POST["submit"])){
                $nama = $_POST["nama"];
                $nohp = $_POST["nohp"];
                $judulbuku = $_POST["judulbuku"];
                $email = $_POST["email"];
                $alamat = $_POST["alamat"];

                $kirim = "INSERT INTO tbl_lindawardani 
                        VALUES('', '$nama', '$nohp', '$judulbuku', '$email', '$alamat')";
                        mysqli_query($koneksi, $kirim);
                $hasil = mysqli_affected_rows($koneksi);
                if($hasil){
                    echo "<script>
                            alert('Data Berhasil Disimpan');
                            document.location.href = 'tampildata.php';
                    </script";
                }else{
                    echo "<script>
                    alert('Data Gagal Disimpan');
                    document.location.href = 'tampildata.php';
                    </script>";
                }
                
            }

        ?>
    </body>
</html>
