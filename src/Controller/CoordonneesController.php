<?php


namespace App\Controller;



use App\Entity\Coordonnees;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CoordonneesController
 * @package App\Controller
 */
class CoordonneesController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private $em;


    /**
     * AuthorController constructor.
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        $repo = $this->em->getRepository(Coordonnees::class);
        $coordonneesList = $repo->findAll();

        return $this->render('/coordonnees/index.html.twig', [
            'controller_name' => 'CoordonneesController',
            "coordonneesList" => $coordonneesList
        ]);
    }

    /**
     * @Route(/add)
     */
    public function addCoordonnees(Request $request){

        $form = $this->createForm(Coordonnees::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $coordonnees = $form->getData();
            $this->em->persist($coordonnees);
            $this->em->flush();

            return $this->redirectToRoute("index");

        }

        return $this->render('coordonnees/form', [
            'coordonneesForm' =>$form->createView()
        ]);
    }


}