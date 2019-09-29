<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#"><img
                src="https://icons-for-free.com/iconfiles/png/512/friend+human+man+member+person+profile+user+users+icon-1320168707291252637.png"
                alt="Icon-people" style="width: 10%;
">Painel do Usuário</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav  ml-auto ">
            <?php
            if (isset($_SESSION['id'])) {
                ?>
                <li class="nav-item">
                    <a class="nav-link">Olá <?php echo $_SESSION['email'] ?></a>
                </li>
                <li class="nav-item active">
                    <form method="POST">
                        <input  type="submit" class="btn btn-secondary" name="logout" value="sair">
                    </form>
                </li>
                <?php
            }
            ?>
        </ul>

    </div>
</nav>

<?php

if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.php');
}