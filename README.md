##安装（环境:Unbuntu）
+ 用Composer安装/Downloading an archive file（这里用Composer安装）
+ 安装Composer: `https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx`
```
curl -s http://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```
###安装Yii
```
composer global require "fxp/composer-asset-plugin:1.0.0"
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
```
若想安装最新版本Yii: `composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic`

若想安装Yii advanced版本: ` composer create-project --prefer-dist yiisoft/yii2-app-advanced advanced`

+ 这里选择`advanced`版本
###装备工作
+ 初始化： `init`命令选择`dev`开发环境:
    * 切换到项目根目录运行：`php init`
    * 访问 `http://localhost/Yii2/advanced/frontend/web/index.php` 测试项目运行
    * 前台： `frontend/web`
    * 后台： `backend/web`
### 项目结构
```
根目录包含如下子目录：

backend - 后端Web应用。
common - 供所有应用使用的公共文件。
console - 命令行应用。（通常被用来建立系统定时任务（cron jobs）以及一些低级别的服务器管理，也可以用于在应用部署时处理数据迁移和资源。）
environments - 环境配置。
frontend - 前端Web应用。


根目录下包含如下文件：

.gitignore 包含需要git忽略的目录。如果你不想把一些文件纳入版本库，在这里添加。
composer.json - 合成器Composer 配置。
init - 初始化脚本，在"Composer config described in detail below"中有说明。
init.bat - Windows版本的初始化脚本。
LICENSE.md - 版权信息。你的项目版权信息。尤其是开源项目。
README.md - 安装模板的基本信息。请替换成你自己的项目和安装信息。
requirements.php - Yii 系统需求检查器。
yii - 命令行应用的启动脚本。
yii.bat - Windows下的yii脚本。
```
###配置合成器
更新`composer.json`文件后，你可以运行`php composer.phar update --prefer-dist`命令，等待所有依赖包都下载和安装完成，然后就可以使用它们了，相关类将会被自动加载。

###创建前后台链接
```
return [
    'components' => [
        'urlManager' => [
            // here is your normal backend url manager config
        ],
        'urlManagerFrontend' => [
            // here is your frontend URL manager config
        ],

    ],
];
```
然后，你就可以像下面这样调用前台链接：
```
echo Yii::$app->urlManagerFrontend->createUrl(...);
```

