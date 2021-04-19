<?php

class Funcionario
{
    private $nome = "";
    private $salario;
    private $lista_cargos = [
        'desenvolvedor',
        'gerente'
    ];
    private $lista_carreiras = [
        'Full-Stack - I',
        'Full-Stack - II',
        'Full-Stack - III',
    ];
    /**
     * public function calcularSarlario()
     *     {
     *         if (strcmp($cargo, "desenvolvedor")) {
     *             if (strcmp($carreira, "fullstack1")) {
     *                 return 2000.00;
     *             } else if (strcm($carreira, "fullstack2")) {
     *                 return 3000.00;
     *             } else if (strcm($carreira, "fullstack3")) {
     *                 return 4000.00;
     *             }
     *         } else if (strcm($carreira, "gerente")) {
     *             return 6000.00;
     *         } else {
     *             var_dump("cargo não encontrado");
     *             exit;
     *             return -1;
     *         }
     *     }
     **/
    public function novoCalcularSalario($nome, $cargo, $carreira)
    {
        // var_dump(in_array($cargo, $this->lista_cargos));die;
        if (!in_array($cargo, $this->lista_cargos)) {
            echo "Cargo não encontrado";
            exit;
        }
        
        if($cargo != "desenvolvedor"){
            $this->salario = 6000;
            $cargoSalario = [
                'nome' => $nome,
                'cargo' => $cargo,
                'salario'> $this->salario
            ];
            return $cargoSalario;
        }
        switch ($this->lista_carreiras) {
            case ($carreira === "Full-Stack - I"):
                $this->salario = 2000.00;
                $cargoSalario = [
                    'nome' => $nome,
                    'cargo' => $cargo,
                    'salario'=>$this->salario
                ];
                break;
            case ( $carreira === "Full-Stack - II"):
                $this->salario = 3000.00;
                $cargoSalario = [
                    'nome' => $nome,
                    'cargo' => $cargo,
                    'salario'=>$this->salario
                ]; 
                break;
            case ( $carreira === "Full-Stack - III"):
                $this->salario = 4000.00;
                $cargoSalario = [
                    'nome' => $nome,
                    'cargo' => $cargo,
                    'salario'=>$this->salario
                ];
                break;
        }
        return $cargoSalario;
    }
}

$salarioCalculado = new Funcionario;

$calculado = $salarioCalculado->novoCalcularSalario("Marcos", "desenvolvedor", "Full-Stack - I");
var_dump(json_encode($calculado, true));

