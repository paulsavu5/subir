<?php

namespace App\Entity;

use App\Repository\ImpresorasSalonesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ImpresorasSalonesRepository::class)]
class ImpresorasSalones
{
    public function __construct( $Factura = null, $Fecha = null, $FechaHora = null, $Producto = null, $Referencia = null, $Cliente = null,
    $Nombre = null, $Modelo = null, $Contrato = null, $idid = null, $DatosInst = null, $FechaInicio = null, $FechaFin = null, $Cantidad = null,
    $Precio = null, $Dto = null, $Total = null, $OrdenLinea = null, $A4M = null, $CantidadA4M = null, $PrecioA4M = null, $DtoA4M = null,  
    $TotalA4M = null, $A4C = null, $CantidadA4C = null, $PrecioA4C = null, $DtoA4C = null, $TotalA4C = null, $TOTM  = null, 
    $CantidadTOTM = null, $PrecioTOTM = null, $DtoTOTM = null, $TotalTOTM = null, $TOTC = null, $CantidadTOTC = null, $PrecioTOTC = null,
    $DtoTOTC= null, $TotalTOTC = null )
    {
        $this->Factura = $Factura;
        $this->Fecha = $Fecha; 
        $this->FechaHora = $FechaHora;    
        $this->Producto = $Producto;
        $this->Referencia = $Referencia; 
        $this->Cliente = $Cliente;
        $this->Nombre = $Nombre;
        $this->Modelo = $Modelo;
        $this->Contrato = $Contrato; 
        $this->idid = $idid; 
        $this->DatosInst = $DatosInst; 
        $this->FechaInicio = $FechaInicio; 
        $this->FechaFin = $FechaFin;
        $this->Cantidad = $Cantidad; 
        $this->Precio = $Precio;
        $this->Dto = $Dto; 
        $this->Total = $Total;
        $this->OrdenLinea = $OrdenLinea; 
        $this->A4M = $A4M; 
        $this->CantidadA4M = $CantidadA4M; 
        $this->PrecioA4M = $PrecioA4M; 
        $this->DtoA4M = $DtoA4M;  
        $this->TotalA4M = $TotalA4M; 
        $this->A4C = $A4C;
        $this->CantidadA4C = $CantidadA4C;
        $this->PrecioA4C = $PrecioA4C; 
        $this->DtoA4C = $DtoA4C; 
        $this->TotalA4C = $TotalA4C; 
        $this->TOTM = $TOTM; 
        $this->CantidadTOTM = $CantidadTOTM; 
        $this->PrecioTOTM = $PrecioTOTM; 
        $this->DtoTOTM = $DtoTOTM; 
        $this->TotalTOTM = $TotalTOTM;
        $this->TOTC = $TOTC; 
        $this->CantidadTOTC = $CantidadTOTC; 
        $this->PrecioTOTC = $PrecioTOTC;
        $this->DtoTOTC = $DtoTOTC; 
        $this->TotalTOTC = $TotalTOTC;
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Factura = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Fecha = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $FechaHora = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Producto = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Referencia = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Cliente = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nombre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Modelo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Contrato = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idid = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $DatosInst = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $FechaInicio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $FechaFin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Cantidad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Precio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Dto = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Total = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $OrdenLinea = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $A4M = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CantidadA4M = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrecioA4M = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DtoA4M = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TotalA4M = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $A4C = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CantidadA4C = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrecioA4C = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DtoA4C = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TotalA4C = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TOTM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CantidadTOTM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrecioTOTM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DtoTOTM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TotalTOTM = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TOTC = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CantidadTOTC = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PrecioTOTC = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DtoTOTC = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TotalTOTC = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactura(): ?string
    {
        return $this->Factura;
    }

    public function setFactura(?string $Factura): self
    {
        $this->Factura = $Factura;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->Fecha;
    }

    public function setFecha(?string $Fecha): self
    {
        $this->Fecha = $Fecha;

        return $this;
    }

    public function getFechaHora(): ?string
    {
        return $this->FechaHora;
    }

    public function setFechaHora(?string $FechaHora): self
    {
        $this->FechaHora = $FechaHora;

        return $this;
    }

    public function getProducto(): ?string
    {
        return $this->Producto;
    }

    public function setProducto(?string $Producto): self
    {
        $this->Producto = $Producto;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    public function setReferencia(?string $Referencia): self
    {
        $this->Referencia = $Referencia;

        return $this;
    }

    public function getCliente(): ?string
    {
        return $this->Cliente;
    }

    public function setCliente(?string $Cliente): self
    {
        $this->Cliente = $Cliente;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(?string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->Modelo;
    }

    public function setModelo(?string $Modelo): self
    {
        $this->Modelo = $Modelo;

        return $this;
    }

    public function getContrato(): ?string
    {
        return $this->Contrato;
    }

    public function setContrato(?string $Contrato): self
    {
        $this->Contrato = $Contrato;

        return $this;
    }

    public function getidid(): ?string
    {
        return $this->idid;
    }

    public function setidid(?string $idid): self
    {
        $this->idid = $idid;

        return $this;
    }

    public function getDatosInst(): ?string
    {
        return $this->DatosInst;
    }

    public function setDatosInst(?string $DatosInst): self
    {
        $this->DatosInst = $DatosInst;

        return $this;
    }

    public function getFechaInicio(): ?string
    {
        return $this->FechaInicio;
    }

    public function setFechaInicio(?string $FechaInicio): self
    {
        $this->FechaInicio = $FechaInicio;

        return $this;
    }

    public function getFechaFin(): ?string
    {
        return $this->FechaFin;
    }

    public function setFechaFin(?string $FechaFin): self
    {
        $this->FechaFin = $FechaFin;

        return $this;
    }

    public function getCantidad(): ?string
    {
        return $this->Cantidad;
    }

    public function setCantidad(?string $Cantidad): self
    {
        $this->Cantidad = $Cantidad;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->Precio;
    }

    public function setPrecio(?string $Precio): self
    {
        $this->Precio = $Precio;

        return $this;
    }

    public function getDto(): ?string
    {
        return $this->Dto;
    }

    public function setDto(?string $Dto): self
    {
        $this->Dto = $Dto;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->Total;
    }

    public function setTotal(?string $Total): self
    {
        $this->Total = $Total;

        return $this;
    }

    public function getOrdenLinea(): ?string
    {
        return $this->OrdenLinea;
    }

    public function setOrdenLinea(?string $OrdenLinea): self
    {
        $this->OrdenLinea = $OrdenLinea;

        return $this;
    }

    public function getA4M(): ?string
    {
        return $this->A4M;
    }

    public function setA4M(?string $A4M): self
    {
        $this->A4M = $A4M;

        return $this;
    }

    public function getCantidadA4M(): ?string
    {
        return $this->CantidadA4M;
    }

    public function setCantidadA4M(?string $CantidadA4M): self
    {
        $this->CantidadA4M = $CantidadA4M;

        return $this;
    }

    public function getPrecioA4M(): ?string
    {
        return $this->PrecioA4M;
    }

    public function setPrecioA4M(?string $PrecioA4M): self
    {
        $this->PrecioA4M = $PrecioA4M;

        return $this;
    }

    public function getDtoA4M(): ?string
    {
        return $this->DtoA4M;
    }

    public function setDtoA4M(?string $DtoA4M): self
    {
        $this->DtoA4M = $DtoA4M;

        return $this;
    }

    public function getTotalA4M(): ?string
    {
        return $this->TotalA4M;
    }

    public function setTotalA4M(?string $TotalA4M): self
    {
        $this->TotalA4M = $TotalA4M;

        return $this;
    }

    public function getA4C(): ?string
    {
        return $this->A4C;
    }

    public function setA4C(?string $A4C): self
    {
        $this->A4C = $A4C;

        return $this;
    }

    public function getCantidadA4C(): ?string
    {
        return $this->CantidadA4C;
    }

    public function setCantidadA4C(?string $CantidadA4C): self
    {
        $this->CantidadA4C = $CantidadA4C;

        return $this;
    }

    public function getPrecioA4C(): ?string
    {
        return $this->PrecioA4C;
    }

    public function setPrecioA4C(?string $PrecioA4C): self
    {
        $this->PrecioA4C = $PrecioA4C;

        return $this;
    }

    public function getDtoA4C(): ?string
    {
        return $this->DtoA4C;
    }

    public function setDtoA4C(?string $DtoA4C): self
    {
        $this->DtoA4C = $DtoA4C;

        return $this;
    }

    public function getTotalA4C(): ?string
    {
        return $this->TotalA4C;
    }

    public function setTotalA4C(?string $TotalA4C): self
    {
        $this->TotalA4C = $TotalA4C;

        return $this;
    }

    public function getTOTM(): ?string
    {
        return $this->TOTM;
    }

    public function setTOTM(?string $TOTM): self
    {
        $this->TOTM = $TOTM;

        return $this;
    }

    public function getCantidadTOTM(): ?string
    {
        return $this->CantidadTOTM;
    }

    public function setCantidadTOTM(?string $CantidadTOTM): self
    {
        $this->CantidadTOTM = $CantidadTOTM;

        return $this;
    }

    public function getPrecioTOTM(): ?string
    {
        return $this->PrecioTOTM;
    }

    public function setPrecioTOTM(?string $PrecioTOTM): self
    {
        $this->PrecioTOTM = $PrecioTOTM;

        return $this;
    }

    public function getDtoTOTM(): ?string
    {
        return $this->DtoTOTM;
    }

    public function setDtoTOTM(?string $DtoTOTM): self
    {
        $this->DtoTOTM = $DtoTOTM;

        return $this;
    }

    public function getTotalTOTM(): ?string
    {
        return $this->TotalTOTM;
    }

    public function setTotalTOTM(?string $TotalTOTM): self
    {
        $this->TotalTOTM = $TotalTOTM;

        return $this;
    }

    public function getTOTC(): ?string
    {
        return $this->TOTC;
    }

    public function setTOTC(?string $TOTC): self
    {
        $this->TOTC = $TOTC;

        return $this;
    }

    public function getCantidadTOTC(): ?string
    {
        return $this->CantidadTOTC;
    }

    public function setCantidadTOTC(?string $CantidadTOTC): self
    {
        $this->CantidadTOTC = $CantidadTOTC;

        return $this;
    }

    public function getPrecioTOTC(): ?string
    {
        return $this->PrecioTOTC;
    }

    public function setPrecioTOTC(?string $PrecioTOTC): self
    {
        $this->PrecioTOTC = $PrecioTOTC;

        return $this;
    }

    public function getDtoTOTC(): ?string
    {
        return $this->DtoTOTC;
    }

    public function setDtoTOTC(?string $DtoTOTC): self
    {
        $this->DtoTOTC = $DtoTOTC;

        return $this;
    }

    public function getTotalTOTC(): ?string
    {
        return $this->TotalTOTC;
    }

    public function setTotalTOTC(?string $TotalTOTC): self
    {
        $this->TotalTOTC = $TotalTOTC;

        return $this;
    }
}
