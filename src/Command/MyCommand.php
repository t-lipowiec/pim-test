<?php

    namespace App\Command;

    use Pimcore\Console\AbstractCommand;
    use Pimcore\Model\Asset;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;

    class MyCommand extends AbstractCommand{

        public function configure(){

            $this->setName("app:MyCommand");
            $this->setDescription("Make some my operations");

        }
        public function execute(InputInterface $input, OutputInterface $output){
            $assetListing = new Asset\Listing();
            $assetListing->setCondition("filename LIKE '%.png'");
            $assetListing->setLimit(4);

            foreach($assetListing as $asset){
                $output->writeln("Processing asset ".$asset->getId());
                $asset->addMetadata("expire", "data", time());
                $asset->save();
            }

            $output->writeln("Done");

            return 0;
        }
    }