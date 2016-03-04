<?php
/**
 * @author: Viskov Sergey
 * @date: 3/4/16
 * @time: 7:25 PM
 */

namespace LTDBeget\sphinxConfigurator\lib\definitions\options\sourceOptions\concreteOptions;


use LTDBeget\sphinxConfigurator\lib\definitions\options\sourceOptions\SourceOption;

/**
 * Class MysqlSslKey
 *
 * MySQL specific SSL certificate settings
 * optional, defaults are empty
 * 
 * mysql_ssl_cert		= /etc/ssl/client-cert.pem
 * mysql_ssl_key		= /etc/ssl/client-key.pem
 * mysql_ssl_ca		= /etc/ssl/cacert.pem
 *
 * @package LTDBeget\sphinxConfigurator\lib\definitions\options\sourceOptions\concreteOptions
 */
class MysqlSslKey extends SourceOption
{
    /**
     * @return bool
     */
    public function validate() : bool
    {
        return true;
    }
}