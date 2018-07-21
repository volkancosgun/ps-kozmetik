{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<form action="{$action}" method="post" id="ccForm" class="credit-card">
    <div class="form-group row">
        <div class="col-md-6">
            <input type="number" name="CNumber" class="form-control" placeholder="Card Number" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3">
            <div class="month">
                <select name="Month" class="form-control" id="ccForm">
                <option value="">Month</option>
                  {foreach from=$months item=month}
            <option value="{$month}">{$month}</option>
          {/foreach}
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="year">
                <select name="Year" class="form-control">
              <option value="">Year</option>
              {foreach from=$years item=year}
            <option value="{$year}">{$year}</option>
          {/foreach}
            </select>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3">
            <input type="text" name="cvv" class="form-control" placeholder="CVV">
        </div>
    </div>
</form>
