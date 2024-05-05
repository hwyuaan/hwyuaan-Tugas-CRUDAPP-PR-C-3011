<?php
// include("database.php");

// // Eksekusi query untuk mendapatkan data pesanan
// $query = mysqli_query($conn, "SELECT * FROM pesandb");
// if (!$query) {
//     die("Query error: " . mysqli_error($conn));
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body class="body">
   <div class="container">
        <div class="sidebar">
            <div class="logo">
                <ul class="main">
                    <li class="active">
                        <a href="#" >
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashobard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <span>Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-briefcase"></i>
                            <span>Pemesanan</span>
                        </a>
                    </li>
                    <li class="logout">
                        <a href="login.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <div class="headertitel">
                    <h2>Dashboard</h2>
                </div>

    
                    <div class="search">
                        <i class="fa-solid fa-search"></i>
                        <input type="text">
                    </div>
            </div>
            <a href="<?php echo BASEURL ?>dashboard/tambah"><button type="button" class="tambah">Tambah Data</button></a>
            <div class="table-wrap">
                    <div class="table-container">
                        <table border="0" cellpadding="10px" class="my-table">
                            <thead><br>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Anda</th>
                                    <th>Alamat</th>
                                    <th>Nama Konser</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Bukti</th>
                                <th >Edit</th>
                                <th>Hapus</th>
                                </tr>
                            </thead>
                        <tbody>
                    
                        <?php
                           
                            $no = 0;
                            foreach (user_model::read() as $data) {
                              $no++;
                              echo '<tr>';
                                  echo '<td>' . $no . '</td>';
                                  echo '<td>' . $data["nama"] . '</td>';
                                  echo '<td>' . $data["alamat"] . '</td>';
                                  echo '<td>' . $data["konser"] . '</td>';
                                  echo '<td>' . $data["tanggal"] . '</td>';
                                  echo '<td>' . $data["jumlahtiket"] . '</td>';
                                  echo '<td><img class="foto" src="'.$data["foto"].'" alt=""></td>';
                                  echo '<td><a href="formedit.php?ID='. $data["id"] .'" style="color: black; text-decoration: none;"><button><i class="fas fa-pencil-alt"></i></button><a></td>';
                                  echo '<td><a href="formhapus/index.php?id='. $data["id"] .'" style="color: black; text-decoration: none;"><button><i class="fas fa-trash"></i></button></a></td>';
                              echo '</tr>';
                              }
                            
                       
                        ?>
                         
                        </tbody>
                    </table>
                </div>
            </div>
            

        </div>
   </div>
</body>
</html>