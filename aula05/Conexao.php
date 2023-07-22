<?php
    class Conexao {
        public static function open() {
            return mysqli_connect('localhost', 'root', '', 'db_aula04');
        }
    }
?>
