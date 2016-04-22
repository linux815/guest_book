<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Cookie;
use AppBundle\Entity\Entry;
use AppBundle\Form\EntryType;

class GuestController extends Controller
{

    public $num, $pervpage, $page2left, $page1left, $page1right, $page2right, $nextpage, $page;

    /**
     * @Route("/{page}", name="homepage")
     */
    public function homepageAction(Request $request, $page)
    {
        $form = $this->createFormBuilder()
                ->setAction($this->generateUrl('homepage'))
                ->setMethod('POST')
                ->add('name', TextType::class)
                ->add('email', EmailType::class)
                ->add('text', TextareaType::class)
                ->add('save', SubmitType::class)
                ->getForm();

        // Pagination
        if (!isset($page)) {
            $this->page = 1;
        } else {
            $this->page = trim($page);
        }

        $post = $this->allEntryAction();
        $posts = count($post);

        if ($posts < 10) {
            if ($posts == 0) {
                $this->num = 1;
            } else {
                $this->num = $posts;
            }
        } else {
            $this->num = 10;
        }

        $total = intval(($posts - 1) / $this->num) + 1;

        $this->page = intval($this->page);

        if (empty($this->page) or $this->page < 0) {
            $this->page = 1;
        }
        if ($this->page > $total) {
            $this->page = $total;
        }

        $start = $this->page * $this->num - $this->num;

        $em       = $this->getDoctrine()->getManager();
        $repo     = $em->getRepository('AppBundle:Entry');
        $allEntry = $repo->findBy(array(), array("id" => "DESC"), $this->num, $start);

        if ($request->isMethod('POST')) {
            $em     = $this->getDoctrine()->getManager();
            $entity = new Entry();

            $form = $this->createFormBuilder($entity)
                    ->add('name', TextType::class)
                    ->add('email', EmailType::class)
                    ->add('text', TextareaType::class)
                    ->add('save', SubmitType::class)
                    ->getForm();
            $form->handleRequest($request);

            $validator = $this->get('validator');
            $errors    = $validator->validate($entity);

            if (count($errors) > 0) {

                return $this->render('guest/index.html.php', array(
                            'allEntry' => $allEntry,
                            'form'     => $form->createView(),
                            'errors'   => $errors,
                ));
            } else {
                $this->createAction($request);
                return $this->redirectToRoute('homepage');
            }
        }

        $session = $request->getSession();

        if ($session->get('sid') == null) {
            $sidSession = 'error';
        } else {
            $sidSession = $session->get('sid');
        }

        if (isset($_COOKIE['sid'])) {
            $cookie = $_COOKIE['sid'];
        } else {
            $cookie = 'error';
        }

        if ($this->page != 1) {
            $this->pervpage = '<a href=/1>« To the begining</a>
                               <a href=/' . ($this->page - 1) . '>« Back</a> ';
        }

        if ($this->page != $total) {
            $this->nextpage = ' <a href=/' . ($this->page + 1) . '>Forward »</a>
        		                <a href=/' . $total . '>In the end »</a>';
        }

        if ($this->page - 2 > 0) {
            $this->page2left = ' <a href=/' . ($this->page - 2) . '>' . ($this->page - 2) . '</a> ';
        }
        if ($this->page - 1 > 0) {
            $this->page1left = '<a href=/' . ($this->page - 1) . '>' . ($this->page - 1) . '</a> ';
        }
        if ($this->page + 2 <= $total) {
            $this->page2right = ' <a href=/' . ($this->page + 2) . '>' . ($this->page + 2) . '</a>';
        }
        if ($this->page + 1 <= $total) {
            $this->page1right = ' <a href=/' . ($this->page + 1) . '>' . ($this->page + 1) . '</a>';
        }

        return $this->render('guest/index.html.php', array(
                    'allEntry'   => $allEntry,
                    'form'       => $form->createView(),
                    'session'    => $sidSession,
                    'cookie'     => $cookie,
                    'num'        => $this->num,
                    'pervpage'   => $this->pervpage,
                    'page2left'  => $this->page2left,
                    'page1left'  => $this->page1left,
                    'page'       => $this->page,
                    'page1right' => $this->page1right,
                    'page2right' => $this->page2right,
                    'nextpage'   => $this->nextpage
        ));
    }

    /**
     * Creates a new Entry entity.
     *
     */
    public function createAction(Request $request)
    {
        $em       = $this->getDoctrine()->getManager();
        $entity   = new Entry();
        $response = new Response();
        $session  = $request->getSession();

        if (isset($_COOKIE['sid'])) {
            $sid    = $_COOKIE['sid'];
            $cookie = $_COOKIE['sid'];
        } else {
            if (!$session->get('sid')) {
                $sid = $this->generateSidAction(10);
                $session->set('sid', $sid);
            }
        }

        if (!isset($cookie)) {
            $expire = time() + 3600 * 24 * 100;
            $response->headers->setCookie(new Cookie('sid', $sid, $expire));
            $response->send();
        }

        if (isset($sid)) {
            $entity->setSid($sid);
        }

        $form = $this->createFormBuilder($entity)
                ->add('name', TextType::class)
                ->add('email', EmailType::class)
                ->add('text', TextareaType::class)
                ->add('save', SubmitType::class)
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($entity);
            $em->flush();
        }
    }

    /**
     * Delete a Entry entity.
     *
     * @Route("/delete/{id}", name="delete")
     */
    public function deleteAction($id)
    {
        if (is_numeric($id)) {
            $em     = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Entry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entry entity.');
            }

            $em->remove($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('homepage'));
        } else {
            throw $this->createNotFoundException('Sorry, but this incorrect entry');
        }
    }

    /**
     * Generate random sid
     *
     */
    public function generateSidAction($length = 10)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code  = "";
        $clen  = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }

    /**
     * All entry
     *
     */
    public function allEntryAction()
    {
        $allEntry = $this->getDoctrine()
                ->getRepository('AppBundle:Entry')
                ->findAll();

        return $allEntry;
    }

}