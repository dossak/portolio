<?php
namespace App\Controller;

use Twig\Environment;

class PortfolioController
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(): string
    {
        $services = [
            ['title' => 'Gestion de planning', 'desc' => 'Organisation des rendez-vous et agendas.'],
            ['title' => 'Assistance ADV', 'desc' => 'Suivi administratif des ventes.'],
            ['title' => 'Saisie ERP', 'desc' => 'Intégration des données dans votre ERP.'],
            ['title' => 'Community management', 'desc' => 'Animation de vos réseaux sociaux.'],
        ];

        $projects = [
            [
                'title' => 'Application E-commerce',
                'desc' => 'Site de vente développé avec Symfony et Stripe.',
                'image' => 'https://via.placeholder.com/400x300',
                'github' => 'https://github.com/example/ecommerce',
                'demo' => 'https://example.com/ecommerce'
            ],
            [
                'title' => 'Dashboard CRM',
                'desc' => 'Interface de gestion clients en AJAX.',
                'image' => 'https://via.placeholder.com/400x300',
                'github' => 'https://github.com/example/crm',
                'demo' => 'https://example.com/crm'
            ]
        ];

        $skills = ['Symfony', 'PHP', 'SQL', 'HTML5/CSS3', 'Bootstrap', 'JavaScript', 'AJAX', 'Twig', 'Git', 'Responsive Design'];

        $trainings = [
            'Veille sur les nouveautés PHP 8',
            'Formation React 2024',
            'Certificat Scrum Master 2023'
        ];

        $testimonials = [
            ['comment' => 'Travail remarquable sur la gestion des commandes.', 'author' => 'Jean Dupont, CEO ABC'],
            ['comment' => 'Excellent sens du service et du détail.', 'author' => 'Marie Durand, Responsable projet']
        ];

        return $this->twig->render('portfolio/index.html.twig', [
            'services' => $services,
            'projects' => $projects,
            'skills' => $skills,
            'trainings' => $trainings,
            'testimonials' => $testimonials
        ]);
    }
}
