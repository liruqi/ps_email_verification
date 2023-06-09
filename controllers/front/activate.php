<?php

class ps_email_verificationactivateModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        if ($this->checkEmailLinkAndActivate() === true){
            header("Location: ".$this->context->link->getModuleLink('ps_email_verification', 'success'));
            exit;
        }else{
            $this->setTemplate('module:ps_email_verification/views/templates/front/failure.tpl');
        }
    }

    private function checkEmailLinkAndActivate()
    {
        $token = Tools::getValue('token');
        $db = Db::getInstance();
        $theCustomer = $db->ExecuteS('select active from ' . _DB_PREFIX_ . 'customer where email_activation_token="' . $token . '"');
        if (!empty($theCustomer) > 0 && intval($theCustomer[0]['active']) === 0){
            if (!$db->Execute('update ' . _DB_PREFIX_ . 'customer set active=1 where email_activation_token="' . $token . '"')){
                return false;
            }
            return true;
        }else{
            return false;
        }
    }
}
