<?php

namespace App\Service;

use App\Entity\ImpresorasSalones;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class CargaService
{
    private $em;
    /**
     * @param $em
     */
    public function __construct($em)
    {
        $this->em = $em;
    }
    

    public function cargaexcel($file){
      
        
        if ( $file ) {

            $fileFolder = __DIR__ . '/../../public/uploads/';  // En esta carpeta es en la que se almacenará el archivo cargado
            

                $filePathName = md5(uniqid()). $file->getClientOriginalName();
                    // Aplica la función md5 para generar un identificador único para el archivo y concaténalo con la extensión del archivo  
                        try {
                            $file->move($fileFolder, $filePathName);
                            } catch (FileException $e) {
                                throw new \Exception('Ups there is a problem with your file');
                            }
            
            $spreadsheet = IOFactory::load($fileFolder . $filePathName); // Aquí podemos leer desde el archivo excel
            $Row = $spreadsheet->getActiveSheet()->removeRow(1); // Aquí se elimina la primera línea de archivo
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true); // aquí, los datos leídos se convierten en un array
       

        // Obtener la conexión a la base de datos a través del objeto EntityManager de Doctrine
        $tabla = $this->em;
        $conn = $tabla->getConnection();

        // Nombre de la tabla que deseas truncar
        $tableName = 'impresoras_salones';

        // Realizar el truncate
        $sql = 'TRUNCATE TABLE '.$tableName.';';
        $conn->executeStatement($sql);

        foreach ($sheetData as $Row) 
            { 
                $Factura = $Row['A']; // almacena el titulo de las columnas
                $Fecha = $Row['B']; 
                $FechaHora = $Row['C'];    
                $Producto = $Row['D'];
                $Referencia = $Row['E'];
                $Cliente = $Row['F'];
                $Nombre = $Row['G'];
                $Modelo = $Row['H'];
                $Contrato = $Row['I'];
                $idid = $Row['J'];
                $DatosInst = $Row['K'];
                $FechaInicio = $Row['L'];
                $FechaFin = $Row['M'];
                $Cantidad = $Row['N'];
                $Precio = $Row['O'];
                $Dto = $Row['P'];
                $Total = $Row['Q'];
                $OrdenLinea = $Row['R'];
                $A4M = $Row['S'];
                $CantidadA4M = $Row['T'];
                $PrecioA4M = $Row['U'];
                $DtoA4M = $Row['V']; 
                $TotalA4M = $Row['W'];
                $A4C = $Row['X'];
                $CantidadA4C = $Row['Y'];
                $PrecioA4C = $Row['Z'];
                $DtoA4C = $Row['AA'];
                $TotalA4C = $Row['AB'];
                $TOTM = $Row['AC'];
                $CantidadTOTM = $Row['AD'];
                $PrecioTOTM = $Row['AE'];
                $DtoTOTM = $Row['AF'];
                $TotalTOTM = $Row['AG'];
                $TOTC = $Row['AH'];
                $CantidadTOTC = $Row['AI'];
                $PrecioTOTC = $Row['AJ'];
                $DtoTOTC = $Row['AK'];
                $TotalTOTC = $Row['AL'];
                

                    $columna = new ImpresorasSalones(); 
                    $columna->setFactura($Factura);
                    $columna->setFecha($Fecha); 
                    $columna->setFechaHora($FechaHora);    
                    $columna->setProducto($Producto); 
                    $columna->setReferencia($Referencia); 
                    $columna->setCliente($Cliente);
                    $columna->setNombre($Nombre);
                    $columna->setModelo($Modelo);
                    $columna->setContrato($Contrato); 
                    $columna->setidid($idid); 
                    $columna->setDatosInst($DatosInst); 
                    $columna->setFechaInicio($FechaInicio); 
                    $columna->setFechaFin($FechaFin);
                    $columna->setCantidad($Cantidad);
                    $columna->setPrecio($Precio);
                    $columna->setDto($Dto);
                    $columna->setTotal($Total);
                    $columna->setOrdenLinea($OrdenLinea); 
                    $columna->setA4M($A4M);
                    $columna->setCantidadA4M($CantidadA4M); 
                    $columna->setPrecioA4M($PrecioA4M); 
                    $columna->setDtoA4M($DtoA4M);  
                    $columna->setTotalA4M($TotalA4M); 
                    $columna->setA4C($A4C);
                    $columna->setCantidadA4C($CantidadA4C);
                    $columna->setPrecioA4C($PrecioA4C); 
                    $columna->setDtoA4C( $DtoA4C); 
                    $columna->setTotalA4C($TotalA4C); 
                    $columna->setTOTM($TOTM); 
                    $columna->setCantidadTOTM($CantidadTOTM); 
                    $columna->setPrecioTOTM($PrecioTOTM); 
                    $columna->setDtoTOTM($DtoTOTM); 
                    $columna->setTotalTOTM($TotalTOTM); 
                    $columna->setTOTC($TOTC); 
                    $columna->setCantidadTOTC($CantidadTOTC); 
                    $columna->setPrecioTOTC($PrecioTOTC);
                    $columna->setDtoTOTC($DtoTOTC); 
                    $columna->setTotalTOTC($TotalTOTC);           
                    $this->em->persist($columna); 
                    $this->em->flush();

                   
                    
                    // Aquí Doctrine comprueba todos los campos de todos los datos obtenidos y realiza una modificación a la base de datos.
            } 
            unlink($fileFolder.$filePathName); //Aquí con la direccion exacta del archivo lo eliminamos tras subirse a la BD
        }
        
    }
}    