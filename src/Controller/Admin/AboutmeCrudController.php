<?php

namespace App\Controller\Admin;

use App\Entity\Aboutme;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AboutmeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Aboutme::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('title1'),
            TextField::new('title2'),
            TextField::new('phone'),
            TextField::new('local'),
            TextField::new('signature'),
            TextField::new('altsignature'),
            TextField::new('image'),
            TextField::new('altimage'),
            //TextEditorField::new('description'),
        ];
    }
    
}
