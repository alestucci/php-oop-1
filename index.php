<?php
    class Movie {
        public $title;
        public $genre;
        public $year;
        public $director;
        public $awards;
        public $box_office_gross;

        public function __construct($_title, $_genre, $_year, $_director) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->director = $_director;
        }

        public function setAwards($awards_number) {
            $this->awards = $awards_number;
        }
        
        public function setBoxOffice($_box_office_gross) {
            $this->box_office_gross = $_box_office_gross;
        }
    };

    $titanic = new Movie('Titanic', 'Drama', 1997, 'James Cameron');
    $matrix = new Movie('Matrix', 'Sci-Fi', 1999, 'Lana and Lilly Wachovski');
    $twelve_monkeys = new Movie('12 Monkeys', 'Thriller', 1995, 'Terry Gilliam');

    $matrix->setBoxOffice(463517383);
    $titanic->setAwards(11);

    // var_dump($titanic);
    // var_dump($matrix);
    // var_dump($twelve_monkeys);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>Movies</h1>
    <h2><?= $titanic->title ?></h2>
    <ul>
        <li><span style="font-weight: 600;">Genre: </span><?= $titanic->genre ?></li>
        <li><span style="font-weight: 600;">Year: </span><?= $titanic->year ?></li>
        <li><span style="font-weight: 600;">Director: </span><?= $titanic->director ?></li>
        <li><span style="font-weight: 600;">Academy Awards: </span><?= $titanic->awards ?></li>
    </ul>
    <h2><?= $matrix->title ?></h2>
    <ul>
        <li><span style="font-weight: 600;">Genre: </span><?= $matrix->genre ?></li>
        <li><span style="font-weight: 600;">Year: </span><?= $matrix->year ?></li>
        <li><span style="font-weight: 600;">Director: </span><?= $matrix->director ?></li>
        <li><span style="font-weight: 600;">Box Office: </span> $ <?= $matrix->box_office_gross ?></li>
    </ul>
    <h2><?= $twelve_monkeys->title ?></h2>
    <ul>
        <li><span style="font-weight: 600;">Genre: </span><?= $twelve_monkeys->genre ?></li>
        <li><span style="font-weight: 600;">Year: </span><?= $twelve_monkeys->year ?></li>
        <li><span style="font-weight: 600;">Director: </span><?= $twelve_monkeys->director ?></li>
    </ul>
</body>
</html>