<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="http://www.pngonly.com/wp-content/uploads/2017/06/Nyan-Cat-Free-PNG.png" alt="Icon-people" style="width: 5%; margin-right: 10px;">Painel do Usuário</a>
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
                    <a class="nav-link"><?php echo $_SESSION['email'] ?></a>
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
}