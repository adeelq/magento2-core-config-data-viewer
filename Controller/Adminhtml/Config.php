<?php

namespace Adeelq\CoreConfigDataViewer\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class Config extends Action
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = 'Adeelq_CoreConfigDataViewer::CoreConfigDataViewer';
}
