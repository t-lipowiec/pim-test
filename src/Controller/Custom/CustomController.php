<?php

    namespace App\Controller\Custom;

    use Pimcore\Controller\FrontendController;
    use Symfony\Bridge\Twig\Attribute\Template;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class CustomController extends FrontendController
    {
        public function customAction(Request $request):Response
        {
            return $this->render('about/about.html.twig');
        }
    }