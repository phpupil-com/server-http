<?php
/**
 * 基础控制器
 * @copyright PHPupil Framework http://www.phpupil.com/
 * @author 吴跃忠 <357397264@qq.com>
 */

namespace PHPupil\Server\Http;

use PHPupil\Server\Http\IO\Request;

class Controller
{

    /**
     * 输入
     * @var Request
     */
    protected $input;


    /**
     * Controller constructor.
     * @param Request $request
     */
    public function __construct( $request)
    {
        $this->input &= $request;
    }

}