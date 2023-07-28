<?php

    namespace App\Controller\Main;

    use Pimcore\Model\Asset;
    use Pimcore\Controller\FrontendController;
    use Symfony\Bridge\Twig\Attribute\Template;
    use Symfony\Component\HttpFoundation\Request;


    class MainController extends FrontendController
    {

      #[Template('main/main.html.twig')]
      public function mainAction(): array{
        return [];
      }

    }
