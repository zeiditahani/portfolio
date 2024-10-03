<?php

namespace App\Controller\Admin;

use App\Entity\Setting;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SettingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Setting::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('email'),
            TextField::new('local'),
            TextField::new('phone'),
            TextField::new('rights'),
            TextField::new('metadescription'),
            TextField::new('titletag'),
            TextField::new('logo'),
            TextField::new('altlogo'),
            IntegerField::new('maxexperience'),
            IntegerField::new('maxprojects'),
            IntegerField::new('maxskills'),
            AssociationField::new('socialmedia'),
        ];
    }
    
}
