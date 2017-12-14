<?php
namespace Itb;
use Twig\Environment;

class MainController
{
    private $twig;


    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function indexAction()
    {
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();

        require_once __DIR__ . '/../web/index.php';
    }


    public function homeAction()
    {
        $template = 'home.php';
        $argsArray = [
            'pageTitle' => 'home'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function aboutAction()
    {

        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();



        $template = 'about.html.twig';
        $argsArray = [
            'pageTitle' => 'about'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function infoAction()
    {
        $template = 'Info.html.twig';
        $argsArray = [
            'pageTitle' => 'info'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function albumsAction()
    {
        $template = 'albums.html.twig';
        $argsArray = [
            'pageTitle' => 'albums'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function membersAction()
    {
        $template = 'members.html.twig';
        $argsArray = [
            'pageTitle' => 'members'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function nominationAction()
    {
        $template = 'nomination.html.twig';
        $argsArray = [
            'pageTitle' => 'nomination'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function newsAction()
    {
        $template = 'news.html.twig';
        $argsArray = [
            'pageTitle' => 'news'
        ];
        $html = $this->twig->render($template, $argsArray);
        print $html;
    }



    public function loginAction()
    {
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();

        require_once __DIR__ . '/../views/login.php';
    }

    public function logoutAction()
    {
        // remove 'user' element from SESSION array
        unset($_SESSION['user']);

        // redirect to index action
        $this->indexAction();
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // search for user with username in repository
        $isLoggedIn = User::canFindMatchingUsernameAndPassword($username, $password);

        // action depending on login success
        if($isLoggedIn){
            // STORE login status SESSION
            $_SESSION['user'] = $username;

            require_once __DIR__ . '/../views/loginSuccessful.php';
        } else {
            $message = 'bad username or password, please try again';
            require_once __DIR__ . '/../views/answer.php';
        }
    }

    //--------- helper functions -------


    public function isLoggedInFromSession()
    {
        $isLoggedIn = false;

        // user is logged in if there is a 'user' entry in the SESSION superglobal
        if(isset($_SESSION['user'])){
            $isLoggedIn = true;
        }

        return $isLoggedIn;
    }

    public function usernameFromSession()
    {
        $username = '';

        // extract username from SESSION superglobal
        if (isset($_SESSION['user'])) {
            $username = $_SESSION['user'];
        }

        return $username;
    }

}
