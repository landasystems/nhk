<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User2 */

$this->title = 'Lupa Password';
?>
<div class="user2-update">
    <?php
//    $this->render('_form', [
//        'model' => $model,
//    ])
//    
    ?>
    <?php $form = ActiveForm::begin(); ?>
    <section id="checkout-page">
        <div class="container">
            <div class="col-xs-12 no-margin">

                <?php
                 foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
                    echo'<br><div class="alert alert-' . $key . ' alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close" > <span aria-hidden="true">&times;</span></button>
                           ' . $message . '
                           </div>
                           ';
                }
                ?>
                <div class="billing-address">
                    <h2 class="border h1">Lupa Password</h2>
                    <div class="other">
                        
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label>Email</label>
                                <input class="le-input" type="text" name="email" value="" required >
                            </div>

                        </div><!-- /.field-row -->

                        <button class="le-button big" type="submit" name="checkout">Save</button>

                    </div>
                </div>
            </div>
    </section>
    <br>
    <?php ActiveForm::end(); ?>
</div>
