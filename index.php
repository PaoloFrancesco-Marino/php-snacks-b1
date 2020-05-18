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
            'p_away' => rand(50, 110)
        ],
        [
            'home' => $randomChoice($team),
            'away' => $randomChoice($team),
            'p_home' => rand(50, 100),
            'p_away' => rand(60, 110)
        ],
        [
            'home' => $randomChoice($team),
            'away' => $randomChoice($team),
            'p_home' => rand(50, 90),
            'p_away' => rand(50, 100)
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



    
</body>
</html>