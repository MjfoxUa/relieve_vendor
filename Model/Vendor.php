<?php
/**
 * Relieve Inc.
 * NOTICE OF LICENSE
 *
 * @package     Relieve_Vendor
 * @copyright   Copyright (c) 2021 Relieve Inc.
 * @license     End-user License Agreement
 */

declare(strict_types=1);

namespace Relieve\Vendor\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Vendor extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'relieve_vendor_vendor';
    protected $cacheTag = 'relieve_vendor_vendor';
    protected $eventPrefix = 'relieve_vendor_vendor';

    protected function _construct()
    {
        $this->_init('Relieve\Vendor\Model\ResourceModel\Vendor');
    }

    /**
     * @return string[]
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array
     */
    public function getDefaultValues(): array
    {
        return [];
    }
}
