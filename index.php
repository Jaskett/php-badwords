<?php
    $myPar = "I know it's all my fault
    Made you put down your guard
    I know I made you fall
    Then said you were wrong for me
    I lied to you, I lied to you, I lied to you (to you)
    Can't hide the truth, I stayed with her in spite of you
    You did some things that you regret, still ride for you
    'Cause this house is not a home";

    var_dump($_GET);

    $censured = $_GET['censured'];

    $myNewPar = str_replace($censured, "***", $myPar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>

    <form action="" method="GET">
        <input type="text" name="censured" placeholder="Inserisci la parola da censurare" value="<?php echo $censured ?>">
        <button>
            Censura
        </button>
    </form>

    <hr>

    <p>
        <?php echo $myPar; ?>
    </p>

    <span>
        Lunghezza del testo: <?php echo strlen($myPar); ?> parole
    </span>

    <hr>

    <div>
        Badword passata come parametro in GET: <?php echo $censured; ?>
    </div>

    <p>
        <?php echo $myNewPar; ?>
    </p>

    <span>
        Lunghezza del testo censurato: <?php echo strlen($myNewPar); ?> parole
    </span>
</body>
</html>