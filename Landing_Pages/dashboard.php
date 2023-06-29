<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="dash_styles.css">
</head>

<body>


    <header class="header">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="heading">
            <p>Happiness Index</p>
        </div>
    </header>

    <section class="sidebar">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"></span>
                        <span class="title">DASHBOARD</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="code-outline"></ion-icon></span>
                        <span class="title">Overall</span>
                    </a>
                </li>
                <li>
                    <a href="ce.php">
                        <span class="icon"><ion-icon name="code-outline"></ion-icon></span>
                        <span class="title">Computer</span>
                    </a>
                </li>
                <li>
                    <a href="it.php">
                        <span class="icon"><ion-icon name="code-outline"></ion-icon></span>
                        <span class="title">Information Technology</span>
                    </a>
                </li>
                <li>
                    <a href="extc.php">
                        <span class="icon"><ion-icon name="code-outline"></ion-icon></span>
                        <span class="title">Electronics & Telecommunication</span>
                    </a>
                </li>
                <li>
                    <a href="in.php">
                        <span class="icon"><ion-icon name="code-outline"></ion-icon></span>
                        <span class="title">Instrumentation</span>
                    </a>
                </li>
                <li>
                    <a href="ec.php">
                        <span class="icon"><ion-icon name="code-outline"></ion-icon></span>
                        <span class="title">Electronics & Computer</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <div class="main">
        <div class="card">
            <div class="up">Total No. Of Entries</div>
            <div class="down">
                <h4>
                    <?php include 'C:\xampp\htdocs\Prog\Card_Values\Dashboard\tot_ent.php'; ?>
                </h4>
            </div>
        </div>
        <div class="card">
            <div class="up">Current Overall Index</div>
            <div class="down">
                <h4>
                    <?php include 'C:\xampp\htdocs\Prog\Card_Values\Dashboard\ovr_ind.php'; ?>
                </h4>
            </div>
        </div>
        <div class="card"></div>
        <div class="card">
            <div class="up">Domain Distribution Chart</div>
            <div class="down4">
                <?php include 'C:\xampp\htdocs\Prog\Charts\ovr_chart.php'; ?>
            </div>
        </div>
        <div class="card">
            <div class="up">Number of Boys</div>
            <div class="down">
                <h6>
                    <?php include 'C:\xampp\htdocs\Prog\Card_Values\Dashboard\tot_mf.php';
                    echo $mno; ?>
                </h6>
            </div>
        </div>
        <div class="card">
            <div class="up">Index of Boys</div>
            <div class="down">
                <h6>
                    <?php include 'C:\xampp\htdocs\Prog\Card_Values\Dashboard\ind_mf.php';
                    echo $m_value; ?>
                </h6>
            </div>
        </div>
        <div class="card">
            <div class="up">Number of Girls</div>
            <div class="down">
                <h6>
                    <?php include 'C:\xampp\htdocs\Prog\Card_Values\Dashboard\tot_mf.php';
                    echo $fno; ?>
                </h6>
            </div>
        </div>
        <div class="card">
            <div class="up">Index of Girls</div>
            <div class="down">
                <h6>
                    <?php include 'C:\xampp\htdocs\Prog\Card_Values\Dashboard\ind_mf.php';
                    echo $f_value; ?>
                </h6>
            </div>
        </div>
    </div>


    <script></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>