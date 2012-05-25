<?php

namespace Acme\LibraryBundle\Controller;


use Acme\LibraryBundle\Form\Type\AuthorType;

use Acme\LibraryBundle\Model\Author;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/author/new", name="author_new")
     * @Template()
     */
    public function indexAction()
    {

        $author = new Author();
        $form = $this->createForm(new AuthorType(), $author);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $author->save();

                return $this->redirect($this->generateUrl('author_new'));
            }
        }

        return array('form' => $form->createView());
    }
}
