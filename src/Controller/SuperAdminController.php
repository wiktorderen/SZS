<?php

namespace App\Controller;
use App\Entity\SuperAdmin;


use App\Repository\SuperAdminRepository;
use App\Repository\TrainerRepository;
use App\Repository\TrainingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\Security\Core\Security;


// registerSA
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class SuperAdminController extends AbstractController
{

    /**
     * @Route("/SuperAdmin", name="super_admin_page")
     * @param SuperAdminRepository $SAR
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function SuperAdminPage(Security $user, SuperAdminRepository $SAR, TrainerRepository $TR, TrainingRepository $trainingRepository){
        // SuperAdmin repository
        // $SARepo = $SAR->findAll();
        $GRP = $SAR->GetRootPreview(5);
        $TotalRots = $SAR->CountRoot();
        $GTP = $TR->GetTrainerPreview(5);
        $TotalTrainers = $TR->CountTrainer();
        $GTRepositoryPreview = $trainingRepository->GetTrainingPreview(5);
        $TotalTrainings = $trainingRepository->CountTraining();

        return $this->render('SuperAdmin/index.html.twig',array(
            'controller_name' => 'SuperAdminController',
            'RootName' => $user->getUser()->getUsername(),
            'TotalRots' => $TotalRots,
            'GetRootPreview' => $GRP,
            'TotalTrainers' => $TotalTrainers,
            'GetTrainerPreview' => $GTP,
            'GetTrainingPreview' =>$GTRepositoryPreview,
            'TotalTrainings' =>$TotalTrainings,
        ));
    }
    /**
     * @Route("SuperAdmin/registerSA", name="app_registerSA")
     */
    public function registerSA(Request $request, UserPasswordEncoderInterFace $passEmcoder, Security $user)
    {
        $form = $this->createFormBuilder()
            ->add('username')
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'first_options' =>['label' => 'Password'],
                'second_options' =>['label' => 'Confirm Password']
            ])
            ->add('Add', SubmitType::class,
            [
                'attr' => [
                    'class' => 'btn btn-success float-right'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $data = $form->getData();

            $user = new SuperAdmin();
            $user->setUsername($data['username']);
            $user->setPassword(
                $passEmcoder->encodePassword($user, $data['password'])
            );

            $em = $this->getDoctrine()->getManager();
            $em -> persist($user);
            $em -> flush();
            //przekierowanie do SecurityControllerSuperAdminController
            return $this->redirect($this->generateUrl('super_admin_page'));
        }

    return $this->render('SuperAdmin/CRUD/registerSA.html.twig',array(
        'form' => $form->createView(),
        'controller_name' => 'SuperAdminController_RegisterSA',
        'RootName' => $user->getUser()->getUsername(),
    ));
    }
    /**
     * @Route("SuperAdmin/crudSA", name="super_admin_crud")
     *
     */
    public function SuperAdminPage_CRUD(Security $user){

        return $this->render('SuperAdmin/CRUD/crud.html.twig',array(
            'controller_name' => 'SuperAdminController_CRUD',
            'RootName' => $user->getUser()->getUsername(),
        ));
    }
    /**
     * @Route("SuperAdmin/crudSA/SACRUD", name="SA_CRUD", methods={"GET", "HEAD"})
     */
    public function SuperAdmin_CRUD(Security $user){
        $roots = $this->getDoctrine()->getRepository(SuperAdmin::class)->findAll();

        return $this->render('SuperAdmin/CRUD/SACRUD.html.twig',array(
            'controller_name' => 'SuperAdminController_ROOT_CRUD',
            'Roots' => $roots,
            'RootName' => $user->getUser()->getUsername(),
        ));
    }
    /**
     * @Route("SuperAdmin/crudSA/SACRUD/show/{id}", name="SA_CRUD_Show")
     */
    public function SuperAdmin_CRUD_Show($id, Security $user){
        $roots = $this->getDoctrine()->getRepository(SuperAdmin::class)->find($id);

        return $this->render('SuperAdmin/CRUD/SACRUD_show.html.twig',array(
            'controller_name' => 'SuperAdminController_ROOT_CRUD_SHOW',
            'Roots' => $roots,
            'RootName' => $user->getUser()->getUsername(),
        ));
    }

}