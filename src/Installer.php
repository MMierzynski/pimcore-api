<?php

namespace MMierzynski\PimcoreRestApi;

use Pimcore\Extension\Bundle\Installer\Exception\InstallationException;
use Pimcore\Extension\Bundle\Installer\SettingsStoreAwareInstaller;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\NullOutput;

class Installer extends SettingsStoreAwareInstaller
{

    /**
     * @inheritDoc
     */
    public function install(): void
    {
        // TODO: Implement install() method.
    }

    /**
     * @inheritDoc
     */
    public function uninstall(): void
    {
        // TODO: Implement uninstall() method.
    }
}
