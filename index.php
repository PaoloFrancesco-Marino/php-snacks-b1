<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack</title>
</head>
<body>


    <h1>Snack #1</h1>

    <!-- PHP -->
    <?php 

        // Random choice team

        $randomChoice  = function($array) {return $array[array_rand($array)];};

        $team = ['Boston Celtics', 'Brooklyn Nets', 'New York Knicks', 'Philadelphia 76ers', 'Toronto Raptors', 'Chicago Bulls', 'Cleveland Cavaliers', 'Detroit Pistons', 'Indiana Pacers', 'Milwaukee Bucks', 'Atlanta Hawks', 'Charlotte Hornets', 'Miami Heat', 'Orlando Magic', 'Washington Wizards', 'Denver Nuggets', 'Minnesota Timberwolves', 'Oklahoma City Thunder', 'Portland Trail Blazers', 'Utah Jazz', 'Golden State Warriors', 'Los Angeles Clippers', 'Los Angeles Lakers', 'Phoenix Suns', 'Sacramento Kings', 'Dallas Mavericks', 'Houston Rockets', 'Memphis Grizzlies', 'New Orleans Pelicans', 'San Antonio Spurs' ];
        
    
    /**
     * Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60
     */

    $matches = [
        [
            'home' => $randomChoice($team),
            'away' => $randomChoice($team),
            'p_home' => rand(50, 120),
            'p_away' => rand(80, 140)
        ],
        [
            'home' => $randomChoice($team),
            'away' => $randomChoice($team),
            'p_home' => rand(80, 120),
            'p_away' => rand(65, 110)
        ],
        [
            'home' => $randomChoice($team),
            'away' => $randomChoice($team),
            'p_home' => rand(70, 100),
            'p_away' => rand(70, 110)
        ],
        [
            'home' => $randomChoice($team),
            'away' => $randomChoice($team),
            'p_home' => rand(70, 90),
            'p_away' => rand(70, 100)
        ]
        ];
    ?>

    <!-- ./end php -->

    <h2>Risultati giornata #1</h2>

    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) : ?>
            <li>
                <?php  echo $matches[$i]['home'] . ' - ' . $matches[$i]['away'] . ' - ' ?> <strong> Risultato: </strong> <?php echo $matches[$i]['p_home'] . '-' . $matches[$i]['p_away'] ?> 
            </li>
        <?php endfor ?>
    </ul>

<hr>


<h1>Snack #2</h1>

<?php 
    /**
     * Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
        1. name sia più lungo di 3 caratteri,
        2. che mail contenga un punto e una chiocciola
        3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     */

    $data = $_GET;

    // check presenza valori
    
    if ( empty($data['name']) || empty($data['mail']) || empty($data['age']) ) {
        echo "Errore: non è stato inserito alcun parametro";
    }
    // check name
    elseif ( strlen($data['name']) <= 3 ) {
        echo 'Accesso Negato: il nome inserito è sbagliato';
    }
    // check mail
    elseif ( strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false ){
        echo 'Accesso negato: email non corretta';
    }
    // check age
    elseif (! is_numeric($data['age']) ) {
        echo 'Accesso Negato: età non corretta';
    
    }
    else {
        echo 'Accesso Eseguito';
    }

?>

<h4>Parametri inseriti:</h4>
<ul>
    <li>
        <strong> Nome:</strong> <?php echo ($data['name']) ?>
    </li>
    <li>
        <strong> Email:</strong> <?php echo ($data['mail']) ?>
    </li>
    <li>
        <strong> Age:</strong> <?php echo ($data['age']) ?>
    </li>
</ul>



    
</body>
</html>