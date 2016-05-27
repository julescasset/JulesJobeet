<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 27/05/2016
 * Time: 15:44
 */

namespace Ens\JulesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\JulesBundle\Entity\Category;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $category = $em->getRepository('EnsJulesBundle:Category')->findOneBySlug($slug);

        if (!$category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $category->setActiveJobs($em->getRepository('EnsJulesBundle:Job')->getActiveJobs($category->getId()));

        return $this->render('EnsJulesBundle:Category:show.html.twig', array(
            'category' => $category,
        ));
    }

}