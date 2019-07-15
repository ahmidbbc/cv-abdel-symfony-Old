<?php


namespace App\form;

use App\Entity\Coordonnees;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CoordonneesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder    ->add("name", TextType::class, ["label"=>"Nom"])
                    ->add("firstName", TextType::class, ["label"=>"Nom"]);
    }
}