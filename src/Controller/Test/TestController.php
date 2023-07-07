<?php

    namespace App\Controller\Test;

    use Pimcoore\Controller\FrontendController;
    use Symfony\Bridge\Twig\Attribute\Template;
    use Symfony\Component\HttpFoundation\Request;

    class TestController extends FrontendController
    {
        #[Template('test/test.html.twig')]
        public function testAction(Request $request): array
        {
            return [];
        }
    }