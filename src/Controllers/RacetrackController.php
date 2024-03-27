<?php 


class RacetrackController {
    use Response;

    public function racetrackPage() {
        $this->render("racetrack"); 
    }
}