<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\DomCrawler\Image;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title','Nom du projet'),
            TextField::new('description','Description'),
            TextField::new('technology','Technologies'),
            ImageField::new('image','Image')
                ->setBasePath($this->getParameter('app.path.images_projets'))
                ->hideOnForm(),
            ImageField::new('imageFile','Image')
                ->setFormType(VichImageType::class)
                ->setFormTypeOptions(['allow_delete'=>false])
                ->onlyOnForms(),
            ImageField::new('documentation','Documentation')
                ->setBasePath($this->getParameter('app.path.documentations_projets'))
                ->hideOnForm(),
            ImageField::new('docFile','Documentation')
                ->setFormType(VichImageType::class)
                ->setFormTypeOptions(['allow_delete'=>false])
                ->onlyOnForms(),
            DateField::new('create_at','Date début projet'),
            DateField::new('finish_at','Date fin projet'),
        ];
    }

}
