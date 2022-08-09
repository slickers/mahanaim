    <!-- Navbar -->
    <style>
        .jam-digital-malasngoding {
            overflow: hidden;
            width: 150px;
            margin: 10px auto;
            border: 0px solid #efefef;
        }

        .kotak {
            float: right;
            width: 30px;
            height: 25px;
            background-color: #505050;
        }

        .jam-digital-malasngoding p {
            color: #fff;
            font-size: 18px;
            text-align: center;
            margin-top: 0;
        }

        .pembatas {
            float: right;
            width: 3px;
            height: 6px;
            background-color: #ffffff;
        }
    </style>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <div class="jam-digital-malasngoding">
                <div class="kotak">
                    <p id="detik"></p>
                </div>
                <div class="pembatas"></div>
                <div class="kotak">
                    <p id="menit"></p>
                </div>
                <div class="pembatas"></div>
                <div class="kotak">
                    <p id="jam"></p>
                </div>
            </div>
        </ul>
    </nav>
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>