<?php
/**
 * Created by PhpStorm.
 * User: olivier-dev
 * Date: 11/19/18
 * Time: 3:53 PM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
include "../Repository/PlantRepository.php";
echo findAll();

class PlantsController extends  AbstractController
{
    /**
     * Matches /plants exactly
     *
     * @Route("/plants", name="plants_list")
     */
}