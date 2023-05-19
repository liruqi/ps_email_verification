<?php

class activateaccountbyemailemailsentmessageModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('module:ps_email_verification/views/templates/front/email-sent-message.tpl');
    }
}
