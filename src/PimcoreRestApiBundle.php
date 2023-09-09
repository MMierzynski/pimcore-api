<?php

namespace MMierzynski\PimcoreRestApi;

use Pimcore\Bundle\AdminBundle\Installer;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class PimcoreRestApiBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    public function getComposerPackageName(): string
    {
        return 'mmierzynski/pimcore-rest-api';
    }

    public function getInstaller(): ?Installer
    {
        return $this->container->get(Installer::class);
    }
}
