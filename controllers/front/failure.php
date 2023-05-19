<?php

class ps_email_verificationfailureModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('module:ps_email_verification/views/templates/front/failure.tpl');
    }
}