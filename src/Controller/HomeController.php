<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Project;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $projets = $this
            ->getDoctrine()
            ->getRepository(Project::class)
            ->findAll();

        $contact = new Contact();
        $contactForm = $this->createForm(ContactType::class, $contact);
        $contactForm->handleRequest($request);

        if($contactForm->isSubmitted() && $contactForm->isValid()){
            $manager->persist($contact);
            $manager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'projets' => $projets,
            'form' => $contactForm->createView(),
        ]);
    }
    /**
     * @Route("/single_projet/{id}", name="single_projet")
     */
    public function single( Project $project): Response
    {
        return $this->render('component/single_projet.html.twig', [
            'projet' => $project,
        ]);
    }


}
