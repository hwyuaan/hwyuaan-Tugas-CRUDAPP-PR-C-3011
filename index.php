<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                        <a href="#">
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
            <a href="formpesan.php"><button type="button" class="tambah">TAMBAH DATA</button></a>
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
                                <th>Edit</th>
                                <th>Hapus</th>
                                </tr>
                            </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1</td>
                                <td>082098765333</td>
                                <td>YUNSSS</td>
                                <td><button type="submit"><i class="fas fa-pencil-alt"></button></td>
                                <td><button><i class="fas fa-trash"></i></button></td>
                            </tr>
                         
                            <tr>
                                <td>2</td>
                                <td>082098765333</td>
                                <td>YUNSSS</td>
                                <td><button><i class='fas fa-pencil-alt'></button></td>
                                <td><button><i class="fas fa-trash"></i></button></td>
                            </tr>
                          -->
                          <?php
                          include("database.php");
                          $no = 0;
                          foreach (mysqli_query($conn, "SELECT * FROM datapesan") as $data){
                            $no++;
                            echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                echo '<td>'. $data["NamaAnda"] .'</td>';
                                echo '<td>'. $data["Alamat"] .'</td>';
                                echo '<td>'. $data["NamaKonser"] .'</td>';
                                echo '<td>'. $data["Tanggal"] .'</td>';
                                echo '<td>'. $data["JumlahTiket"] .'</td>';
                                echo '<td><a href="formedit.php?ID='. $data["Id"] .'" style="color: black; text-decoration: none;"><button><i class="fas fa-pencil-alt"></i></button><a></td>';
                                echo '<td><a href="formdelete.php?ID='. $data["Id"] .'" style="color: black; text-decoration: none;"><button><i class="fas fa-trash"></i></button><a></td>';
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