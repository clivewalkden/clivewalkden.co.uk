---
extends: _layouts.post
id: 75
meta_title: Testing your Magento success page
meta_description: If you want to check your styling on the success page without having to enter a transaction.
title: Testing your Magento success page
short_intro: This method allows you to check the styling of your Magento success page.
intro: If you want to check the styling on your Magento success page without having to enter a transaction everytime this little update will allow you to do just that.
published: 2014-09-17 00:00:00
hide: false
category: magento
hero:
author: Clive Walkden
section: content
---

There are several plugins that add functionality to the order success page in Magento, testing to make sure the styling matches your site layout can become tedious if you have to enter multiple orders.

I've found a way to circumvent the need to enter orders to view the page, it does require edits to the Magento core files and should be changed back as soon as you&#39;ve completed your testing. **Failure to do so will prevent the system functioning correctly for all future orders!**

For this to work you need to have 1 successful order in the system as we need to reference this in the update.

Open `/app/code/core/Mage/Checkout/controllers/OnepageController.php` you need to look for the successAction() method around line 275 as this is method that controlls the success page logic. It should look very similiar to the code below.

```php
public function successAction()
{
  $session = $this->getOnepage()->getCheckout();
  if (!$session->getLastSuccessQuoteId()) {
    $this->_redirect('checkout/cart');
    return;
  }

  $lastQuoteId = $session->getLastQuoteId();
  $lastOrderId = $session->getLastOrderId();
  $lastRecurringProfiles = $session->getLastRecurringProfileIds();

  if (!$lastQuoteId || (!$lastOrderId && empty($lastRecurringProfiles))) {
    $this->_redirect('checkout/cart');
    return;
  }

  $session->clear();
  $this->loadLayout();
  $this->_initLayoutMessages('checkout/session');

  Mage::dispatchEvent('checkout_onepage_controller_success_action', array('order_ids' => array($lastOrderId)));

  $this->renderLayout();
}
```

First you need to comment out the code that handles redirecting if the required sessions aren&#39;t set. If this isn&#39;t done then you will get redirected back to the cart page.

```php
/*
$session = $this->getOnepage()->getCheckout();
if (!$session->getLastSuccessQuoteId()) {
  $this->_redirect('checkout/cart');
  return;
}

$lastQuoteId = $session->getLastQuoteId();
$lastOrderId = $session->getLastOrderId();
$lastRecurringProfiles = $session->getLastRecurringProfileIds();

if (!$lastQuoteId || (!$lastOrderId && empty($lastRecurringProfiles))) {
  $this->_redirect('checkout/cart');
  return;
}

$session->clear();
*/
```

Then we need to add some extra code immediately after the closing comment that sets the successful quote ID and Order ID, this will then display the information on the success page. To get this information simply navigate to your database and access the sales_flat_order table you will need to enter the entity_id field into the $orderId variable and the quote_id field into the $quoteId variable.

```php
$session = $this->getOnepage()->getCheckout();

$orderId = 1;
$quoteId = 2;

$session->setLastSuccessQuoteId($quoteId);
$session->setLastQuoteId($quoteId);
$session->setLastOrderId($orderId);
```

Now you have made this update your code should look like the below.

```php
public function successAction()
{
  /*
  $session = $this->getOnepage()->getCheckout();
  if (!$session->getLastSuccessQuoteId()) {
    $this->_redirect('checkout/cart');
    return;
  }

  $lastQuoteId = $session->getLastQuoteId();
  $lastOrderId = $session->getLastOrderId();
  $lastRecurringProfiles = $session->getLastRecurringProfileIds();

  if (!$lastQuoteId || (!$lastOrderId && empty($lastRecurringProfiles))) {
    $this->_redirect('checkout/cart');
    return;
  }

  $session->clear();
  */

  /* TESTING */
  $session = $this->getOnepage()->getCheckout();

  $orderId = 1;
  $quoteId = 2;

  $session->setLastSuccessQuoteId($quoteId);
  $session->setLastQuoteId($quoteId);
  $session->setLastOrderId($orderId);
  /* EO: TESTING */

  $this->loadLayout();
  $this->_initLayoutMessages('checkout/session');

  Mage::dispatchEvent('checkout_onepage_controller_success_action', array('order_ids' => array($lastOrderId)));

  $this->renderLayout();
}
```

Once you upload this page you can simply navigate to your Magento checkout success page, the url should be http://www.yourdomain.co.uk/checkout/onepage/success/. You should see the results of the order you entered. Now you can refresh as much as you want to get your styling perfect.

**Don't forget to remove the changes before your site goes live to avoid any site issues.**
