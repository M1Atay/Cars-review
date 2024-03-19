<?php
if (isset($_SESSION['user']) && $_SESSION['user']->role == 'admin'):?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            Sportcars
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/member/categories">Voertuigen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/member/contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <?php
                        try {
                            global $pdo;
                            $userData = $_SESSION['user'] ?? null;

                            if ($userData) {
                                $user_id = $userData->id;


                                $user = getUserDetails($pdo, $user_id);

                                if ($user) {
                                    ?>

                                    <a class="nav-link" href="/logout"><?= $user['first_name'] . ' ' . $user['last_name'] ?>uitloggen</a>
                        <?php
                                }
                            } else {
                                echo "Gebruiker niet ingelogd.";
                            }
                        } catch (PDOException $e) {
                            echo "Niet gelukt: " . $e->getMessage();
                        }
                        ?>
                    </li>
                </ul>
<!--                todo: menu admin-->
            <?php elseif (isset($_SESSION['user']) && $_SESSION['user']->role == 'member'): ?>
<!--                todo: menu member-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/member/home">
                        Sportcars
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/member/categories">Voertuigen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/member/contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/member/user">profiel</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        try {
                            global $pdo;
                            $userData = $_SESSION['user'] ?? null;

                            if ($userData) {
                                $user_id = $userData->id;


                                $user = getUserDetails($pdo, $user_id);

                                if ($user) {
                                    ?>



                        <a class="nav-link" href="/logout"><?= $user['first_name'] . ' ' . $user['last_name'] ?> uitloggen</a>

                                    <?php
                                }
                            } else {
                                echo "Gebruiker niet ingelogd.";
                            }
                        } catch (PDOException $e) {
                            echo "Niet gelukt: " . $e->getMessage();
                        }
                        ?>
                    </li>
                </ul>
            <?php else:?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/home">
                        Sportcars
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/categories">Voertuigen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/register">Registreren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Inloggen</a>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>