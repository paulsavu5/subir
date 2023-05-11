<?php

namespace App\Form;

use App\Entity\ImpresorasSalones;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubirExcelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Factura')
            ->add('Fecha')
            ->add('FechaHora')
            ->add('Producto')
            ->add('Referencia')
            ->add('Cliente')
            ->add('Nombre')
            ->add('Modelo')
            ->add('Contrato')
            ->add('idid')
            ->add('DatosInst')
            ->add('FechaInicio')
            ->add('FechaFin')
            ->add('Cantidad')
            ->add('Precio')
            ->add('Dto')
            ->add('Total')
            ->add('OrdenLinea')
            ->add('A4M')
            ->add('CantidadA4M')
            ->add('PrecioA4M')
            ->add('DtoA4M')
            ->add('TotalA4M')
            ->add('A4C')
            ->add('CantidadA4C')
            ->add('PrecioA4C')
            ->add('DtoA4C')
            ->add('TotalA4C')
            ->add('TOTM')
            ->add('CantidadTOTM')
            ->add('PrecioTOTM')
            ->add('DtoTOTM')
            ->add('TotalTOTM')
            ->add('TOTC')
            ->add('CantidadTOTC')
            ->add('PrecioTOTC')
            ->add('DtoTOTC')
            ->add('TotalTOTC')
            ->add('file')
            ->add('submit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImpresorasSalones::class,
        ]);
    }
}
