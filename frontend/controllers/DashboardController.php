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
        return $this->render('customer');
    }
    
    public function actionOrder()
    {
        return $this->render('order');
    }
    
    public function actionPayment()
    {
        return $this->render('payment');
    }
    

}
