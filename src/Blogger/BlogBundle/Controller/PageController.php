<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
            ->getLatestBlogs();
        #Sport
        $sport = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategoryNoComments('sport', $limit = null);
        $capital = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategoryNoComments('capital', $limit = null);
        $nature = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategoryNoComments('nature', $limit = null);
        $culture = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategoryNoComments('culture', $limit = null);

        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'sport' => $sport,
            'capital' => $capital,
            'nature' => $nature,
            'culture' => $culture
        ));
    }
    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from symblog')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo($this->container->getParameter('blogger_blog.emails.contact_email'))
                    ->setBody($this->renderView('BloggerBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));


                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));

            }

        }

        return $this->render('BloggerBlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    public function sidebarAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $tags = $em->getRepository('BloggerBlogBundle:Blog')
            ->getTags();

        $tagWeights = $em->getRepository('BloggerBlogBundle:Blog')
            ->getTagWeights($tags);

        $commentLimit   = $this->container
            ->getParameter('blogger_blog.comments.latest_comment_limit');
        $latestComments = $em->getRepository('BloggerBlogBundle:Comment')
            ->getLatestComments($commentLimit);

        return $this->render('BloggerBlogBundle:Page:sidebar.html.twig', array(
            'latestComments'    => $latestComments,
            'tags'              => $tagWeights
        ));
    }
    public function listAction($category, Request $request, $page = 1)
    {
        $arr = explode('=', $request->getQueryString());
        $page = (int) $arr[1];
        $em = $this->getDoctrine()
            ->getManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategoryQuery($category);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $blogs, /* query NOT result */
            $page/*page number*/,
            5/*limit per page*/
        );
        // parameters to template
        return $this->render('BloggerBlogBundle:Page:list.html.twig', array('pagination' => $pagination));
    }
    public function listCatAction($category, $page)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $query = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategoryQuery($category);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $page/*page number*/,
            5/*limit per page*/
        );
        // parameters to template
        return $this->render('BloggerBlogBundle:Page:list.html.twig', array('pagination' => $pagination));
    }
}
