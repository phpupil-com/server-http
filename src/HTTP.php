<?php
/**
 * PHPupil HTTP Server
 * @copyright PHPupil Framework http://www.phpupil.com/
 * @author 吴跃忠 <357397264@qq.com>
 */
namespace PHPupil\Server\Http;

use PHPupil\Framework\Route;
use PHPupil\Framework\Server\AbServer;
use Swoole\Http\Request;
use Swoole\Http\Response;

class HTTP extends AbServer
{

    public function run()
    {

        // TODO: Implement run() method.
        $server = new \Swoole\Http\Server( '0.0.0.0', 9501);

        $server->on('WorkerStart',function (){
            Route::_init();
        });

        // 启动服务
        $server->on('Request',function (Request $request, Response $response) use( &$server){
            // 创建协程处理
            go(function () use( &$request, &$response ) {
                ob_start();
                try{
                    $_GET = $request->get;
                    $_POST = $request->post;
                    $route = new Route();
                    $route->run($request);
                }catch (\Exception $e){
                    var_dump($e);
                }
                $ret = ob_get_clean();
                $response->end($ret);
            });
            $server->close($request->fd);
        });

        $server->start();
    }

}