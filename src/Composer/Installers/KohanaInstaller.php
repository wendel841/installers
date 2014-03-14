<?php
namespace Composer\Installers;

class KohanaInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'vendor/kohana/{$name}/',
    );
}
