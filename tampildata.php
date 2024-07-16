<!DOCTYPE html>
<head>
    <title>Tampil Data Mahasiswi</title>
    <style> 
    body{
    background-color: #FCF8F3;
}
        table, tr, th, td{ 
            border: 1px solid black; 
            border-collapse: collapse; 
            padding: 5px; 
        } 
 
        table{ 
            width: 80%; 
        } 
 
        th{ 
            background-color:#DCA47C ; 
            color: #FCF8F3; 
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


     </style>
</head>
    
    <body>
    <div class="Header">
        <div class="JudulHeader"><b>Daftar Peminjam Buku</b></div>

    </div>

    <div class="NavMenu">
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tambahdata.php">Tambah Peminjam</a></li>
        </ul>
        
    </div>
    <center>
        <table>
            <tr>
                <th>NO</th>
                <th>NAMA LENGKAP</th>
                <th>NO HP/WA</th>
                <th>Judul Buku</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        

        <?php

            require("koneksi.php");

            $dataTabel = "SELECT * FROM tbl_lindawardani";
            $dataTampil = mysqli_query($koneksi, $dataTabel);

            $urut = 1;
            while($data = mysqli_fetch_assoc($dataTampil)):

        ?>

            <tr>
                <td><?php echo $urut; ?></td>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["nohp"];?></td>
                <td><?php echo $data["judulbuku"];?></td>
                <td><?php echo $data["email"];?></td>
                <td><?php echo $data["alamat"];?></td>
                <td> 
                    <a href="ubahdata.php?idMhi=<?= $data['idMhi']; ?>">Edit</a> | 
                    <a href="hapusdata.php?idMhi=<?=$data['idMhi']; ?>" onclick="return confirm('Yakin Mau Hapus Data?')">Hapus</a></td>
            </tr>
            <?php $urut++; ?> 
            <?php endwhile; ?> 
        </table>
        </center>
    </body>

</html>