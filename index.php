<!DOCTYPE html>
<html>
<head>
    <?php $base = "../../" ?>
    <base href="../../">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/facebox.js"></script>
    <script src="js/gameSettings.js"></script>
    <link rel="stylesheet" type="text/css" href="css/facebox.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox()
        })
    </script>
</head>
<body>
<div class="container">
    <?php include $base."header.php"; ?>
    <nav>
        <ul>
        <li><a href="">Home</a></li>
<!--            <li><a href="games/empty">Empty Template</a></li>-->
        </ul>
        <?php include $base."leftMenuGame.php"; ?>

    </nav>
    <article>
        <h1 id="gameName">Sudokill</h1>
        <h3 id="groupName">By team Marshmallow, Fall 2020</h3>
        <h3>Instructions:</h3>
        <div class="jumbotron">
            <p> This is a 2-player twist on the classic sudoku game. </p>
            <p> If you do not know how to solve a sudoku puzzle, or need a refresher, please read these rules:
            <a href="https://www.learn-sudoku.com/sudoku-rules.html">learn-sudoku.com</a> </p>

            <p> <strong> Rules </strong>
            <ul>
                <li> You are given the standard Sudoku board. There is an initial layout of numbers that violates no constraints. </li>
                <li> Players alternate in placing numbers on the board, always trying to avoid violating the constraints. </li>
                <li> The first player may begin by playing in any unoccupied space.  </li>
                <li> After this, each player must play in an unoccupied space in either the same row or the same column as the last move (unless there are no such squares at all in which case that player may play anywhere). </li>
                <li> The first player to make a move that violates the Sudoku rules loses. </li>
            </ul>
            <br>
            <p> Press pop-up to access game window. To begin: Player 1 should simply input a number into one of the squares</p>

        </div>

        <h3>Leaderboard:</h3>
        <div id="scoreArea", class="jumbotron">
            <?php
            include $base."getScore.php";
            /*
            * arg1: gameName, should be the same as the dir name
            * arg2: if your score is sortable, pass 1 if higher score is better, 0
            *       if smaller score is better. Otherwise no need to pass variable
            */
            getScore("sudokill");
            ?>
        </div>
        <h3>Play game in a pop up window:<h3>
        <form id="gameSettings" class="well"></form>
        <h4>Screenshot:</h4>
        <img src="./games/sudokill/sudokill.png" width="100%" height="100%"></img>
    </article>
    <?php include $base."footer.php"; ?>
</div>
<script type="text/javascript">
    newWindowBtn(1000,1000,"./games/sudokill/sudokill.html",[]);
</script>
</body>
</html>
