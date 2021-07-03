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

namespace Relieve\Vendor\Model\ResourceModel\Vendor;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Relieve\Vendor\Model\ResourceModel\Vendor as VendorResourceModel;
use Relieve\Vendor\Model\Vendor as VendorModel;

class Collection extends AbstractCollection
{
    protected $idFieldName = 'id';
    protected $eventPrefix = 'relieve_vendor_vendor_collection';
    protected $eventObject = 'relieve_vendor_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(VendorModel::class, VendorResourceModel::class);
    }
}
