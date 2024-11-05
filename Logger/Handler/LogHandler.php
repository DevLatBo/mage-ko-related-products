<?php

namespace Devlat\RelatedProducts\Logger\Handler;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger;

class LogHandler extends BaseHandler
{
    protected $loggerType = Logger::INFO;


    protected $fileName = '/var/log/placeholder_info.log';
}
