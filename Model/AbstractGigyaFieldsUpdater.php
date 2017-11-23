<?php
/**
 * Copyright © 2016 X2i.
 */

namespace Gigya\GigyaIM\Model;

use Gigya\CmsStarterKit\FieldMapping\GigyaUpdater;
use Magento\Customer\Model\Data\Customer;

/**
 * AbstractGigyaFieldsUpdater
 *
 * @author      vlemaire <info@x2i.fr>
 */
abstract class AbstractGigyaFieldsUpdater extends GigyaUpdater  {

    /**
     * @var Customer
     */
    protected $magentoUser;

    /**
     * @return Customer
     */
    public function getMagentoUser() {

        return $this->magentoUser;
    }

    /**
     * @param Customer $magentoUser
     */
    public function setMagentoUser($magentoUser) {

        $this->magentoUser = $magentoUser;
    }
}