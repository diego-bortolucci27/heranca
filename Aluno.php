<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa
    {
        private $matricula;
        private $curso;

        public function pagarMensalidade()
        {
            echo "<p> Pagando Mensalidade do aluno " . '<strong>' . $this->getNome() . '</strong>' . "</p>";
        }

        public function getMatricula()
        {
            return $this->matricula;
        }

        public function getCurso()
        {
            return $this->curso;
        }

        public function setMatricula($mat)
        {
            $this->matricula = $mat;
        }

        public function setCurso($cur)
        {
            $this->curso = $cur;
        }

    }

?>