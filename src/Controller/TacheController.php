<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TacheController extends AbstractController
{
    // Afficher toutes les taches
    #[Route('/taches', name: 'app_taches')]
    public function index(TacheRepository $tacheRepository): Response
    {
        $taches = $tacheRepository->findAll();

        return $this->render('tache/index.html.twig', [
            'taches' => $taches,
        ]);
    }

    // Ajouter une tache en dur
    #[Route('/taches/ajouter', name: 'app_tache_ajouter')]
    public function ajouter(EntityManagerInterface $entityManager): Response
    {
        $tache = new Tache();

        $tache->setTitre('Apprendre Symfony');
        $tache->setDescription('Comprendre les entites et les controllers');
        $tache->setTerminee(false);
        $tache->setDateCreation(new \DateTime());

        $entityManager->persist($tache);//indique à Doctrine qu'il faut enregistrer cette nouvelle tâche.
        $entityManager->flush();//exécute l'enregistrement dans la base de données.

        return new Response('Tache ajoutee avec succes !');
    }

    // Afficher le detail d'une tache
    #[Route('/taches/{id}', name: 'app_tache_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id, TacheRepository $tacheRepository): Response
    {
        $tache = $tacheRepository->find($id);

        if (!$tache) {
            throw $this->createNotFoundException('Tache introuvable');
        }

        return $this->render('tache/detail.html.twig', [
            'tache' => $tache,
        ]);
    }
}