<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Controller\Admin\Series;

    use Exception;
    use KAASoft\Environment\Routes\Pub\GeneralPublicRoutes;
    use KAASoft\Controller\AdminActionBase;
    use KAASoft\Controller\Controller;
    use KAASoft\Controller\ControllerBase;
    use KAASoft\Database\Entity\General\Series;
    use KAASoft\Util\DisplaySwitch;
    use KAASoft\Util\Helper;
    use KAASoft\Util\Message;

    /**
     * Class SeriesEditAction
     * @package KAASoft\Controller\Admin\Series
     */
    class SeriesEditAction extends AdminActionBase {
        /**
         * SeriesEditAction constructor.
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
            $seriesId = $args["seriesId"];
            $seriesDatabaseHelper = new SeriesDatabaseHelper($this);
            if (Helper::isAjaxRequest()) {
                if (Helper::isPostRequest()) { // POST request
                    try {
                        if ($this->startDatabaseTransaction()) {
                            //$seriesId = $_POST["seriesId"];
                            $series = Series::getObjectInstance($_POST);
                            $series->setId($seriesId);

                            $result = $seriesDatabaseHelper->saveSeries($series);
                            if ($result === false) {
                                $this->rollbackDatabaseChanges();
                                $errorMessage = _("Series saving is failed for some reason.");
                                $this->putArrayToAjaxResponse([ Controller::AJAX_PARAM_NAME_ERROR => $errorMessage ]);
                            }

                            $this->commitDatabaseChanges();
                            $this->putArrayToAjaxResponse([ "seriesId" => $seriesId ]);
                        }
                    }
                    catch (Exception $e) {
                        $this->rollbackDatabaseChanges();
                        ControllerBase::getLogger()->error($e->getMessage(),
                                                           $e);
                        $errorMessage = sprintf(_("Couldn't save Series.%s%s"),
                                                Helper::HTML_NEW_LINE,
                                                $e->getMessage());
                        $this->putArrayToAjaxResponse([ Controller::AJAX_PARAM_NAME_ERROR => $errorMessage ]);
                    }
                }

                return new DisplaySwitch();
            }
            else {
                $series = null;
                if ($seriesId !== null) {
                    $series = $seriesDatabaseHelper->getSeries($seriesId);

                    if ($series === null) {
                        $this->session->addSessionMessage(sprintf(_("Series with id = '%d' is not found."),
                                                                  $seriesId),
                                                          Message::MESSAGE_STATUS_ERROR);

                        return new DisplaySwitch(null,
                                                 $this->routeController->getRouteString(GeneralPublicRoutes::PAGE_IS_NOT_FOUND_ROUTE));
                    }
                }
                $this->smarty->assign("action",
                                      "edit");
                $this->smarty->assign("series",
                                      $series);

                return new DisplaySwitch('admin/series/single-series.tpl');
            }
        }
    }