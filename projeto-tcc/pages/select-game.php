<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- HTML5 & page default configs -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> KidScript | Selecionar um Jogo </title>
    <!-- HTML5 default configs -->

    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <!-- icons -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../components/header/header.css">
    <link rel="stylesheet" href="../styles/utils.css">
    <link rel="stylesheet" href="../styles/select-game.css">
    <!-- Page styles -->
</head>

<body>

    <?php include '../components/header/header.php'; ?>

    <main>
        <section class="section">
            <div class="select-game-title">
                <h1>Bora Aprender e Brincar?</h1>
            </div>
                <div class="card snake-game">
                    <div class="content">
                        <h2>Introdução à programação</h2>
                        <ul>
                            <li> &diams; Entenda o que é a programação</li>
                            <li style="color:#fff"> &diams; Entenda como funcionam as linguagens de estilo</li>
                            <li> &diams; Pratique se divertindo com o snake game</li>
                        </ul>
                        <a href="../pages/explication.php"><button class="btn btn-exp">Conteúdos</button></a>
                    </div>
                    <div class="game">
                        <h2>Com o <span>Snake Game</span></h2>

                        <img src="../assets/images/snake-transparent.png" alt="">
                        <a href="../pages/game.php"><button class="btn btn-exp">
                                Jogar
                            </button></a>
                    </div>
                    <script src="../assets/script/select-game.js"></script>
                </div>

                <div class="card monkey-game">
                    <h2>Monkey Script</h2>
                    <img src="../assets/images/funny-brown-monkey.png" alt="">
                    <button class="btn btn-blocked">
                        Em Breve
                    </button>
                </div>
        </section>
    </main>
</body>

</html>