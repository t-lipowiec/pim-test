<?php

    namespace App\Controller\Product;

    use Pimcore\Model\Asset;
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

        #[Template('product/product.html.twig')]
        public function productAssets(): array
        {
            //Creating new asset
            /*
            $asset = new Asset();
            $asset->setParentId(1);
            $asset->setFilename("my-first-asset1.jpg");
            $asset->setData(file_get_contents("https://static.polityka.pl/_resource/res/path/4a/6d/4a6d831b-b1e2-4408-9687-5fc616ed0a94_f1600x768"));
            $asset->save();
            */

            //Modyfing existing asset
            /*
            $asset = Asset::getById(13);
            $asset->setData(file_get_contents("https://geography.name/wp-content/uploads/2015/10/Denali-National-Park-Stoney-Dome.jpg"));
            $asset->save();
            */

            //Mod metadata
            /*
            $asset = Asset::getById(13);
            $asset->addMetadata("my-data", "input", "there is some additional meta information");
            $asset->save();
            */

            //Deleting asset
            /*
            $asset = Asset::getById(13);
            $asset->delete();
            */
            return [];
        }
    }
