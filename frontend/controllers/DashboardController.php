<?php
namespace frontend\controllers;

use yii\web\Controller;


/**
 * Site controller
 */
class DashboardController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('walk_in_transaction');
    }
    
    public function actionPaid()
    {
        return $this->render('paid_order');
    }
    
    public function actionUnpaid()
    {
        return $this->render('unpaid_order');
    }
    
    public function actionComplaints()
    {
        return $this->render('complaints');
    }

}
