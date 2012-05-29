<?php
use \NetBricks\Facade as _;

_::cfg()->getCouchdb()
        ->setDatabase('nbtutorial')
        ->setHost('91.228.198.68')
        ->setUser('nbtutorial')
        ->setPassword('pdszk3wi3c')
        ->setPort(5984)
        ->setProxyDir(__DIR__ . '/../var/proxies');

/*_::cfg()->getPage()->getPhoto()
        ->setBigWidth(800)
        ->setBigHeight(600)
        ->setBigRatioHeight(true)

        ->setTinyWidth(120)
        ->setTinyHeight(80)
        ->setTinyRatioWidth(true)

        ->setMiddleWidth(264)
        ->setMiddleHeight(197)
        ->setMiddleRatioHeight(true)

        ->setThumbWidth(79)
        ->setThumbHeight(60)
        ->setThumbRatioWidth(true);*/

_::cfg()->getHeader()->getStyleSheets()->setDefaultJqueryUiTheme('netbricks');

_::cfg()->setTempDir(__DIR__ . '/../var/tmp');

_::cfg()->getUser()->setSavePath('../var/documents/users');

_::user()->addRole('guest')->addRole('reader');
_::services()->setInheritedAllowed(array('admin'));