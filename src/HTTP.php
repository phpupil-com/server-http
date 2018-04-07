<?php
/**
 * PHPupil HTTP Server
 * @copyright JungoPhpFramework 深圳俊网网络有限公司 http://www.junnet.net/
 * @author 吴跃忠 <357397264@qq.com>
 */
namespace PHPupil\Server\Http;

use PHPupil\Framework\Server\AbServer;
use Swoole\Http\Request;
use Swoole\Http\Response;

class HTTP extends AbServer
{

    public function run()
    {
        // TODO: Implement run() method.
        $server = new \Swoole\Http\Server( '0.0.0.0', 9501);

        // 启动服务
        $server->on('Request',function (Request $request, Response $response) {
            ob_start();
            var_dump($request);
            $return = ob_get_clean();
            $response->end($return);
        });

        $server->start();
    }

}