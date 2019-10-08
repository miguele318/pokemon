<!DOCTYPE html>
<?php
class Pokemon
{
    public $nombre = null;
    public $tipo = null;
    public $img = null;
    public $fuerza = null;
    public $evolucion = null;

    function __construct (string $nombre, string $tipo,string $img,int $fuerza,int $evolucion ){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->img = $img;
        $this->fuerza = $fuerza;
        $this->evolucion = $evolucion;

    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

     
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setFuerza($fuerza)
    {
        $this->fuerza=$fuerza;
        
        return $this;
    }
    public function getFuerza()
    {
        return $this->fuerza;
    }
    
    public function getEvolucion()
    {
        return $this->evolucion;
    }

     
    public function setEvolicion($evolucion)
    {
        $this->evolucion = $evolucion;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

}
$pokemones = array();
$pokemones[0] = new pokemon('Bulbasaur', 'Planta','imagenes/bulbasaur.png',60,1);
$pokemones[1] = new pokemon('Charmander', 'Fuego','imagenes/charmander.png',60,1);
$pokemones[2] = new pokemon('squirtle', 'Agua','imagenes/squirtle.png',60,1);
$pokemones[3] = new pokemon('Caterpie', 'Bicho','imagenes/caterpie.png',40,1);
$pokemones[4] = new pokemon('Pidgeotto','Volador','imagenes/pidgeotto.png',80,2);
$pokemones[5] = new pokemon('Arbok','Veneno','imagenes/arbok.png',120,2);
$pokemones[6] = new pokemon('Pikachu', 'Electrico','imagenes/pikachu.png',70,2);
$pokemones[7] = new pokemon('Sandshrew', 'Tierra','imagenes/sandshrew.png',70,1);
$pokemones[8] = new pokemon('Jigglypuff', 'Hada','imagenes/jigglypuff.png',70,2);
$pokemones[9] = new pokemon('Meowth', 'Normal','imagenes/meowth.png',70,1);
$pokemones[10] = new pokemon('Primeape','Lucha','imagenes/primeape.png',90,2);
$pokemones[11] = new pokemon('Kadabra','Psiquico','imagenes/kadabra.png',90,2);
$pokemones[12] = new pokemon('Gengar','Fantasma','imagenes/gengar.png',130,3);
$pokemones[13] = new pokemon('Ivysaur', 'Planta','imagenes/ivysaur.png',100,2);
$pokemones[14] = new pokemon('Charizard', 'Fuego','imagenes/charizard.png',270,3);
$pokemones[15] = new pokemon('Blastoise', 'Agua','imagenes/blastoise.png',240,3);
$pokemones[16] = new pokemon('Butterfree', 'Bicho','imagenes/butterfree.png',130,2);
$pokemones[17] = new pokemon('Pidgeot','Volador','imagenes/pidgeot.png',170,3);
$pokemones[18] = new pokemon('Rattata','Normal','imagenes/rattara.png',40,1);
$pokemones[19] = new pokemon('Raichu', 'Electrico','imagenes/raichu.png',260,3);
$pokemones[20] = new pokemon('Diglett', 'Tierra','imagenes/diglett.png',50,1);
$pokemones[21] = new pokemon('Clefable', 'Hada','imagenes/clefable.png',110,3);
$pokemones[22] = new pokemon('Nidoran', 'Veneno','imagenes/nidoran.png',60,1);
$pokemones[23] = new pokemon('Machoke','Lucha','imagenes/machoke.png',100,2);
$pokemones[24] = new pokemon('Hypno','Psiquico','imagenes/hypno.png',110,2);
$pokemones[25] = new pokemon('Gastly','Fantasma','imagenes/gastly.png',40,1);
$pokemones[26] = new pokemon('Ekans','Veneno','imagenes/ekans.png',70,1);

function mostrarPokemonesporTipo($pokemones,$tipo){
    
        foreach($pokemones as $row){
            if($row->getTipo() ==$tipo){
                echo '<a href="'.$row->getImg().'">
                <div class="m_pokemon">
                <img  class="img_p" src="'.$row->getImg().'"/>
                    <br>
                    <h1 class="pokemon">'.$row->getNombre().'</h1>
                    <h3 class="info_pok"> Tipo: '.$row->getTipo().'</h3>
                    <h3 class="info_pok"> Fuerza: '.$row->getFuerza().'</h3>
                    <h3 class="info_pok"> Evolucion: '.$row->getEvolucion().'</h3>
                </div> </a>';
                
            }
        }

}

function mostrarPokemonesporFuerza($pokemones,$fuerza){
        foreach($pokemones as $row){
            if($row->getFuerza() >=$fuerza){
                echo '<a href="'.$row->getImg().'">
                <div class="m_pokemon">
                <img  class="img_p" src="'.$row->getImg().'"/>
                    <br>
                    <h1 class="pokemon">'.$row->getNombre().'</h1>
                    <h3 class="info_pok"> Tipo: '.$row->getTipo().'</h3>
                    <h3 class="info_pok"> Fuerza: '.$row->getFuerza().'</h3>
                    <h3 class="info_pok"> Evolucion: '.$row->getEvolucion().'</h3>
                </div> </a>';
            }
        }
    
}
function mostrarPokemonesTipoFuerza($pokemones,$fuerza,$tipo){
    
        foreach($pokemones as $row){
            if($row->getFuerza() >=$fuerza and $row->getTipo()==$tipo){

                echo '<a href="'.$row->getImg().'">
                <div class="m_pokemon">
                    <img  class="img_p" src="'.$row->getImg().'"/>
                    <br>
                    <h1 class="pokemon">'.$row->getNombre().'</h1>
                    <h3 class="info_pok"> Tipo: '.$row->getTipo().'</h3>
                    <h3 class="info_pok"> Fuerza: '.$row->getFuerza().'</h3>
                    <h3 class="info_pok"> Evolucion: '.$row->getEvolucion().'</h3>
                </div> </a>';
                
            }
        }
     
}

 

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="CSS/estilo.css">
    <title>Pokedex</title>
    
</head>
<body>
    <header id="cabecera">
        <img class ="imag_cab"src="imagenes/cab_pokedex.jpg">
    </header>
    <div id= "navg">
        <div id=m_pok class="info ">
            <?php
            if((isset($_GET["fuerza"])) or (isset($_GET["tipo"]))){

                if($_GET["fuerza"]!='')
                {   
                   
                    if(($_GET["tipo"])!="--Seleccione--"){
                        mostrarPokemonesTipoFuerza($pokemones,$_GET["fuerza"],$_GET["tipo"]);
                    }else{
                        
                        
                        mostrarPokemonesPorFuerza($pokemones,$_GET["fuerza"]);
        
                    }
                }else{
                    if(($_GET["tipo"])!="--Seleccione--"){
                        mostrarPokemonesporTipo($pokemones,$_GET["tipo"]);
                    }else{
                        echo 'ingrese algun parametro de busqueda';
                    }
                }
            }   
            ?>
        </div>
            <div id="search" class="info">
                <form method="get">
                    Fuerza minima del pokemon:
                    <input type="number" name ="fuerza">
                    <br>
                        Tipo de Pokemon:   
                    <select name="tipo" >
                        <option value"0"> --Seleccione--</option>
                        <option value="Agua">Agua</option> 
                        <option value="Bicho">Bicho</option> 
                        <option value="Electrico">Eléctrico</option> 
                        <option value="Fantasma">Fantasma</option> 
                        <option value="Fuego">Fuego</option> 
                        <option value="Hada">Hada</option> 
                        <option value="Lucha">Lucha</option> 
                        <option value="Normal">Normal</option>
                        <option value="Psiquico">Psiquico</option>
                        <option value="Planta">Planta</option> 
                        <option value="Tierra">Tierra</option>
                        <option value="Veneno">Veneno</option>
                        <option value="Volador">Volador</option>>
                    </select>
                    <input type="submit" value="Buscar">
                </form>


            </div>
        <footer class="pie">
            Creado por Johel Solis
        </footer>
    </div>

</body>
</html>