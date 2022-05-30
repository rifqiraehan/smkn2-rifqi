<? include_once('header-sidebar.php') ?>
</head>
<body class="">
<!-- Start Navbar -->
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <?php
                //Mengambil huruf awal dari nama admin/user
                //Set the header to utf-8 for example purposes.
                header('Content-Type: text/html; charset=utf-8');

                //Example string.
                $string = strtoupper($_SESSION['admin_name']);

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

                $test =  $_SESSION['admin_name'];
                //PHP Output Bold
                echo "<strong>";
                echo trimtext($test, 2);
                echo "</strong>";
                ?>
                <span class="name"></span>
                <span class="profession">Admin</span>
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
                    <a href=".././multiUserLogin/sidebar-admin.php">
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
            <li class=".././multiUserLogin/logout.php">
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
<!-- End Navbar -->

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
<div class="container" style="min-height:500px;">
