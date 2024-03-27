<?php 


class NotFoundController {
    use Response;

    public function notFoundPage() {
        $this->render("404");
    }
}