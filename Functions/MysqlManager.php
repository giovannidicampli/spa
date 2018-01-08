<?php

class MysqlClass {

    // parametri per la connessione al database
    private $nomehost = "localhost";
    private $nomeuser = "root";
    private $password = "";
    private $nomedb = "spaDB";
    // controllo sulle connessioni attive
    private $attiva = false;

    // funzione per la connessione a MySQL
    public function connetti() {

        $connessione = mysqli_connect($this->nomehost, $this->nomeuser, $this->password, $this->nomedb);
        return $connessione;
    }

    // funzione per la chiusura della connessione
    public function disconnetti() {
        if ($this->attiva) {
            if (mysqli_close()) {
                $this->attiva = false;
                return true;
            } else {
                return false;
            }
        }
    }

    
}
?>

