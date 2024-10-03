<?php
namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\Aboutme;
use App\Entity\Banner;
use App\Entity\Contact;
use App\Entity\Contactsection;
use App\Entity\Experience;
use App\Entity\Langage;
use App\Entity\Projects;
use App\Entity\Projectsection;
use App\Entity\Projectstype;
use App\Entity\Setting;
use App\Entity\Skills;
use App\Entity\Skillsection;
use App\Entity\Socialmedia;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
public function __construct(
private AdminUrlGenerator $adminUrlGenerator
){}

#[Route('/admin', name: 'admin')]
//#[IsGranted('ROLE_ADMIN', message: 'Accès impossible')]
public function index(): Response
{
//return parent::index();
$url = $this->adminUrlGenerator
->setController(BannerCrudController::class)
->generateUrl();
return $this->redirect($url);
// Option 1. You can make your dashboard redirect to some common pageof your backend
//
// $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
//return $this->redirect($adminUrlGenerator->setController(AdminController::class)->generateUrl());
// Option 2. You can make your dashboard redirect to different pagesdepending on the user
//
// if ('jane' === $this->getUser()->getUsername()) {
//return $this->redirect('...');
// }
// Option 3. You can render some custom template to display a properdashboard with widgets, etc.
// (tip: it's easier if your template extends from@EasyAdmin/page/content.html.twig)
//
// return $this->render('some/path/my-dashboard.html.twig');
}
public function configureDashboard(): Dashboard
{
return Dashboard::new()
->setTitle('Espace Admin');
}
//#[IsGranted('ROLE_ADMIN', message: 'Accès impossible')]

public function configureMenuItems(): iterable
{
yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
yield MenuItem::linkToCrud('AboutMe', '',Aboutme::class);
yield MenuItem::linkToCrud('Banner', '',Banner::class);
yield MenuItem::linkToCrud('Experience', '',Experience::class);
yield MenuItem::linkToCrud('Langage', '',Langage::class);
yield MenuItem::linkToCrud('Projects', '',Projects::class);
yield MenuItem::linkToCrud('Projectsection', '',Projectsection::class);
yield MenuItem::linkToCrud('Projectstype', '',Projectstype::class);
yield MenuItem::linkToCrud('Setting', '',Setting::class);
yield MenuItem::linkToCrud('Skills', '',Skills::class);
yield MenuItem::linkToCrud('Skillsection', '',Skillsection::class);
yield MenuItem::linkToCrud('Socialmedia', '',Socialmedia::class);
yield MenuItem::linkToCrud('Contact', '',Contact::class);
yield MenuItem::linkToCrud('Contactsection', '',Contactsection::class);

}
}