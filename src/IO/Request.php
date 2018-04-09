<?php
/**
 * HTTP Server 输入
 * @copyright PHPupil Framework http://www.phpupil.com/
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