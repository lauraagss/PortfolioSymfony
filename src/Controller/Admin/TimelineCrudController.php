<?php

namespace App\Controller\Admin;

use App\Entity\Timeline;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TimelineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Timeline::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nameTechnology','Technologie'),
            TextField::new('description','Description'),
            DateField::new('created_at','Date début projet'),
            DateField::new('finish_at','Date fin projet'),
        ];
    }
}
