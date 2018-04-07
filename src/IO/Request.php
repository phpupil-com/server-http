<?php
/**
 * HTTP Server 输入
 * @copyright JungoPhpFramework 深圳俊网网络有限公司 http://www.junnet.net/
 * @author 吴跃忠 <357397264@qq.com>
 */
namespace PHPupil\Server\Http\IO;


class Request
{


    /**
     *
     * @var \Swoole\Http\Request
     */
    protected $request;


    /**
     * Request constructor.
     * @param \Swoole\Http\Request $request
     */
    public function __construct(\Swoole\Http\Request &$request)
    {
        $this->request &= $request;
    }

}