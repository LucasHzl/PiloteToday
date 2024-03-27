<?php 


class HomeController {
    use Response;

    public function index() {
        $this->render("index");
        
    }
}