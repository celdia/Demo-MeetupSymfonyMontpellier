<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller {

    public function meetupAction() {


        $parameters = [

            "photo_link" => "http://photos1.meetupstatic.com/photos/member/e/9/4/3/member_248579715.jpeg",
            "name" => "Cellou",
            "city" => "Montpellier",
            "joined" => date('d/m/Y', 1373724389000 / 1000),
            "bio" => "Développeur web (PHP, Symfony, Drupal)",
            "topics" => ["Open Source", "JavaScript", "New technologie", "PHP Framework", "Développement PHP", "PHP", "Symfony", "Drupal", "Symfony2", "Big Data Analytics", "Big Data", "Data Analytics", "Information géospatiale", "Geographic Information Systems: GIS", "Système d'information géographique", "Web mapping", "Technologie mobile", "Entreprenariat", "Start-up Internet", "Internet et Technologie", "Cloud Computing", "JavaScript", "Open source", "Nouvelles technologies", "Développement web", "HTML5"
            ]
        ];

        return $this->render('profile/profile.html.twig', $parameters);
    }

}
