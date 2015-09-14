<?php

namespace Acme\Controller;

class HomeController
{
    /**
     * @var \Twig_Environment
     */
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke()
    {
        return $this->twig->render('/app/views/home.twig');
    }
}
