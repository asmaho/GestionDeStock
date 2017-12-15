<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace HTM\UserBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\SecurityController as BaseController ;
class SecurityController extends BaseController
{
    public function loginAction(Request $request)
    {
        return parent::loginAction( $request);
    }
    public function checkAction()
    {
        parent::checkAction();
    }

}
