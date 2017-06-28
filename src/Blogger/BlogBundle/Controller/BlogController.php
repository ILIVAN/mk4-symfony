<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id, $slug, $comments)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('BloggerBlogBundle:Comment')
            ->getCommentsForBlog($blog->getId());

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));
    }
    /**
     * Show a blog entry
     */
    public function showCategoryAction($category)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
            ->getBlogsByCategory($category);

        return $this->render('BloggerBlogBundle:Page:category.html.twig', array(
            'blogs' => $blogs
        ));
    }
}