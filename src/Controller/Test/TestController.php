<?php

    namespace App\Controller\Test;

    use Pimcore\Controller\FrontendController;
    use Symfony\Bridge\Twig\Attribute\Template;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class TestController extends FrontendController
    {
        public function testAction(Request $request): Response
        {
            return $this->render('test/test.html.twig');
        }
    }