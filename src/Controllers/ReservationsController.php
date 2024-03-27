<?php 

class ReservationsController {
    use Response;

    public function reservationPage() {
        $this->render("reservation");
        
    }
}