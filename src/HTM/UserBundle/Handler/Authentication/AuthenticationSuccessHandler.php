<?php

namespace HTM\UserBundle\Handler\Authentication;

use Doctrine\ORM\EntityManager;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Http\HttpUtils;


class AuthenticationSuccessHandler extends DefaultAuthenticationSuccessHandler {

    protected $router;
    protected $security;
    protected $entityManager = null;
    protected $session = null;
    public function __construct( HttpUtils $httpUtils, array $options ,Router $router, SecurityContext $security,EntityManager $entityManager,$session) {
        parent::__construct( $httpUtils, $options );
        $this->router = $router;
        $this->security = $security;
        $this->entityManager = $entityManager;
        $this->session = $session;
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {

        if ($this->security->isGranted('ROLE_SUPER_ADMIN')|$this->security->isGranted('ROLE_ADMIN')) {
            $referer =$this->router->generate('htm_stock');
        } elseif ($this->security->isGranted('ROLE_FOURNISSEUR')) {
            $referer = $this->router->generate('htm_fournisseur_homepage');
        }
        elseif ($this->security->isGranted('ROLE_MAGASINIER')){
           $referer = $this->router->generate('htm_magasinier_homepage');
        }
        return new RedirectResponse($referer);
    }

}
