<?php
// Se crea clase que tomara y evaluara los descuentos.
class Descuentos{
    // Inicializar los metodos.
    public $FechaI;
    public $FechaF;
    public $Descripcion;
    public $CantidadE;
    public $Direccion;
    public $Ciudad;
    public $Descuento;
    public $Aumento;
    public $Dias;
    public $VTotal;

    

    public function __construct(){
        $this->FechaI= 0;
        $this->FechaF= 0;
        $this->Descripcion= 0;
        $this->CantidadE= 0;
        $this->Direccion= 0;
        $this->Ciudad= 0;
        $this->Descuento= 0;
        $this->Aumento = 0;
        $this->Dias = 0;
        $this->VTotal = 0;
    }




    // Funciones para validar descuento y aumento.
    public function discount(){
        $des = 0;
        if($this->Descuento== 1){
            $des = $this->VTotal*0.05;
            echo "Se aplicó un descuento del 5%";
            
        }
        else{
            $des = $this->VTotal;

            echo "No se aplicó ningún descuento";
        }
        return $des;
    }
    public function aumento(){
        $aumento = 0;
        if($this->Aumento == 1){
            $aumento = $this->VTotal*0.5;
            echo "Se aplicó un aumento del 5%";
        }else{
            $aumento = $this->VTotal;

            echo "No se aplicó ningún aumento";
        }
        return $aumento;
    }


    // Metodo para almacenar los datos recogidos de el formulario.
    public function generar_Descuento($Descuento, $VTotal){
        $this->Descuento= $Descuento;
        $this->VTotal = $VTotal;
    }
    public function generar_Aumento($Aumento, $VTotal){
        $this->Aumento= $Aumento;
        $this->VTotal = $VTotal;
    }
}
// $des = new Descuentos();
// $des->generar_Descuento(18,1,1,100000);
// $des->Estructura();
// $d_edad = $des->d_Edad();
// $d_aprendiz = $des->d_Pertenece();
// $d_adso = $des->d_Addso();

// echo "<br>".$d_edad;
// echo "<br>".$d_adso;
// echo "<br>".$d_aprendiz;

?>