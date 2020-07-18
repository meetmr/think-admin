<?php

declare(strict_types=1);

/*
 * This file is part of TAnt.
 * @link     https://github.com/edenleung/think-admin
 * @document https://www.kancloud.cn/manual/thinkphp6_0
 * @contact  QQ Group 996887666
 * @author   Eden Leung 758861884@qq.com
 * @copyright 2019 Eden Leung
 * @license  https://github.com/edenleung/think-admin/blob/6.0/LICENSE.txt
 */

namespace TAnt;

use think\Service;
use TAnt\Command\Crud\Crud;
use TAnt\Command\Install\Install;

class AppService extends Service
{
    public function register()
    {
        $this->registerCommand();
    }

    /**
     * 注册命令行.
     *
     * @return void
     */
    protected function registerCommand()
    {
        $this->commands([
            Install::class,
            Crud::class,
        ]);
    }
}
