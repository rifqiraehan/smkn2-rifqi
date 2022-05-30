<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="stylish.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <?php
                    //Mengambil huruf awal dari nama user
                    //Set the header to utf-8 for example purposes.
                    header('Content-Type: text/html; charset=utf-8');

                    //Example string.
                    $string = strtoupper($_SESSION['user_name']);

                    //Use mb_substr to get the first character.
                    $firstChar = mb_substr($string, 0, 1, "UTF-8");

                    //Print out the first character.
                    echo $firstChar; ?>
                </span>

                <div class="text logo-text">
                    <?php
                    //Membatasi kata yang ditampilkan browser sebanyak 2 kata
                    function trimtext($data, $limit) {
                        $arr = explode(" ", $data);
                        $new_arr = array_slice($arr, 0, $limit);
                        return implode(" ", $new_arr);
                    }

                    $test =  $_SESSION['user_name'];
                    //PHP Output Bold
                    echo "<strong>";
                    echo trimtext($test, 2);
                    echo "</strong>";
                    ?>
                    <span class="name"></span>
                    <span class="profession">user</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../live/index.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Data Siswa</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../liveData/index.php">
                            <i class='bx bx-bar-chart-alt icon' ></i>
                            <span class="text nav-text">Data Pengguna</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Peminjaman</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">User Page</div>
        <div class="container col-sm-8 text-center">
        <div class="content">
            <h3>Hai, <span>user</span></h3>
            <h1>Selamat Datang! <span>
            <?php
            //Membatasi kata yang ditampilkan browser sebanyak 2 kata
            $test =  $_SESSION['user_name'];
            echo trimtext($test, 2);
            ?></span></h1>
            <p>Ini Adalah Halaman user</p>
            <a href="../liveUser/index.php" class="btn btn-color">Mulai</a>
        </div>
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click" , () =>{
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click" , () =>{
            body.classList.toggle("dark");

            if(body.classList.contains("dark")){
                modeText.innerText = "Light mode";
            }else{
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>
</html>
