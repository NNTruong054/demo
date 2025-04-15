<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP3</title>
    <style>
        .container {
        width: 900px;
        margin: auto;
        font-family: "Times New Roman", Times, serif;
        }
        .banner {
        border: 1px solid blue;
        height: 80px;
        font-size: 20px;
        }
        .main {
        display: flex;
        border: 1px solid blue;
        height: 300px;
        font-size: 20px;
        }
        .menu {
        width: 150px;
        border-right: 1px solid blue;
        padding: 10px 5px;
        }
        .menu a {
        display: block;
        margin-bottom: 20px;
        }
        .footer {
        border: 1px solid blue;
        font-size: 20px;
        }
        .tintuc {
        color: blue;
        }
        .xahoi {
        color: blue;
        }
        .giaitri {
        text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center; font-size:50px;"><strong>Ghép Trang</strong></h1>

        <div class="banner">
            <?php include "banner.php"; ?>
        </div>

        <div class="main">
            <div class="menu">
                <?php include_once 'menu.php'; ?>
            </div>
            <div class="content">
                <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'tintuc':
                                require 'tintuc.php';
                                break;
                            case 'xahoi':
                                require_once 'xahoi.php';
                                break;
                            case 'giaitri':
                                include 'giaitri.php';
                                break;
                            default:
                                include 'main.php';
                                break;
                        }
                    } else {
                        include 'main.php'; 
                    }
                ?>
            </div>
        </div>

        <div class="footer">
            <?php require_once 'footer.php'; ?>
        </div>
    </div>
</body>
</html>
