<?php  

class Controles {
    public function Verifnul($var) {
        return !empty($var);
    }

    public function Verifalph($var) {
        return ctype_alpha($var);
    }

    public function Verifnum($var) {
        return is_numeric($var);
    }

    public function Verifdat($var) {
        $date = date_create_from_format('d/m/Y', $var);
        return $date && $date->format('d/m/Y') === $var;
    }
}

?>