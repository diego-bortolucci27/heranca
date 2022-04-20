<?php

    require_once 'Aluno.php';

    class Tecnico extends Aluno
    {
        private $registroProfissional;
        
        public function praticar()
        {
            echo "<p> O Técnico está praticando. </p>";
        }

        public function getRegistroProfissional()
        {
            return $this->registroProfissional;
        }

        public function setRegistroProfissional($resgPro)
        {
            $this->registroProfissional = $resgPro;
        }
    }

?>