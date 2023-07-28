<?php

use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;

return [
    //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
    PimcoreDataHubBundle::class => ['all' => true],

];
