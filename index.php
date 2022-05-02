<? php
    class Movie {
        public $title;
        public $genre;
        public $year;
        public $director;
        public $awards;
        public $box_office_gross;

        public __constructor($_title, $_genre, $_year, $_director) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->director = $_director;
        };

        public function setAwards($awards_number) {
            $this->awards = $awards_number;
        };
        
        public function setBoxOffice($_box_office_gross) {
            $this->box_office_gross = $_box_office_gross;
        };
    };

    $titanic = new Movie('Titanic', 'Drama', 1997, 'James Cameron');
    $matrix = new Movie('Matrix', 'Sci-Fi', 1999, 'Lana and Lilly Wachovski');
    $twelve_monkeys = new Movie('12 Monkeys', 'Thriller', 1995, 'Terry Gilliam');

    var_dump($titanic);
    var_dump($matrix);
    var_dump($twelve_monkeys);
?>