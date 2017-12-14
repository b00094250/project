<?php

namespace Itb;


class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../views';

    private $mainController;

    public function __construct()
    {
        $twig = new \Twig\Environment(new \Twig_Loader_Filesystem(self::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');


        switch ($action) {

            case 'albums':
                $this->mainController->albumsAction();
                break;

            case 'members':
                $this->mainController->membersAction();
                break;

            case 'news':
                $this->mainController->newsAction();
                break;

            case 'info':
                $this->mainController->infoAction();
                break;

            case 'nomination':
                $this->mainController->nominationAction()
                break;

            case 'about':
                $this->mainController->aboutAction();
                break;

            case 'logout':
                $this->mainController->logoutAction();
                break;

            case 'processLogin':
                $this->mainController->processLoginAction();
                break;

            case 'login':
                $this->mainController->loginAction();
                break;

            case 'home':
            default:
                $this->mainController->homeAction();


        }
    }



}