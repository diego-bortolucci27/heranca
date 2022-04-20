<?php

    require_once 'Pessoa.php';

    class Professor extends Pessoa
    {
        private $especialidade;
        private $salario;
        
        public function receberAumento()
        {
            echo "<p>" . "Professor " . $this->getNome() . " está recebendo um aumento" . "</p>";
        }

        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function getSalario()
        {
            return $this->getSalario();
        }

        public function setEspecialidade($esp)
        {
            $this->especialidade = $esp;
        }

        public function setSalario($sal)
        {
            $this->salario = $sal;
        }
    }

?>