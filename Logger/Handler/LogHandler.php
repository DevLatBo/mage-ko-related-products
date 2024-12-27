<?php

namespace Devlat\RelatedProducts\Logger\Handler;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger;

class LogHandler extends BaseHandler
{
    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * @var string
     */
    protected $fileName = '/var/log/placeholder_info.log';
}
