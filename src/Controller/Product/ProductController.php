<?php

    namespace App\Controller\Product;

    use Pimcore\Controller\FrontendController;
    use Symfony\Bridge\Twig\Attribute\Template;
    use Symfony\Component\HttpFoundation\Request;


    class ProductController extends FrontendController
    {
        #[Template('product/product.html.twig')]
        public function productAction(): array
        {
            

            return [];
        }
    }
