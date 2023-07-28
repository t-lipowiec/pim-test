<?php

    namespace App\Controller\About;

    use Pimcore\Controller\FrontendController;
    use Symfony\Bridge\Twig\Attribute\Template;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class AboutController extends FrontendController{

        public function aboutAction(Request $request):Response{
            return $this->render('about/about.html.twig');
        }

        #[Template('about/about.html.twig')]
        public function indexAction():array{
            return [];
        }
        
    }