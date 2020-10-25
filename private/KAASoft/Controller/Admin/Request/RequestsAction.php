<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Controller\Admin\Request;

    use KAASoft\Environment\Routes\Admin\RequestRoutes;
    use KAASoft\Controller\AdminActionBase;
    use KAASoft\Environment\Session;
    use KAASoft\Environment\SiteViewOptions;
    use KAASoft\Util\DisplaySwitch;
    use KAASoft\Util\Helper;
    use KAASoft\Util\Paginator;
    use KAASoft\Controller\ControllerBase;
    use Logger;
    use LoggerAppenderRollingFile;
    use LoggerLayoutPattern;
    use LoggerLevel;
    /**
     * Class RequestsAction
     * @package KAASoft\Controller\Admin\Request
     */
    class RequestsAction extends AdminActionBase {
        /**
         * RequestsAction constructor.
         * @param null $activeRoute
         */
        public function __construct($activeRoute = null) {
            parent::__construct($activeRoute);
        }

        /**
         * @param array $args
         * @return DisplaySwitch
         */
        protected function action($args) {
            $page = isset( $args["page"] ) ? $args["page"] : 1;
            $requestDatabaseHelper = new RequestDatabaseHelper($this);
            $perPage = $this->getPerPage(Session::REQUEST_PER_PAGE_NUMBER,
                                         $this->siteViewOptions->getOptionValue(SiteViewOptions::REQUESTS_PER_PAGE));
            $sortColumn = $this->getSortingColumn(Session::REQUEST_SORTING_COLUMN);
            $sortOrder = $this->getSortingOrder(Session::REQUEST_SORTING_ORDER);


            $paginator = new Paginator($page,
                                       $perPage,
                                       $requestDatabaseHelper->getRequestsCount());

            $this->smarty->assign("pages",
                                  $paginator->preparePages($page,
                                                           $this->routeController->getRouteString(RequestRoutes::REQUEST_LIST_VIEW_ROUTE)));

 //ControllerBase::getLogger()->log(LoggerLevel::toLevel(LoggerLevel::FATAL),  "load Requests11111" );
            $requests = $requestDatabaseHelper->getRequests(null,
                                                            $paginator->getOffset(),
                                                            $perPage,
                                                            $sortColumn,
                                                            $sortOrder);
                ControllerBase::getLogger()->log(LoggerLevel::toLevel(LoggerLevel::FATAL),    $requests );

            $this->smarty->assign("requests",
                                  $requests);
            if (Helper::isAjaxRequest()) {
                return new DisplaySwitch('admin/requests/requests-list.tpl');
            }
            else {
                return new DisplaySwitch('admin/requests/requests.tpl');
            }
        }
    }