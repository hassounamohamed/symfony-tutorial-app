<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function index(Request $request): Response
    {
        $error = null;

        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');

            // Vérification basique (exemple)
            if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
                $error = "Tous les champs sont obligatoires.";
            } elseif ($password !== $confirmPassword) {
                $error = "Les mots de passe ne correspondent pas.";
            }
        }

        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
            'error' => $error, // On passe 'error' à Twig
        ]);
    }
}
