<?php

namespace Adeelq\CoreConfigDataViewer\Controller\Adminhtml\Config;

use Adeelq\CoreConfigDataViewer\Controller\Adminhtml\Config;
use Adeelq\CoreModule\Controller\Adminhtml\AbstractIndex;

class Index extends AbstractIndex
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = Config::ADMIN_RESOURCE;

    /**
     * @inheritDoc
     */
    protected function getLabelTitle(): string
    {
        return 'Core Config Data';
    }
}
