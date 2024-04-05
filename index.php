<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
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
                <div>
                    <div class="table-wrap">

                        <div class="table-container">
                            <table border="0" cellpadding="10px" class="my-table">
                                <thead>
                                    <tr>
                                        <td><button class="btntmbh">Tambah Data</button></td>
                                    </tr>
                                    <tr>
                                        <th>Id</th>
                                        <th>Phone</th>
                                        <th>Name</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>082098765333</td>
                                <td>YUNSSS</td>
                                <td><button><i class='fas fa-pencil-alt'></button></td>
                                <td><button><i class="fas fa-trash"></i></button></td>
                            </tr>
                         
                            <tr>
                                <td>2</td>
                                <td>082098765333</td>
                                <td>YUNSSS</td>
                                <td><button><i class='fas fa-pencil-alt'></button></td>
                                <td><button><i class="fas fa-trash"></i></button></td>
                            </tr>
                         
                            <tr>
                                <td>3</td>
                                <td>082098765333</td>
                                <td>YUNSSS</td>
                                <td><button><i class='fas fa-pencil-alt'></button></td>
                                <td><button><i class="fas fa-trash"></i></button></td>
                            </tr>
                         
                        </tbody>
                    </table></div>
                </div>
            </div>
            

        </div>
   </div>
</body>
</html>