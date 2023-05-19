<?php

class ps_email_verificationsuccessModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign([
            'letsLoginLink' => $this->context->link->getPageLink('authentication')
        ]);

        $this->setTemplate('module:ps_email_verification/views/templates/front/success.tpl');
    }
}
