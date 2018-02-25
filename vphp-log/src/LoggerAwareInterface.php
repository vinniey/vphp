<?php

namespace VPHP\Log;

/**
 * logger-aware 定义实例
 */
interface LoggerAwareInterface
{
    /**
     * 设置一个日志记录实例
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(LoggerInterface $logger);
}