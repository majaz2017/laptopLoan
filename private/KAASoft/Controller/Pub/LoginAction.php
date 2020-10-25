<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Controller\Pub;

    use KAASoft\Controller\PublicActionBase;
    use KAASoft\Util\DisplaySwitch;
    use KAASoft\Util\Helper;
    use KAASoft\Controller\ControllerBase;
    use Logger;
    use LoggerAppenderRollingFile;
    use LoggerLayoutPattern;
    use LoggerLevel;
    /**
     * Class LoginAction
     * @package KAASoft\Controller\Pub
     */
    class LoginAction extends PublicActionBase {
        /**
         * IndexAction constructor.
         * @param null $activeRoute
         */
        public function __construct($activeRoute) {
            parent::__construct($activeRoute,
                                true);
        }

        /**
         * @param array $args
         * @return DisplaySwitch
         */
        protected function action($args) {
   ControllerBase::getLogger()->log(LoggerLevel::toLevel(LoggerLevel::FATAL), $args  );          
            $login = $this->session->getLogin();
            if (Helper::isPostRequest()) {

                $login = $_POST['login'];
                $password = $_POST['password'];

                $user = $this->session->attemptLogin($this,
                                                     $login,
                                                     $password);
                $this->session->login($user,
                    isset( $_POST["rememberMe"] ));
            }

            $this->smarty->assign("login",
                                  $login);

            return new DisplaySwitch('auth/login.tpl');
        }
    }