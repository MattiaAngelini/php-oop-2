<?php
trait MadeIn {
    private $country;

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getCountry() {
        return $this->country;
    }
}
?>