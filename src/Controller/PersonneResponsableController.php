<?php
namespace App\Controller;
use App\Entity\PersonneResponsable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

        class PersonneResponsableController extends AbstractController
         {
             #[Route('/personneresponsable/create', name: 'app_personneresponsable_create')]
              public function create(Request $request, EntityManagerInterface $manager): Response
               {
                 $personneresponsable = new PersonneResponsable();
                  $form = $this->createFormBuilder($personneresponsable)
                     ->add('idRP')
                    ->add('NomPR')
                    ->add('PrenomPR')
                    ->add('TelephonePR')
                    ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
                    ->getForm();
                        
                        $form->handleRequest($request);
                        
                        if ($form->isSubmitted() && $form->isValid()) 
                        { 
                            $manager->persist($personneresponsable);
                             $manager->flush();

                              return $this->redirectToRoute('app_personneresponsable_create');
                             }
                             
                             return $this->render('personneresponsable/personne.index.html.twig', [
                                 'formPersonneResponsable'=>$form->createView() 
                                 ]); 
                } 

                #[Route('/formType/success', name: 'app_formType_success')]
                public function success(): Response 
                { 
                 
            return $this->redirectToRoute('app_personneresponsable_create'); 
        }
         } 
