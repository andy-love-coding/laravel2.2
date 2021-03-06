## 目录
- [2 舞台布置](https://github.com/andy-love-coding/laravel2.2#2-%E8%88%9E%E5%8F%B0%E5%B8%83%E7%BD%AE)
  - [2.3 创建应用](https://github.com/andy-love-coding/laravel2.2#23-%E5%88%9B%E5%BB%BA%E5%BA%94%E7%94%A8)
  - [2.4 配置信息](https://github.com/andy-love-coding/laravel2.2#24-%E9%85%8D%E7%BD%AE%E4%BF%A1%E6%81%AF)
  - [2.5 自定义辅助函数](https://github.com/andy-love-coding/laravel2.2#25-%E8%87%AA%E5%AE%9A%E4%B9%89%E8%BE%85%E5%8A%A9%E5%87%BD%E6%95%B0)
  - [2.6 基础布局](https://github.com/andy-love-coding/laravel2.2#26-%E5%9F%BA%E7%A1%80%E5%B8%83%E5%B1%80)
    - 集成 Bootstrap
  - [2.8 安装 fontawesome 字体](https://github.com/andy-love-coding/laravel2.2#28-%E5%AE%89%E8%A3%85-fontawesome-%E5%AD%97%E4%BD%93) 
- [3 注册登录](https://github.com/andy-love-coding/laravel2.2#3-%E6%B3%A8%E5%86%8C%E7%99%BB%E5%BD%95)
  - [3.1 用户认证脚手架](https://github.com/andy-love-coding/laravel2.2#31-%E7%94%A8%E6%88%B7%E8%AE%A4%E8%AF%81%E8%84%9A%E6%89%8B%E6%9E%B6)
    - 本地化(添加语言包)
  - [3.2 用户注册](https://github.com/andy-love-coding/laravel2.2#32-%E7%94%A8%E6%88%B7%E6%B3%A8%E5%86%8C)
  - [3.3 注册验证码](https://github.com/andy-love-coding/laravel2.2#33-%E6%B3%A8%E5%86%8C%E9%AA%8C%E8%AF%81%E7%A0%81)
  - [3.5 邮箱认证(监听器)](https://github.com/andy-love-coding/laravel2.2#35-%E9%82%AE%E7%AE%B1%E8%AE%A4%E8%AF%81%E7%9B%91%E5%90%AC%E5%99%A8)
  - [3.6 认证后的提示](https://github.com/andy-love-coding/laravel2.2#36-%E8%AE%A4%E8%AF%81%E5%90%8E%E7%9A%84%E6%8F%90%E7%A4%BA)
  - [3.7 重置密码](https://github.com/andy-love-coding/laravel2.2#37-%E9%87%8D%E7%BD%AE%E5%AF%86%E7%A0%81)
- [4 用户相关](https://github.com/andy-love-coding/laravel2.2#4-%E7%94%A8%E6%88%B7%E7%9B%B8%E5%85%B3)
  - [4.1 个人页面](https://github.com/andy-love-coding/laravel2.2#41-%E4%B8%AA%E4%BA%BA%E9%A1%B5%E9%9D%A2)
  - [4.2 编辑个人资料](https://github.com/andy-love-coding/laravel2.2#42-%E7%BC%96%E8%BE%91%E4%B8%AA%E4%BA%BA%E8%B5%84%E6%96%99-formrequest)
    - 1.新增字段
    - 4.错误消息
  - [4.3 显示个人资料](https://github.com/andy-love-coding/laravel2.2#43-%E6%98%BE%E7%A4%BA%E4%B8%AA%E4%BA%BA%E8%B5%84%E6%96%99)
  - [4.4 上传图像](https://github.com/andy-love-coding/laravel2.2#44-%E4%B8%8A%E4%BC%A0%E5%9B%BE%E5%83%8F)
    - 4.工具类 ImageUploadHandler
    - 6.git版本控制 (让某个文件夹不纳入git的版本)
  - [4.6 图片验证(用 FormRequest表单验证 来限制图像类型和分辨率)](https://github.com/andy-love-coding/laravel2.2#46-%E5%9B%BE%E7%89%87%E9%AA%8C%E8%AF%81%E7%94%A8-formrequest%E8%A1%A8%E5%8D%95%E9%AA%8C%E8%AF%81-%E6%9D%A5%E9%99%90%E5%88%B6%E5%A4%B4%E5%83%8F%E7%B1%BB%E5%9E%8B%E5%92%8C%E5%88%86%E8%BE%A8%E7%8E%87)
  - [4.7 裁剪图像](https://github.com/andy-love-coding/laravel2.2#47-%E8%A3%81%E5%89%AA%E5%A4%B4%E5%83%8F)
    - 1.图像裁剪扩展包([intervention/image](https://github.com/Intervention/image))
  - [4.8 授权访问](https://github.com/andy-love-coding/laravel2.2#48-%E6%8E%88%E6%9D%83%E8%AE%BF%E9%97%AE)
    - 1.必须登录 (auth中间件)
    - 2.只有自己能编辑自己（授权策略）
- [5 帖子相关](https://github.com/andy-love-coding/laravel2.2#5-%E5%B8%96%E5%AD%90%E5%88%97%E8%A1%A8)
  - [5.1 帖子分类](https://github.com/andy-love-coding/laravel2.2#51-%E5%B8%96%E5%AD%90%E5%88%86%E7%B1%BB)
    - 用迁移文件生成分类
  - [5.2 代码生成器（Laravel 5.x Scaffold Generator）](https://github.com/andy-love-coding/laravel2.2#52-%E4%BB%A3%E7%A0%81%E7%94%9F%E6%88%90%E5%99%A8laravel-5x-scaffold-generator)
  - [5.3 生成话题骨架](https://github.com/andy-love-coding/laravel2.2#53-%E7%94%9F%E6%88%90%E8%AF%9D%E9%A2%98%E9%AA%A8%E6%9E%B6)
  - [5.4 填充假数据](https://github.com/andy-love-coding/laravel2.2#54-%E5%A1%AB%E5%85%85%E5%81%87%E6%95%B0%E6%8D%AEuserstopics)
  - [5.5 话题列表页面](https://github.com/andy-love-coding/laravel2.2#55-%E8%AF%9D%E9%A2%98%E5%88%97%E8%A1%A8%E9%A1%B5%E9%9D%A2)
    - 关联模型（一对多）
  - [5.6 性能优化（预加载 N+1）](https://github.com/andy-love-coding/laravel2.2#56-%E6%80%A7%E8%83%BD%E4%BC%98%E5%8C%96-%E9%A2%84%E5%8A%A0%E8%BD%BD-n1)
    - 安装 Debug，发布配置文件
    - 预加载（解决 N+1 问题）
  - [5.7 分类下的话题列表](https://github.com/andy-love-coding/laravel2.2#57-%E5%88%86%E7%B1%BB%E4%B8%8B%E7%9A%84%E8%AF%9D%E9%A2%98%E5%88%97%E8%A1%A8)
    - 7.增加顶部导航(**laravel-active扩展包**、辅助函数)
  - [5.8 话题列表排序](https://github.com/andy-love-coding/laravel2.2#58-%E8%AF%9D%E9%A2%98%E5%88%97%E8%A1%A8%E6%8E%92%E5%BA%8F)
    - 查询作用域 查询参数
  - [5.9 用户发布话题](https://github.com/andy-love-coding/laravel2.2#59-%E7%94%A8%E6%88%B7%E5%8F%91%E5%B8%83%E7%9A%84%E8%AF%9D%E9%A2%98)
- [6 帖子的CRUD](https://github.com/andy-love-coding/laravel2.2#%E5%B8%96%E5%AD%90%E7%9A%84crud)
  - [6.1 新建话题（观察器）](https://github.com/andy-love-coding/laravel2.2#61-%E6%96%B0%E5%BB%BA%E8%AF%9D%E9%A2%98%E8%A7%82%E5%AF%9F%E5%99%A8)
  - [6.2 使用 Simditor 编辑器](https://github.com/andy-love-coding/laravel2.2#62-%E4%BD%BF%E7%94%A8-simditor-%E7%BC%96%E8%BE%91%E5%99%A8)
  - [6.3 Simditor 上传图片](https://github.com/andy-love-coding/laravel2.2#63-simditor-%E4%B8%8A%E4%BC%A0%E5%9B%BE%E7%89%87)
  - [6.4 显示帖子](https://github.com/andy-love-coding/laravel2.2#64-%E6%98%BE%E7%A4%BA%E5%B8%96%E5%AD%90)
  - [6.5 XSS 安全漏洞（HTMLPurifier）](https://github.com/andy-love-coding/laravel2.2#65-xss-%E5%AE%89%E5%85%A8%E6%BC%8F%E6%B4%9Ehtmlpurifier)
  - [6.6 编辑帖子](https://github.com/andy-love-coding/laravel2.2#66-%E7%BC%96%E8%BE%91%E5%B8%96%E5%AD%90)
  - [6.7 删除帖子](https://github.com/andy-love-coding/laravel2.2#67-%E5%88%A0%E9%99%A4%E5%B8%96%E5%AD%90)
  - [6.8 SEO 友好的 URL](https://github.com/andy-love-coding/laravel2.2#68-seo-%E5%8F%8B%E5%A5%BD%E7%9A%84-url)
  - [6.9 翻译使用队列（job）](https://github.com/andy-love-coding/laravel2.2#69-%E7%BF%BB%E8%AF%91%E4%BD%BF%E7%94%A8%E9%98%9F%E5%88%97job)
- [7 帖子回复](https://github.com/andy-love-coding/laravel2.2#7-%E5%B8%96%E5%AD%90%E5%9B%9E%E5%A4%8D)
  - [7.1 生成回复假数据](https://github.com/andy-love-coding/laravel2.2#71-%E7%94%9F%E6%88%90%E5%9B%9E%E5%A4%8D%E5%81%87%E6%95%B0%E6%8D%AE)
    - 1.生成代码（用户代码生成器）
  - [7.2 回复列表](https://github.com/andy-love-coding/laravel2.2#72-%E5%9B%9E%E5%A4%8D%E5%88%97%E8%A1%A8)
    - 清理「生成代码」用不到的部分
    - 子视图
  - [7.3 发表回复](https://github.com/andy-love-coding/laravel2.2#73-%E5%8F%91%E8%A1%A8%E5%9B%9E%E5%A4%8D)
    - 0.根据条件加载子模板
    - 4.表单验证
    - 6.处理 XSS 问题（HTMLPurifier）
  - [7.4 消息通知（database通知）](https://github.com/andy-love-coding/laravel2.2#74-%E6%B6%88%E6%81%AF%E9%80%9A%E7%9F%A5database%E9%80%9A%E7%9F%A5)
    - 4.编写通知类
    - 6.重写 notify() 方法
  - [7.5 消息列表](https://github.com/andy-love-coding/laravel2.2#75-%E6%B6%88%E6%81%AF%E5%88%97%E8%A1%A8)
    - 模型方法 markAsRead()
  - [7.6 邮件通知](https://github.com/andy-love-coding/laravel2.2#76-%E9%82%AE%E4%BB%B6%E9%80%9A%E7%9F%A5)
    - 1.邮件配置
    - 3.用队列发送邮件
  - [7.7 删除回复](https://github.com/andy-love-coding/laravel2.2#77-%E5%88%A0%E9%99%A4%E5%9B%9E%E5%A4%8D)
    - 3.授权策略
    - 4.删除回复时更新回复数
    - 5.删除话题连带删除回复（模型观察器中慎用模型，避免死循环，应该用DB）
- [8 角色权限和后台管理](https://github.com/andy-love-coding/laravel2.2#8-%E8%A7%92%E8%89%B2%E6%9D%83%E9%99%90%E5%92%8C%E5%90%8E%E5%8F%B0%E7%AE%A1%E7%90%86)
  - [8.1 多角色用户权限（Laravel-permission）](https://github.com/andy-love-coding/laravel2.2#81-%E5%A4%9A%E8%A7%92%E8%89%B2%E7%94%A8%E6%88%B7%E6%9D%83%E9%99%90)
    - 1.安装 Laravel-permission
    - 2.Laravel-permission 的一些简单方法
  - [8.2 站点权限部署](https://github.com/andy-love-coding/laravel2.2#82-%E7%AB%99%E7%82%B9%E6%9D%83%E9%99%90%E9%83%A8%E7%BD%B2sudo-su%E7%94%A8%E6%88%B7%E5%88%87%E6%8D%A2)
    - 1.内容管理权限统一设置 before()
    - 2.安装用户切换工具 sudo-su
    - 3.Horizon 访问权限
  - [8.3 管理后台-初始化](https://github.com/andy-love-coding/laravel2.2#83-%E7%94%A8%E6%88%B7%E5%90%8E%E5%8F%B0-%E5%88%9D%E5%A7%8B%E5%8C%96laravel-administrator)
    - 1.安装 Laravel Administrator
    - 3.配置简介 config/administrator.php
  - [8.4 管理后台-用户](https://github.com/andy-love-coding/laravel2.2#84-%E7%94%A8%E6%88%B7%E5%90%8E%E5%8F%B0-%E7%94%A8%E6%88%B7)
    - 后台修改密码 (Eloquent 模型修改器)
  - [8.5 管理后台-角色权限](https://github.com/andy-love-coding/laravel2.2#85-%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0-%E8%A7%92%E8%89%B2%E6%9D%83%E9%99%90)
  - [8.6 管理后台-内容](https://github.com/andy-love-coding/laravel2.2#86-%E7%AE%A1%E7%90%86%E5%90%8E%E5%8F%B0-%E5%86%85%E5%AE%B9)
  - [8.7 后台管理-站点配置](https://github.com/andy-love-coding/laravel2.2#87-%E5%90%8E%E5%8F%B0%E7%AE%A1%E7%90%86-%E7%AB%99%E7%82%B9%E9%85%8D%E7%BD%AE)
    - 2.新增配置信息（清除缓存 \Artisan::call('cache:clear');）
    - 3.使用配置信息 setting()
  - [8.8 后台权限范围](https://github.com/andy-love-coding/laravel2.2#88-%E5%90%8E%E5%8F%B0%E8%8C%83%E5%9B%B4%E6%9D%83%E9%99%90)
    - 1.Denied 页面
    - 2.后台部分可见（解决无限302跳转死循环问题）
- [9 杂项](https://github.com/andy-love-coding/laravel2.2#9-%E6%9D%82%E9%A1%B9)
  - [9.1 边栏活跃用户](https://github.com/andy-love-coding/laravel2.2#91-%E8%BE%B9%E6%A0%8F%E6%B4%BB%E8%B7%83%E7%94%A8%E6%88%B7)
    - 1.活跃用户算法 Triat (**使用缓存**)
    - 2.新建 Artisan 命令（make:command）
  - [9.2 边栏资源推荐](https://github.com/andy-love-coding/laravel2.2#92-%E8%BE%B9%E6%A0%8F%E8%B5%84%E6%BA%90%E6%8E%A8%E8%8D%90observer)
    - 4.2 增加模型(Link)方法 getAllCached() ，方法中使用了缓存 Cache::remmenber();
    - 5.用模型观察器（Observer）自动更新缓存 Cache::forget($link->cache_key);
  - [9.3 级联删除（外键约束）](https://github.com/andy-love-coding/laravel2.2#93-%E7%BA%A7%E8%81%94%E5%88%A0%E9%99%A4-%E5%A4%96%E9%94%AE%E7%BA%A6%E6%9D%9F)
    - 外键约束，级联删除（连带删除）
  - [9.4 用户最后活跃时间（中间件）](https://github.com/andy-love-coding/laravel2.2#94-%E7%94%A8%E6%88%B7%E6%9C%80%E5%90%8E%E6%B4%BB%E8%B7%83%E6%97%B6%E9%97%B4-%E4%B8%AD%E9%97%B4%E4%BB%B6)
  - [9.5 首页](https://github.com/andy-love-coding/laravel2.2#95-%E9%A6%96%E9%A1%B5)
  - [9.6 用户默认头像（模型监控器）](https://github.com/andy-love-coding/laravel2.2#96-%E7%94%A8%E6%88%B7%E9%BB%98%E8%AE%A4%E5%A4%B4%E5%83%8F-%E6%A8%A1%E5%9E%8B%E7%9B%91%E6%8E%A7%E5%99%A8)
## 2 [舞台布置](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 2.3 创建应用
  - 1.composer 加速
    ```
    composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
    ```
  - 2.创建应用
    ```
    composer create-project laravel/laravel laravel2.2 --prefer-dist "6.*"
    ```
  - 3.修改 hosts（subl /etc/hosts）
    ```
    192.168.10.10   larabbs.test
    ```
  - 4.新增站点（subl ~/Homestead/Homestead.yaml）
    ```
    sites:
    - map: laravel2.2.test
      to: /home/vagrant/CodeTest/laravel2.2/public

    databases:
    - laravel1.5
    - laravel2.2
    ```
  - 5.重启虚拟机，生成站点和数据库
    ```
    cd ~/Homestead && vagrant provision && vagrant reload
    ```
  - 6.统一代码风格 `.editorconfig`
    ```
    root = true

    [*]
    charset = utf-8
    end_of_line = lf
    insert_final_newline = true
    indent_style = space
    indent_size = 4
    trim_trailing_whitespace = true

    [*.md]
    trim_trailing_whitespace = false

    [*.{yml,yaml}]
    indent_size = 2

    [*.{js,html,blade.php,css,scss}]
    indent_style = space
    indent_size = 2
    ```
### 2.4 配置信息
  - 配置文件，在config文件夹下
    | 文件名称         | 配置类型                             |
    | ---------------- | ------------------------------------ |
    | app.php          | 应用相关，如项目名称、时区、语言等   |
    | auth.php         | 用户授权，如用户登录、密码重置等     |
    | broadcasting.php | 事件广播系统相关配置                 |
    | cache.php        | 缓存相关配置                         |
    | database.php     | 数据库相关配置，包括 MySQL、Redis 等 |
    | filesystems.php  | 文件存储相关配置                     |
    | hashing.php      | 加密算法相关设置                     |
    | logging.php      | 日志记录相关的配置                   |
    | mail.php         | 邮箱发送相关的配置                   |
    | queue.php        | 队列系统相关配置                     |
    | services.php     | 放置第三方服务配置                   |
    | session.php      | 用户会话相关配置                     |
    | view.php         | 视图存储路径相关配置                 |
  - 访问配置文件
    ```
    $value = config('app.timezone');
    ```
  - 要在运行时设置配置值，传递一个数组给 config 函数
    ```
    config(['app.timezone' => 'America/Chicago']);
    ```
  - 调整几个应用配置信息
    - 应用名称 和 应用链接 `.env`
      ```
      APP_NAME=LaraBBS // 应用名称，通过 'name' => env('APP_NAME', 'Laravel'), 获取
      APP_URL=http://laravel2.2.test // 应用链接，'url' => env('APP_URL', 'http://localhost'),
      ```
    - 时区 和 默认语言 `config/app.php`
      ```
      timezone' => 'Asia/Shanghai',
      'locale' => 'zh-CN',
      ```
### 2.5 自定义辅助函数
  - 1.新建帮助文件（我们把所有的『自定义辅助函数』都存放于 app/helpers.php 文件中）
    ```
    touch app/helpers.php
    ```
  - 2.自动加载帮助文件：在 composer.json 中的 autoload 中加入："files": ["app/helper.php"]
    ```
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "files": [
            "app/helpers.php"
        ]
    }
    ```
  - 3.运行以下命令进行重新加载文件即可
    ```
    composer dump-autoload
    ```
### 2.6 基础布局
  - 1.主布局文件 resources/views/layouts/app.blade.php
    ```
    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

      <!-- Styles -->
      <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
      <div id="app" class="{{ route_class() }}-page">

        @include('layouts._header')

        <div class="container">

          @include('shared._messages')

          @yield('content')

        </div>

        @include('layouts._footer')
      </div>

      <!-- Scripts -->
      <script src="{{ mix('js/app.js') }}"></script>
    </body>

    </html>
    ```
    - **在视图页获取配置信息：** `app()->getLocale()`  获取的是 config/app.php 中的 locale 选项
    - `<meta name="csrf-token" content="{{ csrf_token() }}">` 标签是为了方便前端的 JavaScript 脚本获取 CSRF 令牌。
    - `<div id="app" class="{{ route_class() }}-page">` route_class() 是我们**自定义的辅助函数** 
      - app/helpers.php
        ```
        <?php

        // 获取当前路由名称，用来作为页面的 CSS 类名称，方便真的某个页面做样式定制
        function route_class()
        {
          // 获取路由名 users.create 返回 users-create
          return str_replace('.', '-', Route::currentRouteName());
        }
        ```
  - 2.顶部导航 resources/views/layouts/_header.blade.php
    ```
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
      <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}">
          LaraBBS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav navbar-right">
            <!-- Authentication Links -->
            <li class="nav-item"><a class="nav-link" href="#">登录</a></li>
            <li class="nav-item"><a class="nav-link" href="#">注册</a></li>
          </ul>
        </div>
      </div>
    </nav>
    ```
  - 3.底部导航 resources/views/layouts/_footer.blade.php
    ```
    <footer class="footer">
      <div class="container">
        <p class="float-left">
          由 <a href="http://weibo.com/u/1837553744?is_hot=1" target="_blank">Summer</a> 设计和编码 <span style="color: #e27575;font-size: 14px;">❤</span>
        </p>

        <p class="float-right"><a href="mailto:name@email.com">联系我们</a></p>
      </div>
    </footer>
    ```
  - 4.消息提醒
    ```
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(session()->has($msg))
        <div class="flash-message">
          <p class="alert alert-{{ $msg }}">
            {{ session()->get($msg) }}
          </p>
        </div>
      @endif
    @endforeach
    ```
  - 5.控制器
    ```
    php artisan make:controller PagesController
    ```
    ```
    // 展示首页
    public function root()
    {
        return view('pages.root');
    }
    ```
  - 6.首页视图 resources/views/pages/root.blade.php
    ```
    @extends('layouts.app')
    @section('title', '首页')

    @section('content')
      <h1>这里是首页</h1>
    @stop
    ```
    ```
    rm resources/views/welcome.blade.php
    ```
  - 7.路由 routes/web.php
    ```
    Route::get('/', 'PagesController@root')->name('root');
    ```
  - 8.集成 Bootstrap
    - composer require laravel/ui:^1.0 --dev
    - php artisan ui bootstrap
    - npm config set registry=https://registry.npm.taobao.org
    - yarn config set registry 'https://registry.npm.taobao.org'
    - 修复漏洞：Bump lodash from 4.17.15 to 4.17.19  
      package.json
      ```
      "devDependencies": {
          "axios": "^0.19",
          "bootstrap": "^4.0.0",
          "cross-env": "^7.0",
          "jquery": "^3.2",
          "laravel-mix": "^5.0.1",
          "lodash": "^4.17.19",
          "popper.js": "^1.12",
          "resolve-url-loader": "^3.1.0",
          "sass": "^1.15.2",
          "sass-loader": "^8.0.0"
      }
      ```
    - yarn install --no-bin-links
    - yarn add vue-template-compiler --dev --production=false --no-bin-links
      - 如果没有先安装 vue-template-compiler 而直是直接执行 npm run dev 编译命令，那么会出现如下情况
        ```
        Additional dependencies must be installed. This will only take a moment. // 依然会要求安装 vue-template-compiler
        ERROR  Failed to compile with 1 errors  // 并且会一个错误，所以为了避免这个报错，还是先安装一下 vue-template-compiler 吧
        error  in ./resources/js/app.js
        Module build failed (from ./node_modules/babel-loader/lib/index.js):
        Error: Cannot find module '/home/vagrant/Code/laravel1.7/node_modules/schema-utils/src/index.js'. Please verify that the package.json has a valid "main" entry
        ```
    - yarn add cross-env // 先安装一下 cross-env 否则编译时报错提示：not found
    - npm run dev // 最后执行编译命令
  - 9.优化首页样式
    ```
    // Variables
    @import 'variables';

    // Bootstrap
    @import '~bootstrap/scss/bootstrap';

    /* universal */

    body {
      font-family: Helvetica, "Microsoft YaHei", Arial, sans-serif;
      font-size: 14px;
    }

    /* header */

    .navbar-static-top {
      border-color: #e7e7e7;
      background-color: #fff;
      box-shadow: 0px 1px 11px 2px rgba(42, 42, 42, 0.1);
      border-top: 4px solid #00b5ad;
      border-bottom: 1px solid #e8e8e8;
      margin-bottom: 40px;
      margin-top: 0px;
    }

    /* Sticky footer styles */
    html {
      position: relative;
      min-height: 100%;
    }

    body {
      /* Margin bottom by footer height */
      margin-bottom: 60px;
    }

    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      /* Set the fixed height of the footer here */
      height: 60px;
      background-color: #000;

      .container {
        padding-right: 15px;
        padding-left: 15px;

        p {
          margin: 19px 0;
          color: #c1c1c1;

          a {
            color: inherit;
          }
        }
      }
    }
    ```
  - 10.静态文件浏览器缓存问题
    - webpack.mis.js 中加入.version()，然后 layouts/app.blade.php 中引用css和js时用mix()函数
    - 然后执行编译 npm run dev
### 2.8 安装 fontawesome 字体
  - 1.安装
    ```
    yarn add @fortawesome/fontawesome-free
    ```
  - 2.载入 resources/sass/app.scss
    ```
    // Variables
    @import 'variables';

    // Bootstrap
    @import '~bootstrap/scss/bootstrap';

    // Fontawesome
    @import '~@fortawesome/fontawesome-free/scss/fontawesome';
    @import '~@fortawesome/fontawesome-free/scss/regular';
    @import '~@fortawesome/fontawesome-free/scss/solid';
    @import '~@fortawesome/fontawesome-free/scss/brands';
    ```
## 3 [注册登录](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 3.1 [用户认证脚手架](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.用户认证脚手架
    ```
    php artisan ui:auth
    ```
    - 命令 ui:auth 会询问我们是否要覆盖 app.blade.php，因为我们在前面章节中已经自定义了『主要布局文件』—— app.blade.php，所以此处输入 no
    - 该命令修改了路由 routes/web.php 
      ```
      // 通过用户认证脚手架(php artisan ui:auth) 会生成 Auth::routes();
      Auth::routes();

      // Auth::routes();是Laravel的认证路由，可以在 vendor/laravel/framework/src/Illuminate/Routing/Router.php 中搜 LoginController 即可找到定义的地方，以上等同于：
      // 用户身份验证相关的路由
      // Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
      // Route::post('login', 'Auth\LoginController@login');
      // Route::post('logout', 'Auth\LoginController@logout')->name('logout');

      // 用户注册相关路由
      // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
      // Route::post('register', 'Auth\RegisterController@register');

      // 密码重置相关路由
      // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
      // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
      // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
      // Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

      // Email 认证相关路由
      // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
      // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
      // Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
      ```
    - 生成的视图
      | 视图名称                  | 说明                   |
      | ------------------------- | ---------------------- |
      | register.blade.php        | 注册页面视图           |
      | login.blade.php           | 登录页面视图           |
      | verify.blade.php          | 邮箱认证视图           |
      | passwords/email.blade.php | 提交邮箱发送邮件的视图 |
      | passwords/reset.blade.php | 重置密码的页面视图     |
    - 移除无用页面
      ```
      rm app/Http/Controllers/HomeController.php
      rm resources/views/home.blade.php
      ```
  - 2.顶部导航加上链接 resources/views/layouts/_header.blade.php
    ```
    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
    ```
  - 3.本地化（添加语言包）
    - 安装语言包
      ```
      composer require "overtrue/laravel-lang:~3.0"
      ```
    - 在 config/app.php 中将：
      ```
      Overtrue\LaravelLang\TranslationServiceProvider::class,
      ```
      替换为：
      ```
      Overtrue\LaravelLang\TranslationServiceProvider::class,
      ```
    - 在 config/app.php 中，将项目语言设置为中文
      ```
      'locale' => 'zh-CN',
      ```
    - 如果你想修改扩展包提供的语言文件，可以使用以下命令发布语言文件到项目里：
      ```
      php artisan lang:publish zh-CN
      ```
      发布后的语言文件存放于 resources/lang/zh-CN 文件夹。
### 3.2 [用户注册]((https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95))
  - 执行迁移
    ```
    php artisan migrate
    ```
  - 默认跳转路由修改 app/Providers/RouteServiceProvider.php
    ```
    // public const HOME = '/home';
    public const HOME = '/'; // 改成这样的
    ```
  - 导航栏加上登录状态
    ```
    <ul class="navbar-nav navbar-right">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="#" class="dropdown-item">个人中心</a>
          <a href="#" class="dropdown-item">编辑资料</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" id="logout">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
            </form>
          </a>
        </div>
        
      </li>
      @endguest
    </ul>
    ```
### 3.3 [注册验证码](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.安装验证码 [captcha](https://github.com/mewebstudio/captcha)
    ```
    composer require "mews/captcha:~3.0"
    ```
  - 2.发布「验证码」配置文件，以便自定义设置「验证码」配置
    ```
    php artisan vendor:publish --provider='Mews\Captcha\CaptchaServiceProvider'
    ```
  - 3.前端展示「验证码」 resources/views/auth/register.blade.php
    ```
    <div class="form-group row">
        <label for="captcha" class="col-md-4 col-form-label text-md-right">验证码</label>

        <div class="col-md-6">
            <input type="text" id="captcha" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required>
            <img src="{{ captcha_src('flat') }}"  class="thumbnail captcha mt-3 mb-2" onclick="this.src='/captcha/flat?' + Math.random()" title="点击重新获取验证码">

            @error('captcha')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
    ```
    验证码样式
    ```
    /* User register page */
    .register-page {
      img.captcha {
        cursor: pointer;
        border: 1px solid #ced4da;
        border-radius: 4px;
        padding: 3px;
      }
    }
    ```
  - 4.后端验证 app/Http/Controllers/Auth/RegisterController.php
      ```
      protected function validator(array $data)
      {
          return Validator::make($data, [
              'name' => ['required', 'string', 'max:255'],
              'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
              'password' => ['required', 'string', 'min:6', 'confirmed'],
              'captcha' => ['required', 'captcha'],
          ], [
              'captcha.required' => '验证码不能为空',
              'captcha.captcha' => '请输入正确的验证码',
          ]);
      }
      ```
### 3.5 [邮箱认证（监听器）](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改模型位置 app/Models
    ```
    mkdir app/Models
    mv app/User.php app/Models/User.php
    ```
    修改 app/Models/User.php 的命名空间
    ```
    namespace App\Models;
    ```
    - 编辑器全局搜索 App\User 替换为 App\Models\User (共有3个文件4处替换)
    - 提交 `git add .` `git commit -m '移动 User 模型到 app/models 目录'`  `git push`
  - 2.修改模型 (实现契约 使用Trait) app/Models/User.php
    ```
    <?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;

    class User extends Authenticatable implements MustVerifyEmailContract
    {
        use Notifiable, MustVerifyEmailTrait;

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
    }
    ```
    - 使用Trait `use Notifiable, MustVerifyEmailTrait;`
      - 加载使用 MustVerifyEmail trait，打开 vendor/laravel/framework/src/Illuminate/Auth/MustVerifyEmail.php 文件，可以看到以下四个方法：
        - hasVerifiedEmail() 检测用户 Email 是否已认证；
        - markEmailAsVerified() 将用户标示为已认证；
        - sendEmailVerificationNotification() 发送 Email 认证的消息通知，触发邮件的发送；
        - getEmailForVerification() 获取发送邮件地址，提供这个接口允许你自定义邮箱字段。
    - 实现契约 `class User extends Authenticatable implements MustVerifyEmailContract`
      - 可以打开 vendor/laravel/framework/src/Illuminate/Contracts/Auth/MustVerifyEmail.php ，可以看到此文件为 PHP 的接口类，继承此类将确保 User 遵守契约，拥有上面提到的四个方法。
  - 3.发送认证邮件(源码 监听器$listener)
      - 认证是通过 `app/Http/Controllers/Auth/RegisterController` 实现的，其使用了 `Illuminate\Foundation\Auth\RegistersUsers` trait，查看此 trait 中的 `register()` 方法
        ```
        public function register(Request $request)
        {
            // 检验用户提交的数据是否有误
            $this->validator($request->all())->validate();

            // 创建用户同时触发用户注册成功的事件，并将用户传参
            event(new Registered($user = $this->create($request->all())));

            // 登录用户
            $this->guard()->login($user);

            // 调用钩子方法 `registered()` 
            return $this->registered($request, $user)
                            ?: redirect($this->redirectPath());
        }
        ```
        - 此方法处理了用户提交表单后的逻辑，我们把重点放在 event(new Registered($user = $this->create($request->all())));，这里使用了 Laravel 的事件系统，触发了 Registered 事件。
        - **监听器注册**：打开 `app/Providers/EventServiceProvider.php`文件，此文件的 $listen 属性里我们可以看到注册了 Registered 事件的监听器：
          ```
          protected $listen = [
              Registered::class => [
                  SendEmailVerificationNotification::class,
              ],
          ];
          ```
          - Registered::class 是事件
          - SendEmailVerificationNotification::class 是监听器。单个事件，可以对应多个监听器。
          - 打开 `SendEmailVerificationNotification` 类，阅读其源码：vendor/laravel/framework/src/Illuminate/Auth/Listeners/SendEmailVerificationNotification.php
            ```
            <?php

            namespace Illuminate\Auth\Listeners;

            use Illuminate\Auth\Events\Registered;
            use Illuminate\Contracts\Auth\MustVerifyEmail;

            class SendEmailVerificationNotification
            {
                public function handle(Registered $event)
                {
                    // 如果 user 是继承于 MustVerifyEmail 并且还未激活的话
                    if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {
                        // 发送邮件认证消息通知（认证邮件）
                        $event->user->sendEmailVerificationNotification();
                    }
                }
            }
            ```
  - 4.设置邮箱驱动 开始测试 .env
    ```
    MAIL_DRIVER=log
    ```
  - 5.强制邮箱认证（中间件）
    - 1.新建一个中间件
      ```
      php artisan make:middleware EnsureEmailIsVerified
      ``` 
      ```
      <?php

      namespace App\Http\Middleware;

      use Closure;

      class EnsureEmailIsVerified
      {
          public function handle($request, Closure $next)
          {
              // 三个判断：
              // 1. 如果用户已经登录
              // 2. 并且还未认证 Email
              // 3. 并且访问的不是 email 验证相关 URL 或者退出的 URL。
              if ($request->user() &&
                  ! $request->user()->hasVerifiedEmail() &&
                  ! $request->is('email/*', 'logout')) {

                  // 根据客户端要求返回对应的内容，如果客户端是ajax要求返回json，则abort()返回json数据，否则跳转「邮件认证提醒页面」
                  return $request->expectsJson()
                              ? abort(403, 'Your email address is not verified.')
                              : redirect()->route('verification.notice');
              }

              return $next($request);
          }
      }
      ```
      - 中间件作用：所有web请求，如果用户未认证（3个判断），则提示用户认证，或者跳转「邮件认证提醒页面」；否则放行
    - 2.注册中间，注册的时机确保在 StartSession 后面即可。app/Http/Kernel.php
      ```
      protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\EnsureEmailIsVerified::class,      // <<--- 只需添加这一行
        ],
        ...
      ]
      ```
### 3.6 [认证后的提示](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.认证路由入口
    ```
    Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify')
    ```
  - 2.认证控制器**触发「Verified事件」** app/Http/Controllers/Auth/VerificationController.php
    ```
    use Illuminate\Foundation\Auth\VerifiesEmails;

    use VerifiesEmails;
    public function __construct()
    {
        $this->middleware('auth'); // 所有认证动作必须登录
        $this->middleware('signed')->only('verify'); // 对认证动作的URL进行「URL签名」
        $this->middleware('throttle:6,1')->only('verify', 'resend'); // 每分钟限制6次请求
    }
    ```
    - VerifiesEmails Trait `vendor/laravel/framework/src/Illuminate/Foundation/Auth/VerifiesEmails.php`
      ```
      /**
      * 显示认证邮件提醒页面
      */
      public function show(Request $request)
      {
          return $request->user()->hasVerifiedEmail()
                          ? redirect($this->redirectPath())
                          : view('auth.verify');
      }

      /**
      * 处理认证成功后的业务逻辑，请注意签名认证发生在 `signed` 中间件里，
      * 在 VerificationController 的 __construct 方法里做了设定
      */
      public function verify(Request $request)
      {
          if (! hash_equals((string) $request->route('id'), (string) $request->user()->getKey())) {
              throw new AuthorizationException;
          }

          if (! hash_equals((string) $request->route('hash'), sha1($request->user()->getEmailForVerification()))) {
              throw new AuthorizationException;
          }

          if ($request->user()->hasVerifiedEmail()) {
              return redirect($this->redirectPath());
          }

          if ($request->user()->markEmailAsVerified()) {
              event(new Verified($request->user())); // 如果成功设置为已认证的话，触发「Verified事件」并将用户传参
          }

          return redirect($this->redirectPath())->with('verified', true);
      }

      /**
      * 重新发送用户认证邮件
      */
      public function resend(Request $request)
      {
          if ($request->user()->hasVerifiedEmail()) {
              return redirect($this->redirectPath());
          }

          $request->user()->sendEmailVerificationNotification();

          return back()->with('resent', true);
      }
      ```
  - 3.用`监听器` **监听「Verified事件」**
    - 注册`Verified事件`的`监听器` app/Providers/EventServiceProvider.php
      ```
      protected $listen = [
        ...
          \Illuminate\Auth\Events\Verified::class => [
              \App\Listeners\EmailVerified::class,
          ],
      ];
      ```
    - 生成`EmailVerified监听器`
      ```
      php artisan event:generate
      ```
    - 编写`EmailVerified监听器` app/Listeners/EmailVerified.php
      ```
      public function handle(Verified $event)
      {
          // 会话里闪存认证成功后的消息提醒
          session()->flash('success', '邮箱验证成功 ^_^');
      }
      ```    
### 3.7 [重置密码](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.重置密码路由(已有)
    ```
    Auth::routes(['verify' => true]);
    // 密码重置相关路由
    // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    ```
  - 2.查看 `ResetsPasswords` Trait 源码 vendor/laravel/framework/src/Illuminate/Foundation/Auth/ResetsPasswords.php
    ```
    trait ResetsPasswords
    {
        .
        .
        .
        // 处理 重设密码的逻辑
        public function reset(Request $request)
        {
            // 验证用户提交的表单内容
            $request->validate($this->rules(), $this->validationErrorMessages());

            // 尝试重置用户的密码，成功的话会更新数据库里的密码，否则会
            // 解析并将错误返回。
            $response = $this->broker()->reset(
                $this->credentials($request), function ($user, $password) {
                    $this->resetPassword($user, $password);
                }
            );

            // 如果重置成功，我们会调用 sendResetResponse 方法重定向到程序主页上，
            // 失败的话调用 sendResetFailedResponse 返回并附带错误信息
            return $response == Password::PASSWORD_RESET
                        ? $this->sendResetResponse($request, $response)
                        : $this->sendResetFailedResponse($request, $response);
        }
        .
        .
        .
        protected function sendResetResponse(Request $request, $response)
        {
            return redirect($this->redirectPath())
                                ->with('status', trans($response));
        }
        .
        .
        .
    }
    ```
  - 3.控制器中重写 `sendResetResponse()` 方法 app/Http/Controllers/Auth/ResetPasswordController.php
    ```
    protected function sendResetResponse(Request $request, $response)
    {
        session()->flash('success', '密码更新成功，您已成功登录！');
        return redirect($this->redirectPath());
    }
    ```
## 4 [用户相关](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 4.1 [个人页面](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 路由 routes/web.php
    ```
    Route::resource('users', 'UsersController', ['only' => ['show', 'edit', 'update']]);
    ```
  - 控制器
    ```
    php artisan make:controller UsersController
    ```
    ```
    Use App\Models\User;
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    ```
  - 视图 resources/views/users/show.blade.php
    ```
    @extends('layouts.app')

    @section('title', $user->name . ' 的个人中心')

    @section('content')

    <div class="row">

      <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="card ">
          <img class="card-img-top" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{ $user->name }}">
          <div class="card-body">
                <h5><strong>个人简介</strong></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <hr>
                <h5><strong>注册于</strong></h5>
                <p>January 01 1901</p>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="card ">
          <div class="card-body">
              <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
          </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="card ">
          <div class="card-body">
            暂无数据 ~_~
          </div>
        </div>

      </div>
    </div>
    @stop
    ```
### 4.2 [编辑个人资料 (FormRequest)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.新增字段 `avatar` `introduction`
    ```
    php artisan make:migration add_avatar_and_introduction_to_users_table --table=users
    ```
    ```
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->string('introduction')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('introduction');
        });
    }
    ```
    ```
    php artisan migrate
    ```
  - 2.新增入口 resources/views/layouts/_header.blade.php
    ```
    <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">个人中心</a>
    <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">编辑资料</a>
    ```
  - 3.控制器方法(表单验证FormRequest) app/Http/Controllers/UsersController.php
    ```
    use App\Http\Requests\UserRequest;
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
    ```
    - [表单验证(FormRequest)](https://learnku.com/docs/laravel/6.x/validation/5144#16877a)
      - 顶部引入了 `use App\Http\Requests\UserRequest;`, UserRequest 就是User模型的表单验证
      - 表单请求验证（FormRequest） 是 Laravel 框架提供的用户表单数据验证方案，此方案相比手工调用 validator 来说，能处理更为复杂的验证逻辑，更加适用于大型程序。
    - 创建 `UserRequest` 表单验证
      ```
      php artisan make:request UserRequest
      ```
    - 编写 `UserRequest` 表单验证 app/Http/Requests/UserRequest.php
      ```
      class UserRequest extends FormRequest
      {
          // authorize() 方法是表单验证自带的另一个功能 —— 权限验证
          public function authorize()
          {
              return true; // 此处我们 return true; ，意味所有权限都通过即可
          }

          /**
          * Get the validation rules that apply to the request.
          *
          * @return array
          */
          public function rules()
          {
              return [
                  'name' => 'required|between:3,25|regex:/^[A-Za-z0-9]+$/|unique:users,name,' . Auth::id() . 'id',
                  'email' => 'required|email',
                  'introducton' => 'max:80',
              ];
          }

          // 自定义错误消息
          public function messages()
          {
              return [
                  'name.unique' => '用户名已被占用，请重新填写',
                  'name.regex' => '用户名只支持英文、数字、横杠和下划线。',
                  'name.between' => '用户名必须介于 3 - 25 个字符之间。',
                  'name.required' => '用户名不能为空。',
              ];
          }

          // 自定义验证属性
          // public function attributes()
          // {
          //     return [
          //         'name' => '用户名',
          //     ];
          // }
      }
      ```
  - 4.编辑视图(错误消息) resources/views/users/edit.blade.php
    ```
    @extends('layouts.app')

    @section('content')
    <div class="container">
      <div class="col-md-8 offset-md-2">

        <div class="card">
          <div class="card-header">
            <h4>
              <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
            </h4>
          </div>

          <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="post" accept-charset="UTF-8">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              @include('shared._errors')

              <div class="form-group">
                <label for="name-field">用户名</label>
                <input type="text" id="name-field" name="name" class="form-control" value="{{ old('name', $user->name) }}">
              </div>

              <div class="form-group">
                <label for="email-field">邮 箱</label>
                <input type="text" id="email-field" name="email" class="form-control" value="{{ old('email', $user->email) }}">
              </div>

              <div class="form-group">
                <label for="introduction-field">个人简介</label>
                <textarea name="introduction" id="introduction-field" rows="3" class="form-control">{{ old('introduction', $user->introduction) }}</textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-primary">保存</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    @stop
    ```
    - **错误消息** 的局部视图 resources/views/shared/_errors.blade.php
      ```
      @if ($errors->count() > 0)
      <div class="alert alert-danger">
        <div class="mt-2"><b>有错误发生：</b></div>
        <ul class="mt-2 mb-2">
          @foreach ($errors->all() as $error)
            <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      ```
### 4.3 [显示个人资料](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改视图 resources/views/users/show.blade.php
    ```
    <div class="card-body">
      <h5><strong>个人简介</strong></h5>
      <p>{{ $user->introduction }}</p>
      <hr>
      <h5><strong>注册于</strong></h5>
      <p>{{ $user->created_at->diffForHumans() }}</p>
    </div>
    ```
  - 2.修改模型 $fillable    
    ```
    protected $fillable = [
        'name', 'email', 'password', 'introduction', 
    ];
    ```
    - $fillable 属性的作用是防止用户随意修改模型数据，只有在此属性里定义的字段，才允许修改，否则更新时会被忽略。
  - 3.[Carbon](https://github.com/briannesbitt/Carbon) 是 PHP 知名的日期和时间操作扩展，Laravel 框架中使用此扩展来处理时间、日期相关的操作。diffForHumans 是 Carbon 对象提供的方法，提供了可读性越佳的日期展示形式。
### 4.4 [上传图像](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改模型(添加avatar为修改) app/Models/User.php
    ```
    protected $fillable = [
        'name', 'email', 'password', 'introduction', 'avatar'
    ];
    ```
  - 2.上传表单([通过Request获取上传文件](https://learnku.com/docs/laravel/6.x/requests/5139#retrieving-uploaded-files)) resources/views/users/edit.blade.php
    ```
    <div class="form-group">
      <label for="introduction-field">个人简介</label>
      <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
    </div>

    <div class="form-group mb-4">
      <label for="" class="avatar-label">用户头像</label>
      <input type="file" name="avatar" class="form-control-file">

      @if($user->avatar)
        <br>
        <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
      @endif
    </div>
    ```
    - 在 Laravel 中，我们可直接通过 [请求对象（Request）](https://learnku.com/docs/laravel/6.x/requests/5139#retrieving-uploaded-files) 来获取用户上传的文件，如以下两种方法
      ```
      // 第一种方法
      $file = $request->file('avatar');

      // 第二种方法，可读性更高
      $file = $request->avatar;
      ```
  - 3.上传表单添加`enctype="multipart/form-data"`声明 resources/views/users/edit.blade.php
    ```
    <form action="{{ route('users.update', $user->id) }}" method="POST" 
          accept-charset="UTF-8" 
          enctype="multipart/form-data">
    ```
    - 请记住，在图片或者文件上传时，为表单添加此句声明是必须的
  - 4.新建上传图像「工具类」ImageUploadHandler：app/Handlers/ImageUploadHandler.php
    ```
    <?php

    namespace App\Handlers;

    use  Illuminate\Support\Str;

    class ImageUploadHandler
    {
        // 只允许以下后缀名的图片文件上传
        protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

        public function save($file, $folder, $file_prefix)
        {
            // 构建存储的文件夹规则，值如：uploads/images/avatars/201709/21/
            // 文件夹切割能让查找效率更高。
            $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

            // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
            // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
            $upload_path = public_path() . '/' . $folder_name;

            // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
            $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

            // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID 
            // 值如：1_1493521050_7BVc9v9ujP.png
            $filename = $file_prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;

            // 如果上传的不是图片将终止操作
            if ( ! in_array($extension, $this->allowed_ext)) {
                return false;
            }

            // 将图片移动到我们的目标存储路径中
            $file->move($upload_path, $filename);

            return [
                'path' => config('app.url') . "/$folder_name/$filename"
            ];
        }
    }
    ```
    - 我们将使用 app/Handlers 文件夹来存放本项目的工具类，『工具类（utility class）』是指一些跟业务逻辑相关性不强的类，Handlers 意为 **处理器** ，ImageUploadHandler 意为图片上传处理器，简单易懂。
    - Laravel 的『用户上传文件对象』底层使用了 Symfony 框架的 [UploadedFile](https://github.com/symfony/symfony/blob/3.0/src/Symfony/Component/HttpFoundation/File/UploadedFile.php) 对象进行渲染，为我们提供了便捷的文件读取和管理接口
  - 5.控制器中调用「图片上传工具类」UsersController： app/Http/Controllers/UsersController.php
    ```
    use App\Handlers\ImageUploadHandler;

    class UsersController extends Controller
    {
        ...

        public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
        {
            $data = $request->all();

            // 如果上传了图像
            if ($request->avatar) {
                $result = $uploader->save($request->avatar, 'avatars', $user->id);
                if ($result) {
                    $data['avatar'] = $result['path'];
                }
            }

            $user->update($data);
            return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
        }
    }
    ```
  - 6.Git 版本控制(让某个文件夹不纳入git的版本)
    - 添加文件 public/uploads/images/avatars/.gitignore
      ```
      *
      !.gitignore
      ```
      - 上面的两行代码意为：当前文件夹下，忽略所有文件，除了 .gitignore。
  - 7.显示头像
    - 个人页面左侧头像：resources/views/users/show.blade.php
      ```
      <div class="card ">
        <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
        <div class="card-body">
      ```
    - 导航栏图像：resources/views/layouts/_header.blade.php
      ```
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
        {{ Auth::user()->name }}
      </a>
      ```
### 4.6 [图片验证（用 FormRequest表单验证 来限制头像类型和分辨率)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - app/Http/Requests/UserRequest.php
    ```
     public function rules()
    {
        return [
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9]+$/|unique:users,name,' . Auth::id() . 'id',
            'email' => 'required|email',
            'introducton' => 'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=208,min_height=208',
        ];
    }

    // 自定义错误消息
    public function messages()
    {
        return [
            'avatar.mimes' =>'头像必须是 jpeg, bmp, png, gif 格式的图片',
            'avatar.dimensions' => '图片的清晰度不够，宽和高需要 208px 以上',
            'name.unique' => '用户名已被占用，请重新填写',
            'name.regex' => '用户名只支持英文、数字、横杠和下划线。',
            'name.between' => '用户名必须介于 3 - 25 个字符之间。',
            'name.required' => '用户名不能为空。',
        ];
    }

    // 自定义验证属性
    // public function attributes()
    // {
    //     return [
    //         'name' => '用户名',
    //     ];
    // }
    ```
### 4.7 [裁剪头像](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 0.视网膜屏幕
    - 而我们个人空间里显示区域最大也就 208px，即使要兼容 视网膜屏幕（Retina Screen） 的话，最多也就需要 208px * 2 = 416px 
  - 1.图像裁剪扩展包([intervention/image](https://github.com/Intervention/image))
    - 1.安装扩展包(intervention/image)
      ```
      composer require intervention/image
      ```
    - 2.发布配置信息
      ```
      php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"
      ```
      - 打开 config/image.php 文件可以看到只有一个驱动器的选项，支持的值有 GD 库 和 ImageMagic
        - 注：此处我们使用默认的 gd 即可，如果将要开发的项目需要较专业的图片，请考虑 ImageMagic。
  - 2.编写裁剪规则 app/Handlers/ImageUploadHandler.php
    ```
    <?php

    namespace App\Handlers;

    use Image;
    use Str;

    class ImageUploadHandler
    {
        protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

        public function save($file, $folder, $file_prefix, $max_width = false)
        {
            // 构建存储的文件夹规则，值如：uploads/images/avatars/201709/21/
            // 文件夹切割能让查找效率更高。
            $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

            // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
            // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
            $upload_path = public_path() . '/' . $folder_name;

            // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
            $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

            // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID
            // 值如：1_1493521050_7BVc9v9ujP.png
            $filename = $file_prefix . '_' . time() . '_' . Str::random(10) . '.' . $extension;

            // 如果上传的不是图片将终止操作
            if ( ! in_array($extension, $this->allowed_ext)) {
                return false;
            }

            // 将图片移动到我们的目标存储路径中
            $file->move($upload_path, $filename);

            // 如果限制了图片宽度，就进行裁剪
            if ($max_width && $extension != 'gif') {

                // 此类中封装的函数，用于裁剪图片
                $this->reduceSize($upload_path . '/' . $filename, $max_width);
            }

            return [
                'path' => config('app.url') . "/$folder_name/$filename"
            ];
        }

        public function reduceSize($file_path, $max_width)
        {
            // 先实例化，传参是文件的磁盘物理路径
            $image = Image::make($file_path);

            // 进行大小调整的操作
            $image->resize($max_width, null, function ($constraint) {

                // 设定宽度是 $max_width，高度等比例缩放
                $constraint->aspectRatio();

                // 防止裁图时图片尺寸变大
                $constraint->upsize();
            });

            // 对图片修改后进行保存
            $image->save();
        }
    }
    ```
  - 3.修改 UsersController 中的 ImageUploadHandler 调用 
    ```
    // 如果上传了图像
    if ($request->avatar) {
        $result = $uploader->save($request->avatar, 'avatars', $user->id, 416);
        if ($result) {
            $data['avatar'] = $result['path'];
        }
    }
    ```
### 4.8 [授权访问](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.必须登录（auth中间件） app/Http/Controllers/UsersController.php
    ```
    public function __construct()
    {
        // except 黑名单排除不需要登录的，其余都需要登录
        $this->middleware('auth', ['except' => ['show']]);
    }
    ```
  - 2.只有自己能编辑自己（授权策略）
    - 新建「授权策略」文件
      ```
      php artisan make:policy UserPolicy
      ```
    - 编写「授权策略」 app/Policies/UserPolicy.php
      ```
      class UserPolicy
      {
          use HandlesAuthorization;

          // update 方法接收两个参数，第一个参数默认为当前登录用户实例，第二个参数则为要进行授权的用户实例
          // 使用授权策略时，我们 不需要 传递当前登录用户至该方法内，因为框架会自动加载当前登录用户，即不用传递 $currentUser
          public function update(User $currentUser, User $user)
          {
              // 只有自己能编辑自己
              return $currentUser->id === $user->id;
          }
      }
      ```
    - 在控制器中调用「授权策略」 app/Http/Controllers/UsersController.php
      ```
      public function edit(User $user)
      {
          $this->authorize('update', $user);
          return view('users.edit', compact('user'));
      }
      public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
      {
          $this->authorize('update', $user);
          ...
      }
      ```
## 5 [帖子列表](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 5.1 [帖子分类](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.创建分类「模型」和「迁移文件」
    ```
    php artisan make:model Models/Category -m
    ```
    - `-m` 选项意为顺便创建数据库迁移文件（Migration
  - 2.编写「分类迁移文件」 {timestamp}_create_categories_table.php
    ```
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->comment('名称');
            $table->text('description')->nullable()->comment('描述');
            $table->integer('post_count')->default(0)->comment('帖子数');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
    ```
    - name —— 分类的名称，为字符串类型，index() 方法是加上索引，为 MySQL 下的搜索优化，comment() 方法能为表结构注释；
    - 注意这里因业务逻辑使然，我们不需要为分类添加时间戳 $table->timestamps();
  - 3.执行迁移 生成分类表
    ```
    php artisan migrate
    ```
  - 4.修改分类模型 app/Models/Category.php
    ```
    class Category extends Model
    {
        // 因为我们数据库表结构里未生成时间戳，这里需要使用 public $timestamps = false; 
        // 进行设置，告知 Laravel 此模型在创建和更新时不需维护 created_at 和 updated_at 这两个字段。
        public $timestamps = false;

        protected $fillable = [
            'name', 'description',
        ];
    }
    ```
  - 5.用迁移文件初始化分类数据
    - 用迁移文件初始化分类数据的原因
      - 我们想要 LaraBBS 论坛软件在安装的时，就初始化本文最前面提到的四个分类。
      - 面对数据库内容填充的需求，一般情况下我们会使用 Laravel 的 『数据填充 Seed』 。可是在当下场景中，我们无法使用此功能。此一般是用来生成假数据，而现在我们需要生成的是项目的 初始化数据，这些数据是项目运行的一部分，在生产环境下也会使用到，而数据填充只能在开发时使用。
      - 虽然 Laravel 没有自带此类解决方案，不过数据迁移功能倒是比较不错的替代方案。在功能定位上，数据迁移也是项目的一部分，执行的时机刚好是在项目安装时。并且区分执行先后顺序，这确保了初始化数据发生在数据表结构创建完成后。
    - 接下来用「迁移文件来」 **初始化数据**，我们定义命名规范为 seed_(数据库表名称)_data ：
      ```
      php artisan make:migration seed_categories_data
      ```
    - 编写该「迁移文件」：
      ```
      class SeedCategoriesData extends Migration
      {
          public function up()
          {
              $categories = [
                  [
                      'name'        => '分享',
                      'description' => '分享创造，分享发现',
                  ],
                  [
                      'name'        => '教程',
                      'description' => '开发技巧、推荐扩展包等',
                  ],
                  [
                      'name'        => '问答',
                      'description' => '请保持友善，互帮互助',
                  ],
                  [
                      'name'        => '公告',
                      'description' => '站点公告',
                  ],
              ];

              DB::table('categories')->insert($categories);
          }

          public function down()
          {
              DB::table('categories')->truncate();
          }
      }
      ```
    - 执行该 「迁移文件」，初始化分类数据
      ```
      php artisan migrate
      ```
### 5.2 [代码生成器(Laravel 5.x Scaffold Generator)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - [代码生成器(Laravel 5.x Scaffold Generator)](https://learnku.com/courses/laravel-intermediate-training/6.x/code-generator/5559)
  - 安装
    ```
    composer require "summerblue/generator:6.*" --dev
    ```
  - 版本标记（方便后面测试后，回滚到这里）
    ```
    git add -A
    git commit -m "新增 generator 扩展"
    ```
  - 测试运行(**回滚**)
    ```
    php artisan make:scaffold Projects --schema="name:string:index,description:text:nullable,subscriber_count:integer:unsigned:default(0)"
    ```
    - 运行完了，会发现修改了一些文件配置，生成很多新文件，执行了迁移文件。对这些做**回滚**：
      ```
      php artisan migrate:rollback // 先还还原数据库
      git checkout .      // 还原修改文件到原始状态，只是还原之前就已经存在的文件。（将修改内容从 暂存区 → 工作区）
      git status          // 若前面操作时有新增文件，此时会看到有未跟踪的文件 Untracded files
      git clean -f -d     // clean 作用是清理项目，-f 是强制清理文件的设置，-d 选项命令连文件夹一并清除。
      git status          // 再看时，发现：nothing to commit, working directory clean
      ```
      或者这样**回滚**
      ```
      php artisan migrate:rollback // 先还还原数据库
      git add -A                   // 添加所有 (将新文件 从 工作区 → 暂存区)
      git checkout -f              // 放弃本地修改，强制检出代码（将修改内容，包括新老文件，从 暂存区 → 工作区）
      ```
### 5.3 [生成话题骨架](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - [生成话题骨架](https://learnku.com/courses/laravel-intermediate-training/6.x/generate-topic/5560)
  - 用代码生成器 生成话题骨架
    ```
    php artisan make:scaffold Topic --schema="title:string:index,body:text,user_id:bigInteger:unsigned:index,category_id:integer:unsigned:index,reply_count:integer:unsigned:default(0),view_count:integer:unsigned:default(0),last_reply_user_id:integer:unsigned:default(0),order:integer:unsigned:default(0),excerpt:text:nullable,slug:string:nullable"
    ```
    | 字段名称             | 描述                     | 字段类型         | 加索引缘由       | 其他                       |
    | -------------------- | ------------------------ | ---------------- | ---------------- | -------------------------- |
    | `title`              | 帖子标题                 | 字符串（String） | 文章搜索         | 无                         |
    | `body`               | 帖子内容                 | 文本（text）     | 不需要           | 无                         |
    | `user_id`            | 用户 ID                  | 整数（int）      | 数据关联         | `unsigned()`               |
    | `category_id`        | 分类 ID                  | 整数（int）      | 数据关联         | `unsigned()`               |
    | `reply_count`        | 回复数量                 | 整数（int）      | 文章回复数量排序 | `unsigned()`, `default(0)` |
    | `view_count`         | 查看总数                 | 整数（int）      | 文章查看数量排序 | `unsigned()`, `default(0)` |
    | `last_reply_user_id` | 最后回复的用户 ID        | 整数（int）      | 数据关联         | `unsigned()`, `default(0)` |
    | `order`              | 可用来做排序使用         | 整数（int）      | 不需要           | `default(0)`               |
    | `excerpt`            | 文章摘要，SEO 优化时使用 | 文本（text）     | 不需要           | `nullable()`               |
    | `slug`               | SEO 友好的 URI           | 字符串（String） | 不需要           | `nullable()`               |
### 5.4 [填充假数据(users、topics)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.填充用户假数据
    - 用户模型工厂 database/factories/UserFactory.php
      ```
      $factory->define(App\Models\User::class, function (Faker $faker) {
          $date_time = $faker->date . ' ' . $faker->time;
          return [
              'name' => $faker->name,
              'email' => $faker->unique()->safeEmail,
              'remember_token' => Str::random(10),
              'email_verified_at' => now(),
              'password' => bcrypt('12345678'), // password
              'introduction' => $faker->sentence(),
              'created_at' => $date_time,
              'updated_at' => $date_time,
          ];
      });
      ```
    - 用户填充文件 database/seeds/UsersTableSeeder.php
      ```
      php artisan make:seed UsersTableSeeder
      ```
      ```
      public function run()
      {
          // 获取 Faker 实例
          $faker = app(Faker\Generator::class);

          // 头像假数据
          $avatars = [
              'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png',
              'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png',
              'https://cdn.learnku.com/uploads/images/201710/14/1/LOnMrqbHJn.png',
              'https://cdn.learnku.com/uploads/images/201710/14/1/xAuDMxteQy.png',
              'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png',
              'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
          ];

          // 生成数据集合
          $users = factory(User::class)
                          ->times(10)
                          ->make()
                          ->each(function ($user, $index)
                              use ($faker, $avatars)
          {
              // 从头像数组中随机取出一个并赋值
              $user->avatar = $faker->randomElement($avatars);
          });

          // 让隐藏字段可见，并将数据集合转换为数组
          $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

          // 插入到数据库中
          User::insert($user_array);

          // 单独处理第一个用户的数据
          $user = User::find(1);
          $user->name = 'Summer';
          $user->email = 'summer@example.com';
          $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
          $user->save();

      }
      ```
    - 注册填充文件 database/seeds/DatabaseSeeder.php
      ```
      public function run()
      {
          $this->call(UsersTableSeeder::class);
          // $this->call(TopicsTableSeeder::class);
      }
      ```
    - 执行填充
      ```
      php artisan migrate:refresh --seed
      ```
  - 2.填充话题假数据
    - 看看话题模型 app/Models/Topic.php
      ```
      class Topic extends Model
      {
          protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];
      }
      ```
      「生成器」已自动写入了 $fillable 允许填充的字段数组，不要再做修改
    - 话题模型工厂 database/factories/TopicFactory.php
      ```
      $factory->define(App\Models\Topic::class, function (Faker $faker) {

          $sentence = $faker->sentence();

          // 随机取一个月以内的时间
          $updated_at = $faker->dateTimeThisMonth();

          // 传参为生成最大时间不超过，因为创建时间需永远比更改时间要早
          $created_at = $faker->dateTimeThisMonth($updated_at);

          return [
              'title' => $sentence,
              'body' => $faker->text(),
              'excerpt' => $sentence,
              'created_at' => $created_at,
              'updated_at' => $updated_at,
          ];
      });
      ```
    - 话题填充文件 database/seeds/TopicsTableSeeder.php
      ```
      public function run()
      {
          // 所有用户 ID 数组，如：[1,2,3,4]
          $user_ids = User::all()->pluck('id')->toArray();

          // 所有分类 ID 数组，如：[1,2,3,4]
          $category_ids = Category::all()->pluck('id')->toArray();

          // 获取 Faker 实例
          $faker = app(Faker\Generator::class);

          $topics = factory(Topic::class)
                          ->times(100)
                          ->make()
                          ->each(function ($topic, $index)
                              use ($user_ids, $category_ids, $faker)
          {
              // 从用户 ID 数组中随机取出一个并赋值
              $topic->user_id = $faker->randomElement($user_ids);

              // 话题分类，同上
              $topic->category_id = $faker->randomElement($category_ids);
          });

          // 将数据集合转换为数组，并插入到数据库中
          Topic::insert($topics->toArray());
      }
      ```
    - 注册填充文件 database/seeds/DatabaseSeeder.php
      ```
      public function run()
      {
          $this->call(UsersTableSeeder::class);
          $this->call(TopicsTableSeeder::class);
      }
      ```
      注意：run() 方法里的顺序，我们先生成用户数据，再生出话题数据。
    - 执行填充
      ```
      php artisan migrate:refresh --seed
      ```
### 5.5 [话题列表页面](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 「话题模型』关联「用户模型」和「分类模型」 app/Models/Topic.php
    ```
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    ```
  - 话题列表视图（用appends()使分页链接继承请求参数） resources/views/topics/index.blade.php
    ```
    @extends('layouts.app')

    @section('title', '话题列表')

    @section('content')

    <div class="row mb-5">
      <div class="col-lg-9 col-md-9 topic-list">
        <div class="card ">

          <div class="card-header bg-transparent">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#">最后回复</a></li>
              <li class="nav-item"><a class="nav-link" href="#">最新发布</a></li>
            </ul>
          </div>

          <div class="card-body">
            {{-- 话题列表 --}}
            @include('topics._topic_list', ['topics' => $topics])
            {{-- 分页 --}}
            <div class="mt-5">
              {!! $topics->appends(Request::except('page'))->render() !!}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 sidebar">
        @include('topics._sidebar')
      </div>
    </div>

    @endsection
    ```
    - [分页 appends()](https://leoyang90.gitbooks.io/laravel-source-analysis/content/Laravel%20Database%E2%80%94%E2%80%94%E5%88%86%E9%A1%B5%E5%8E%9F%E7%90%86%E4%B8%8E%E6%BA%90%E7%A0%81%E5%88%86%E6%9E%90.html) 可以使用 appends 方法附加查询参数到分页链接中，使 URI 中的的请求参数得到继承
      - `$topics->appends(Request::except('page'))->render()` 的意思是：把 URI 中除了page的其余参数，都加到分页链接中去，即 URI 中的参数得到了继承 （排除 page 参数是因为，分页链接中带有 page 参数）
    - 列表子视图 resources/views/topics/_topic_list.blade.php
      ```
      @if (count($topics))
        <ul class="list-unstyled">
          @foreach ($topics as $topic)
            <li class="media">
              <div class="media-left">
                <a href="{{ route('users.show', [$topic->user_id]) }}">
                  <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}">
                </a>
              </div>

              <div class="media-body">

                <div class="media-heading mt-0 mb-1">
                  <a href="{{ route('topics.show', [$topic->id]) }}" title="{{ $topic->title }}">
                    {{ $topic->title }}
                  </a>
                  <a class="float-right" href="{{ route('topics.show', [$topic->id]) }}">
                    <span class="badge badge-secondary badge-pill"> {{ $topic->reply_count }} </span>
                  </a>
                </div>

                <small class="media-body meta text-secondary">

                  <a class="text-secondary" href="#" title="{{ $topic->category->name }}">
                    <i class="far fa-folder"></i>
                    {{ $topic->category->name }}
                  </a>

                  <span> • </span>
                  <a class="text-secondary" href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">
                    <i class="far fa-user"></i>
                    {{ $topic->user->name }}
                  </a>
                  <span> • </span>
                  <i class="far fa-clock"></i>
                  <span class="timeago" title="最后活跃于：{{ $topic->updated_at }}">{{ $topic->updated_at->diffForHumans() }}</span>
                </small>

              </div>
            </li>

            @if ( ! $loop->last)
              <hr>
            @endif

          @endforeach
        </ul>

      @else
        <div class="empty-block">暂无数据 ~_~ </div>
      @endif
      ```
    - 右边栏子视图 resources/views/topics/_sidebar.blade.php
      ```
      <div class="card ">
        <div class="card-body">
          右边导航栏
        </div>
      </div>
      ```
  - 样式优化 resources/sass/app.scss
    ```
    /* Topic Index Page */
    .topics-index-page {
      .topic-list {
        .nav>li>a {
          position: relative;
          display: block;
          padding: 5px 14px;
          font-size: 0.9em;
        }

        a {
          color: #444444;
        }

        .meta {
          font-size: 0.9em;
          color: #b3b3b3;

          a {
            color: #b3b3b3;
          }
        }

        .badge {
          background-color: #d8d8d8;
        }

        hr {
          margin-top: 12px;
          margin-bottom: 12px;
          border: 0;
          border-top: 1px solid #dcebf5;
        }
      }
    }

    /* Add container and footer space */
    #app > div.container {
      margin-bottom: 100px;
    }
    ```
### 5.6 [性能优化 (预加载 N+1)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 安装 Debugbar（[版本号 ~ ^](https://jochen-z.com/articles/30/differences-between-the-composer-version-range-symbols-and)）
    ```
    composer require "barryvdh/laravel-debugbar:~3.2" --dev
    ```
    - 版本格式：主版本号。次版本号。修订号，如 `1.0.1` , `3.2.39` 。版本号递增规则如下：
      - 主版本号：当你做了不兼容的 API 修改
      - 次版本号：当你做了向下兼容的功能性新增
      - 修订号：当你做了向下兼容的问题修正。
    - `波浪号 ~`
      - `〜1.2` 代表 `1.2 <= 版本号 < 2.0.0` 
      - `〜1.2.3` 代表 `1.2.3 <= 版本号 < 1.3.0`
      - `波浪号 ~` 表示「从最后一位数字递增」
    - `插入号 ^`
      - `^1.2` 代表 `1.2 <= 版本号 < 2.0.0`
      - `^1.2.3` 代表 `1.2.3 <= 版本号 < 2.0.0`
      - `插入号 ^` 表示「从第二位数字递增」
    - `插入号 ^` 的特殊情况
      - 对于 `pre-1.0` ，它还考虑到安全性，会将 `^0.3` 视为 `0.3.0 <= 版本号 < 0.4.0`
  - 发布配置文件
    ```
    php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
    ```
  - 修改配置文件, 打开 config/debugbar.php，将 `enabled` 的值设置为：
    ```
    'enabled' => env('APP_DEBUG', false),
    ```
    修改完以后，Debugbar 分析器的启动状态将由 .env 文件中 APP_DEBUG 值决定。
  - 刷新列表页面即可看到我们的开发者工具栏
    - 在 `Debugbar` 中可以看到数据库查询次数，为了读取 user 和 category，每次的循环都要查一下 users 和 categories 表，如果我第一次查询出来的是 N 条记录，那么最终需要执行的 SQL 语句就是 N+1 次。
  - 用 [预加载](https://learnku.com/docs/laravel/6.x/eloquent-relationships/5177#eager-loading) 解决 N+1 问题 app/Http/Controllers/TopicsController.php
    ```
    $topics = Topic::with('user', 'category')->paginate();
    ```
### 5.7 [分类下的话题列表](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.路由
    ```
    Route::resource('categories', 'CategoriesController', ['only' => ['show']]);
    ```
  - 2.控制器 app/Http/Controllers/CategoriesController.php
    ```
    php artisan make:controller CategoriesController
    ```
    ```
    public function show(Category $category)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = Topic::where('category_id', $category->id)->paginate(20);
        // 传参变量话题和分类到模板中
        return view('topics.index', compact('topics', 'category'));
    }
    ```
  - 3.局部视图中 添加 `categories.show` 路由链接 resources/views/topics/_topic_list.blade.php
    ```
    <a class="text-secondary" href="{{ route('categories.show', $topic->category_id) }}" title="{{ $topic->category->name }}">
      <i class="far fa-folder"></i>
      {{ $topic->category->name }}
    </a>
    ```
  - 4.列表视图中 显示当前分类信息 resources/views/topics/index.blade.php
    ```
    @extends('layouts.app')

    @section('title', '话题列表')

    @section('content')

    <div class="row mb-5">
      <div class="col-lg-9 col-md-9 topic-list">
        @if (isset($category))
          <div class="alert alert-info" role="alert">
            {{ $category->name }} ：{{ $category->description }}
          </div>
        @endif

        <div class="card ">
    ```
  - 5.发现分类页样式不对(路由css类名)
    - 这是因为 `app.scss` 中定义了 `路由 css 类名称` ，我们用了同一个模板，但是分类页路由名称已变为 `categories.sho`。修复方法很简单，只需要样式表中新添加选择器即可：
      ```
      /* Topic Index Page */
      .topics-index-page, .categories-show-page { 
      ```
  - 6.列表页面标题定制 resources/views/topics/index.blade.php
    ```
    @extends('layouts.app')

    @section('title', isset($category) ? $category->name : '话题列表')
    ```
  - 7.增加顶部导航(laravel-active扩展包、辅助函数) resources/views/layouts/_header.blade.php
    ```
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ active_class(if_route('topics.index')) }}"><a class="nav-link" href="{{ route('topics.index') }}">话题</a></li>
      <li class="nav-item {{ category_nav_active(1) }}"><a class="nav-link" href="{{ route('categories.show', 1) }}">分享</a></li>
      <li class="nav-item {{ category_nav_active(2) }}"><a class="nav-link" href="{{ route('categories.show', 2) }}">教程</a></li>
      <li class="nav-item {{ category_nav_active(3) }}"><a class="nav-link" href="{{ route('categories.show', 3) }}">问答</a></li>
      <li class="nav-item {{ category_nav_active(4) }}"><a class="nav-link" href="{{ route('categories.show', 4) }}">公告</a></li>
    </ul>
    ```
    - [laravel-active](https://github.com/summerblue-ext-forks/active) 扩展包提供了「active_class」方法
      - 安装 `laravel-active` 扩展包
        ```
        composer require "summerblue/laravel-active:6.*"
        ```
      - 「active_class」方法：如果传参满足指定条件 ($condition) ，此函数将返回 $activeClass，否则返回 $inactiveClass
      - 此扩展包提供了一批函数让我们更方便的进行 $condition 判断：
        ```
        if_route () - 判断当前对应的路由是否是指定的路由；
        if_route_param () - 判断当前的 url 有无指定的路由参数。
        if_query () - 判断指定的 GET 变量是否符合设置的值；
        if_uri () - 判断当前的 url 是否满足指定的 url；
        if_route_pattern () - 判断当前的路由是否包含指定的字符；
        if_uri_pattern () - 判断当前的 url 是否含有指定的字符；
        ```
    - 新增一个辅助函数 category_nav_active ，在 app/helpers.php 中：
      ```
      // 为当前活跃「分类路由」，添加 active 的css类名 
      function category_nav_active($category_id)
      {
        // active_class 是 summerblue/laravel-active 扩展提供的方法
        // 如果「路由名」是 categories.show 并且 「参数」category 的值是 $category_id ，则返回 'actvie' 作为 css 类名
        return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
      }
      ```
### 5.8 [话题列表排序](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.排序的思路
    - 我们可以通过 URI 传参 order 给控制器，控制器根据此参数来决定数据的读取逻辑。因为『分类下的话题列表』也会用到排序，并且是在不同的控制器中，所以在此处为了复用性考虑，我们将会把排序逻辑代码放置于 Topic 数据模型中。作为一个合格的程序员，编码时需时刻注意代码复用性。
    - 接下来的步骤是：
      - Topic 中编写排序逻辑；
      - TopicsController 控制器中调用；
      - CategoriesController 控制器中调用。
  - 2.编写排序逻辑(查询作用域) app/Models/Topic.php
    ```
    public function scopeWithOrder($query, $order)
    {
        // 不同的排序，使用不用的数据读取逻辑
        switch ($order) {
            case 'recent':
                $query->recent();
                break;
            
            default:
                $query->recentReplied();
                break;
        }
    }

    public function scopeRecent($query)
    {
        // 按创建时间排序
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeRecentReplied($query)
    {
        // 当话题哟新回复时，我们将辨析逻辑更新话题模型的 reply_count 属性
        // 此时会自动触发框架对数据模型 updated_at 时间错的更新
        return $query->orderBy('updated_at', 'desc');
    }
    ```
    - 查询作用域：作用域总是返回一个查询构造器实例：
      - [本地作用域](https://learnku.com/docs/laravel/6.x/eloquent/5176#4330c1)
        ```
        public function scopeRecent($query) { }
        public function scopeRecentReplied($query) { }
        ```
      - [动态作用域](https://learnku.com/docs/laravel/6.x/eloquent/5176#acba4e)
        ```
        public function scopeWithOrder($query, $order) { }
        ```
      - 作用域定义时，加 `scope` 前缀，调用时不用加 `scope` 前缀
      - 可以了解下 [全局作用域](https://learnku.com/docs/laravel/6.x/eloquent/5176#858495)，全局作用域 用匿名函数的方式定义最好，省得去新建一个类。
  - 3.控制器中调用(查询作用域)
    - app/Http/Controllers/TopicsController.php
      ```
      public function index(Request $request, Topic $topic)
      {
        // $topics = Topic::with('user', 'category')->paginate();
        $topics = $topic->withOrder($request->order) // 排序
                        ->with('user', 'category')	 // 预加载防止 N+1 问题
                        ->paginate(10);
        return view('topics.index', compact('topics'));
      }
      ```
    - app/Http/Controllers/CategoriesController.php
      ```
      public function show(Category $category, Request $request, Topic $topic)
      {
          // 读取分类 ID 关联的话题，并按每 20 条分页
          // $topics = Topic::where('category_id', $category->id)->paginate(20);
          $topics = $topic->withOrder($request->order) // 排序
                          ->where('category_id', $category->id)
                          ->with('user', 'category')  // 预加载防止 N+1 问题
                          ->paginate(10);
          
          return view('topics.index', compact('topics', 'category'));
      }
      ```
  - 4.修改模板(查询参数) resources/views/topics/index.blade.php
    ```
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{ active_class( ! if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=default">
          最后回复
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ active_class(if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=recent">
          最新发布
        </a>
      </li>
    </ul>
    ```
    - 通过 URL 中的 order 参数，先判断 active css类名是否该点亮；再通控制器调用`动态作用域` 接收 `order` 参数实现排序
### 5.9 [用户发布的话题](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改导航栏，新增个人中心的链接，并为下拉列表增加图标 resources/views/layouts/_header.blade.php
    ```
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
        <i class="far fa-user mr-2"></i>
        个人中心
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
        <i class="far fa-edit mr-2"></i>
        编辑资料
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" id="logout" href="#">
        <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('您确定要退出吗？');">
          {{ csrf_field() }}
          <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
        </form>
      </a>
    </div>
    ```
  - 2.新增模型关联 app/Models/User.php
    ```
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
    ```
  - 3.修改模板 resources/views/users/show.blade.php
    ```
    {{-- 用户发布的内容 --}}
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs">
          <li class="nav-item"><a class="nav-link active bg-transparent" href="#">Ta 的话题</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Ta 的回复</a></li>
        </ul>
        @include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
      </div>
    </div>
    ```
    - 子模板 resources/views/users/_topics.blade.php
      ```
      @if (count($topics))

        <ul class="list-group mt-4 border-0">
          @foreach ($topics as $topic)
            <li class="list-group-item pl-2 pr-2 border-right-0 border-left-0 @if($loop->first) border-top-0 @endif">
              <a href="{{ route('topics.show', $topic->id) }}">
                {{ $topic->title }}
              </a>
              <span class="meta float-right text-secondary">
                {{ $topic->reply_count }} 回复
                <span> ⋅ </span>
                {{ $topic->created_at->diffForHumans() }}
              </span>
            </li>
          @endforeach
        </ul>

      @else
        <div class="empty-block">暂无数据 ~_~ </div>
      @endif

      {{-- 分页 --}}
      <div class="mt-4 pt-1">
        {!! $topics->render() !!}
      </div>
      ```
    - 模板中使用「查询作用域」: recent()
      ```
      @include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
      ```   
## 6 [帖子的CRUD](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 6.1 [新建话题（观察器）](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.新增入口 
    - resources/views/layouts/_header.blade.php
      ```
      <!-- Authentication Links -->
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link mt-1 mr-3 font-weight-bold" href="{{ route('topics.create') }}">
              <i class="fa fa-plus"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
      ```
    - resources/views/topics/_sidebar.blade.php
      ```
      <div class="card ">
        <div class="card-body">
          <a href="{{ route('topics.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
            <i class="fas fa-pencil-alt mr-2"></i>  新建帖子
          </a>
        </div>
      </div>
      ```
  - 2.数据模型 app/Models/Topic.php

    ```
    protected $fillable = [
        'title', 'body', 'category_id', 'excerpt', 'slug'
    ];
    ```
    - 以下字段将禁止用户修改：
      ```
      user_id —— 文章的作者，我们不希望文章的作者可以被随便指派；
      last_reply_user_id —— 最后回复的用户 ID，将由程序来维护；
      order —— 文章排序，将会是管理员专属的功能；
      reply_count —— 回复数量，程序维护；
      view_count —— 查看数量，程序维护；
      ```
  - 3.控制器 app/Http/Controllers/TopicsController.php
    ```
    public function create(Topic $topic)
    {
        $categories = Category::all();
        return view('topics.create_and_edit', compact('topic', 'categories'));
    }
    public function store(TopicRequest $request, Topic $topic)
    {
        $topic->fill($request->all());
        $topic->user_id = Auth::id();
        $topic->save();

        return redirect()->route('topics.show', $topic->id)->with('success', '帖子创建成功！');
    }
    ```
    - store() 方法的第二个参数，会创建一个空白的 $topic 实例；
    - $request->all() 获取所有用户的请求数据数组，如 ['title' => '标题', 'body' => '内容', ... ]；
    - $topic->fill($request->all()); **fill** 方法会将传参的键值数组填充到模型的属性中，如以上数组，$topic->title 的值为 `标题`；
  - 4.视图模板（二合一模板） resources/views/topics/create_and_edit.blade.php
    ```
    @extends('layouts.app')

    @section('content')

      <div class="container">
        <div class="col-md-10 offset-md-1">
          <div class="card ">

            <div class="card-body">
              <h2 class="">
                <i class="far fa-edit"></i>
                @if($topic->id)
                编辑话题
                @else
                新建话题
                @endif
              </h2>

              <hr>

              @if($topic->id)
                <form action="{{ route('topics.update', $topic->id) }}" method="POST" accept-charset="UTF-8">
                  <input type="hidden" name="_method" value="PUT">
              @else
                <form action="{{ route('topics.store') }}" method="POST" accept-charset="UTF-8">
              @endif

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  @include('shared._error')

                  <div class="form-group">
                    <input class="form-control" type="text" name="title" value="{{ old('title', $topic->title ) }}" placeholder="请填写标题" required />
                  </div>

                  <div class="form-group">
                    <select class="form-control" name="category_id" required>
                      <option value="" hidden disabled selected>请选择分类</option>
                      @foreach ($categories as $value)
                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <textarea name="body" class="form-control" id="editor" rows="6" placeholder="请填入至少三个字符的内容。" required>{{ old('body', $topic->body ) }}</textarea>
                  </div>

                  <div class="well well-sm">
                    <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2" aria-hidden="true"></i> 保存</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>

    @endsection
    ```
  - 5.模型观察器（观察模型 生成摘要） app/Observers/TopicObserver.php
    ```
    public function saving(Topic $topic)
    {
        $topic->excerpt = make_excerpt($topic->body);
    }
    ```
    - make_excerpt() 是我们自定义的辅助方法，在 app/helpers.php 中：
      ```
      // 根据 $topic->body 内容，去除 html 代码，去除空行及回车键，生成限制字数的摘要
      function make_excerpt($value, $length = 200)
      {
        $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
        return Str::limit($excerpt, $length);
      }
      ```
    - **观察器注册**： app/Providers/AppServiceProvider.php
      ```
      public function boot()
      {
        \App\Models\User::observe(\App\Observers\UserObserver::class);
        \App\Models\Topic::observe(\App\Observers\TopicObserver::class);
      }
      ```
  - 6.表单验证类 app/Http/Requests/TopicRequest.php
    ```
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title'       => 'required|min:2',
                    'body'        => 'required|min:3',
                    'category_id' => 'required|numeric',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'title.min' => '标题必须至少两个字符',
            'body.min' => '文章内容必须至少三个字符',
        ];
    }
    ```
### 6.2 [使用 Simditor 编辑器](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.下载 [Simditor](https://simditor.tower.im/)
  - 2.集成到项目中
    - 新建一下两个文件夹
      ```
      mkdir -p resources/editor/css
      mkdir -p resources/editor/js
      ```
    - `simditor.css` 放置于 `resources/editor/css`
    - `hotkeys.js`, `module.js`, `simditor.js`, `uploader.js` 四个文件放置于 `resources/editor/js`
  - 3.修改 webpack.mix.js ，使用 Mix 的 copyDirectory 方法将编辑器的 CSS 和 JS 文件复制到 public 文件夹下
    ```
    const mix = require('laravel-mix');

    mix.js('resources/js/app.js', 'public/js')
      .sass('resources/sass/app.scss', 'public/css')
      .version()
      .copyDirectory('resources/editor/js', 'public/js')
      .copyDirectory('resources/editor/css', 'public/css');
    ```
    - 执行 `npm run dev` 会看到成功复制的文件
  - 4.按需加载编辑器文件
    - Simditor 的样式和脚本文件只需要在帖子创建页面中使用，出于性能考虑，我们将只在话题创建页码中加载这些文件。
    - 首先，在布局文件中种下锚点 styles 和 scripts：resources/views/layouts/app.blade.php
      ```
      <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @yield('styles')

      </head>

      <body>
      .
      .
      .

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>

        @yield('scripts')

      </body>
      </html>
      ```
    - 然后，按需加载 resources/views/topics/create_and_edit.blade.php
      ```
      ...
      @section('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
      @stop

      @section('scripts')
        <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/uploader.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>

        <script>
          $(document).ready(function() {
            var editor = new Simditor({
              textarea: $('#editor'),
            });
          });
        </script>
      @stop
      ```
### 6.3 [Simditor 上传图片](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 0.图片上传思路
    - 「Simditor编辑器」发起图片上传请求，「服务器」处理完请求后，返回一个 json 数据 $response 给「Simditor编辑器」
    - 图片上传的时机是：选择完图片，或者图片粘贴到编辑器后，就离开上传图片，其实是在点击”保存“之前就上传好了图片。
  - 1.设置路由 routes/web.php
    ```
    Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
    ```
  - 2.JS脚本调用 resources/views/topics/create_and_edit.blade.php
    ```
    @section('scripts')
      <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/uploader.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>

      <script>
        $(document).ready(function() {
          var editor = new Simditor({
            textarea: $('#editor'),
            upload: {
              url: '{{ route('topics.upload_image') }}',
              params: {
                _token: '{{ csrf_token() }}'
              },
              fileKey: 'upload_file',
              connectionCount: 3,
              leaveConfirm: '文件上传中，关闭此页面将取消上传。'
            },
            pasteImage: true,
          });
        });
      </script>
    @stop
    ```
    - 照 [Simditor编辑器上传图片文档](https://simditor.tower.im/docs/doc-config.html#anchor-upload) 进行设定
    - `pasteImag`e —— 设定是否支持图片黏贴上传，这里我们使用 true 进行开启；
    - `url` —— 处理上传图片的 URL；
    - `params` —— 表单提交的参数，Laravel 的 POST 请求必须带防止 CSRF 跨站请求伪造的 _token 参数；
    - `fileKey` —— 是服务器端获取图片的键值，我们设置为 upload_file;
    - `connectionCount` —— 最多只能同时上传 3 张图片；
    - `leaveConfirm` —— 上传过程中，用户关闭页面时的提醒。
  - 3.控制器处理图片 app/Http/Controllers/TopicsController.php
    ```
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {

        // 初始化返回给 Simditor编辑器 的数据，默认是失败的（以下格式是 Simditor 要求的返回格式）
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($file, 'topics', \Auth::id(), 400);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功!";
                $data['success']   = true;
            }
        }
        return $data;
    }
    ```
    - 需要返回给 Simditor编辑器 的 JOSN 数据格式如下：
      ```
      {
        "success": true/false,
        "msg": "error message", # optional
        "file_path": "[real file path]"
      }
      ```
  - 4.Git 版本控制: public/uploads/images/topics/.gitignore
    ```
    *
    !.gitignore
    ```
### 6.4 [显示帖子](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改模板 resources/views/topics/show.blade.php
    ```
    @extends('layouts.app')

    @section('title', $topic->title)
    @section('description', $topic->excerpt)

    @section('content')

      <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
          <div class="card ">
            <div class="card-body">
              <div class="text-center">
                作者：{{ $topic->user->name }}
              </div>
              <hr>
              <div class="media">
                <div align="center">
                  <a href="{{ route('users.show', $topic->user->id) }}">
                    <img class="thumbnail img-fluid" src="{{ $topic->user->avatar }}" width="300px" height="300px">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
          <div class="card ">
            <div class="card-body">
              <h1 class="text-center mt-3 mb-3">
                {{ $topic->title }}
              </h1>

              <div class="article-meta text-center text-secondary">
                {{ $topic->created_at->diffForHumans() }}
                ⋅
                <i class="far fa-comment"></i>
                {{ $topic->reply_count }}
              </div>

              <div class="topic-body mt-4 mb-4">
                {!! $topic->body !!}
              </div>

              <div class="operate">
                <hr>
                <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
                  <i class="far fa-edit"></i> 编辑
                </a>
                <a href="#" class="btn btn-outline-secondary btn-sm" role="button">
                  <i class="far fa-trash-alt"></i> 删除
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    @stop
    ```
    - 话题字段 `excerpt` 是文章摘录，用作 SEO 页面描述使用，因此需要在主布局模板中新增 `description` 锚点：resources/views/layouts/app.blade.php
      ```
      <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
      <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')" />
      ```
  - 2.修改样式 resources/sass/app.scss
    ```
    /* Topic create and edit page */
    .simditor-body img {
      max-width: 100%;
    }

    /* Topic Show Page */
    @import "topic_body";

    .topics-show-page {
      .card {
        padding: 15px;
        h1 {
          margin: 0.4em auto 0.6em;
          font-size: 28px;
          line-height: 38px;
        }
      }
    }
    ```
    - 由于 `topic_body` 样式内容太多，所以将其放置于另一个文件中：`resources/sass/_topic_body.scss`
      - 注意，在 `resources/sass/app.scss` 中引用时 `@import "topic_body";` 没有前缀 `_`
### 6.5 [XSS 安全漏洞(HTMLPurifier)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - [XSS 安全漏洞](https://learnku.com/courses/laravel-intermediate-training/6.x/safety-problem/5572)
    - XSS 也称跨站脚本攻击 (Cross Site Scripting)，恶意攻击者往 Web 页面里插入恶意 JavaScript 代码，当用户浏览该页之时，嵌入其中 Web 里面的 JavaScript 代码会被执行，从而达到恶意攻击用户的目的。
    - 一种比较常见的 XSS 攻击是 Cookie 窃取。我们都知道网站是通过 Cookie 来辨别用户身份的，一旦恶意攻击者能在页面中执行 JavaScript 代码，他们即可通过 JavaScript 读取并窃取你的 Cookie，拿到你的 Cookie 以后即可伪造你的身份登录网站。
  - 帖子显示漏洞{!! !!}
    ```
    <div class="topic-body">
        {!! $topic->body !!}
    </div>
    ```
    - Blade 的 {!! !!} 语法是直接输出数据，不会对数据做任何处理。如果此时输出数据里有 JavaScript 代码，就很不安全。
  - 虽然 Simditor编辑器 对 $topic->body 进行了转义，但也不安全。因为用户不一定是网页上向服务器提交内容，有太多的工具可以发起操作。
  - 解决方案是：对用户提交的数据进行过滤（HTMLPurifier）
    - 安装 `HTMLPurifier`
      ```
      composer require "mews/purifier:~3.0"
      ```
    - 生成配置
      ```
      php artisan vendor:publish --provider="Mews\Purifier\PurifierServiceProvider"
      ```
    - 编辑配置 config/purifier.php
      ```
      <?php

      return [
          'encoding'      => 'UTF-8',
          'finalize'      => true,
          'cachePath'     => storage_path('app/purifier'),
          'cacheFileMode' => 0755,
          'settings'      => [
              'user_topic_body' => [
                  'HTML.Doctype'             => 'XHTML 1.0 Transitional',
                  'HTML.Allowed'             => 'div,b,strong,i,em,a[href|title],ul,ol,ol[start],li,p[style],br,span[style],img[width|height|alt|src],*[style|class],pre,hr,code,h2,h3,h4,h5,h6,blockquote,del,table,thead,tbody,tr,th,td',
                  'CSS.AllowedProperties'    => 'font,font-size,font-weight,font-style,margin,width,height,font-family,text-decoration,padding-left,color,background-color,text-align',
                  'AutoFormat.AutoParagraph' => true,
                  'AutoFormat.RemoveEmpty'   => true,
              ],
          ],
      ];
      ```
      - 配置里的 `user_topic_body` 是我们为话题内容定制的，配合 `clean()` 方法使用
        ```
        $topic->body = clean($topic->body, 'user_topic_body');
        ```
  - 在观察器中过滤 app/Observers/TopicObserver.php
    ```
    class TopicObserver
    {
        // 数据写入数据库之前
        public function saving(Topic $topic)
        {
            // 使用「HTMLPurifier扩展」的 clean() 方法过滤用户提交内容，第二个参数是 config/purifier 中的配置项
            $topic->body = clean($topic->body, 'user_topic_body');

            $topic->excerpt = make_excerpt($topic->body);
        }
    }
    ```
### 6.6 [编辑帖子](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.控制器(传递 categories 变量) app/Http/Controllers/TopicsController.php
    ```
    public function edit(Topic $topic)
    {
        $this->authorize('update', $topic);
        $categories = Category::all();
        return view('topics.create_and_edit', compact('topic', 'categories'));
    }

    public function update(TopicRequest $request, Topic $topic)
    {
        $this->authorize('update', $topic);
        $topic->update($request->all());

        return redirect()->route('topics.show', $topic->id)->with('success', '更新成功！');
    }
    ```
  - 2.视图 (选中正在编辑的分类) resources/views/topics/create_and_edit.blade.php
    ```
    <div class="form-group">
      <select name="category_id" class="form-control" required>
        <option value="" hidden disabled {{ $topic->id ? '' : 'selected' }}>请选择分类</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ $topic->category_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    ```
  - 3.授权策略(只有自己能编辑自己) app/Policies/TopicPolicy.php
    ```
    public function update(User $user, Topic $topic)
    {
        return $topic->user_id == $user->id;
    }
    ```
### 6.7 [删除帖子](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.授权策略 (只能自己删除自己)  app/Policies/TopicPolicy.php

    ```
    public function update(User $user, Topic $topic)
    {
        // return $topic->user_id == $user->id;
        return $user->isAuthorOf($topic);
    }

    public function destroy(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }
    ```
    - 需要在 app/Models/User.php 中定义一个方法 isAuthorOf()，这个可以减少重复代码
      ```
      public function isAuthorOf($model)
      {
          return $this->id == $model->user_id;
      }
      ```
  - 2.控制器 app/Http/Controllers/TopicsController.php
    ```
    public function destroy(Topic $topic)
    {
      $this->authorize('destroy', $topic);
      $topic->delete();

      return redirect()->route('topics.index')->with('success', '删除成功！');
    }
    ``` 
  - 3.视图(构建删除表单) resources/views/topics/show.blade.php
    ```
    @can('update', $topic)
    <div class="operate">
      <hr>
      <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
        <i class="far fa-edit"></i> 编辑
      </a>
      <form action="{{ route('topics.destroy', $topic->id) }}" method="post" style="display: inline-block;" onsubmit="return confirm('确定要删除吗？');">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-outline-secondary">
          <i class="far fa-trash-alt"></i> 删除
        </button>
      </form>
    </div>
    @endcan
    ```
### 6.8 [SEO 友好的 URL](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.什么是 SEO 友好的 URL
    - 假如话题标题为『Slug 翻译测试』的 URL 是：
      ```
      http://larabbs.test/topics/119
      ```
    - 加入 Slug 后 SEO 友好的链接为：
      ```
      http://larabbs.test/topics/119/slug-translation-test
      ```
  - 2.翻译器工具类 app/Handlers/SlugTranslateHandler.php
    ```
    <?php

    namespace App\Handlers;

    use GuzzleHttp\Client;
    use Overtrue\Pinyin\Pinyin;

    class SlugTranslateHandler
    {
        public function translate($text)
        {
            // 实例化 HTTP 客户端
            $http = new Client;

            // 初始化配置信息
            $api = 'http://api.fanyi.baidu.com/api/trans/vip/translate?';
            $appid = config('services.baidu_translate.appid');
            $key = config('services.baidu_translate.key');
            $salt = time();

            // 如果没有配置百度翻译，自动使用兼容的拼音方案
            if (empty($appid) || empty($key)) {
                return $this->pinyin($text);
            }

            // 根据文档，生成 sign
            // http://api.fanyi.baidu.com/api/trans/product/apidoc
            // appid+q+salt+密钥 的MD5值
            $sign = md5($appid. $text . $salt . $key);

            // 构建请求参数
            $query = http_build_query([
                "q"     =>  $text,
                "from"  => "zh",
                "to"    => "en",
                "appid" => $appid,
                "salt"  => $salt,
                "sign"  => $sign,
            ]);

            // 发送 HTTP Get 请求
            $response = $http->get($api.$query);

            $result = json_decode($response->getBody(), true);

            /**
            获取结果，如果请求成功，dd($result) 结果如下：

            array:3 [▼
                "from" => "zh"
                "to" => "en"
                "trans_result" => array:1 [▼
                    0 => array:2 [▼
                        "src" => "XSS 安全漏洞"
                        "dst" => "XSS security vulnerability"
                    ]
                ]
            ]

            **/

            // 尝试获取获取翻译结果
            if (isset($result['trans_result'][0]['dst'])) {
                return \Str::slug($result['trans_result'][0]['dst']);
            } else {
                // 如果百度翻译没有结果，使用拼音作为后备计划。
                return $this->pinyin($text);
            }
        }

        public function pinyin($text)
        {
            return \Str::slug(app(Pinyin::class)->permalink($text));
        }
    }
    ```
    - 安装依赖 [Guzzle](https://github.com/guzzle/guzzle) ，Guzzle 库是一套强大的 PHP HTTP 请求套件
      ```
      composer require "guzzlehttp/guzzle:~6.3"
      ```
      无需配置，安装完成后即可使用
    - 安装依赖 [PinYin](https://github.com/overtrue/pinyin)
      ```
      composer require "overtrue/pinyin:~4.0"
      ```
      无需配置，安装完成后即可使用
  - 3.[百度翻译 API 配置信息](http://api.fanyi.baidu.com/api/trans/product/index)
    - `config/services.php` 中：
      ```
      return [
          ...
          'baidu_translate' => [
              'appid' => env('BAIDU_TRANSLATE_APPID'),
              'key'   => env('BAIDU_TRANSLATE_KEY'),
          ],

      ];
      ```
    - `.env` 中：
      ```
      BAIDU_TRANSLATE_APPID=201703xxxxxxxxxxxxx
      BAIDU_TRANSLATE_KEY=q0s6axxxxxxxxxxxxxxxxx
      ```
    - `.env.example` 中：
      ```
      BAIDU_TRANSLATE_APPID=
      BAIDU_TRANSLATE_KEY=
      ```
      - 每当我们在 .env 中新增键值时，都必须在 .env.example 文件中新增相应的键.因为 .env 文件被我们排除 Git 跟踪（可以查看 .gitignore 文件），文件 .env.example 是作为项目环境变量的初始化文件而存在。当项目在新环境中安装时，只需要执行 cp .env.example .env 命令，并在 .env 填入对应的值，即可完成对项目环境变量的配置。
  - 4.模型观察器中调用翻译 app/Observers/TopicObserver.php
    ```
    // 数据写入数据库之前
    public function saving(Topic $topic)
    {
        // XSS过滤：使用「HTMLPurifier扩展」的 clean() 方法过滤用户提交内容，第二个参数是 config/purifier 中的配置项
        $topic->body = clean($topic->body, 'user_topic_body');

        // 生成话题摘录
        $topic->excerpt = make_excerpt($topic->body);

        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $topic->slug) {
            $topic->slug = app(SlugTranslateHandler::class)->translate($topic->title);
        }
    }
    ```
  - 5.修改路由 [$model->link()](https://learnku.com/docs/laravel-specification/5.5/router/502#038eff) 
    - 修改 routes/web.php，`topics.show`路由中增加「可选路由参数」`slug`
      ```
      Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
      Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');
      ```
    - 新建 **$model->link()** 方法，app/Models/Topic.php
      ```
      public function link($params = [])
      {
          return route('topics.show', array_merge([$this->id, $this->slug], $params));
      }
      ```
      - 获取 URL **必须** 遵循以下优先级：
        - 1.$model->link()
        - 2.route 方法
        - 3.url 方法
      - 『单个模型 URI』经常会发生变化，这样做将会让程序更加灵活。
    - 全局修改路由的调用
      - 全局搜索关键字 `topics.show`, 然后手动一个个修改，主要由两种链接，一种是控制器里的跳转，例如：
        ```
        return redirect()->route('topics.show', $topic->id)->with('success', '成功创建话题！');
        ```
        修改为
        ```
        return redirect()->to($topic->link())->with('success', '成功创建话题！');
        ```
      - 另一种是模板里的，例如：
        ```
        <a href="{{ route('topics.show', [$topic->id]) }}" title="{{ $topic->title }}">
            {{ $topic->title }}
        </a>
        ```
        修改为
        ```
        <a href="{{ $topic->link() }}" title="{{ $topic->title }}">
            {{ $topic->title }}
        </a>
        ```
  - 6.强制跳转(永久重定向 301) 
    - 为啥强制跳转 (永久重定向 301) 
      - 当话题有 Slug 的时候，我们希望用户一直使用正确的、带着 Slug 的链接来访问。我们可以在控制器中对 Slug 进行判断，当条件允许的时候，我们将发送 301 永久重定向指令给浏览器，跳转到带 Slug 的链接
    - 在 app/Http/Controllers/TopicsController.php 中：
      ```
      public function show(Request $request, Topic $topic)
      {
          // 如果话题的 Slug 字段不为空；并且话题 Slug 不等于请求的路由参数 Slug
          if ( ! empty($topic->slug) && $topic->slug != $request->slug) {
              return redirect($topic->link(), 301);
          }

          return view('topics.show', compact('topic'));
      }
      ```
### 6.9 [翻译使用队列（job）](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.配置队列
      - 队列驱动
        - 这些驱动包括：数据库，Beanstalkd，Amazon SQS，Redis，sync(同步模式，也就是说不使用任何队列)
      - 安装 Redis 客户端依赖（将使用 redis 来作为队列驱动）
        ```
        composer require "predis/predis:~1.1"
        ```
      - `.env` 中：
        ```
        QUEUE_CONNECTION=redis
        REDIS_CLIENT=predis
        ```
      - 失败任务
        - 任务超出这个重试次数后，它就会被插入到 failed_jobs 数据表里面
  - 2.生成任务类(job)

    ```
    php artisan make:job TranslateSlug
    ```
    app/Jobs/TranslateSlug.php
    ```
    <?php

    namespace App\Jobs;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\Dispatchable;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Queue\SerializesModels;

    use App\Models\Topic;
    use App\Handlers\SlugTranslateHandler;

    class TranslateSlug implements ShouldQueue
    {
        use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

        protected $topic;

        // 构造函数用来接收 类初始化时的参数，这个参数可有可无，视业务需要而定
        public function __construct(Topic $topic)
        {        
            // 如果这个参数是 Eloquent 模型，SerializesModels 将会只序列化模型的 ID，执行job的时候，再根据 ID 从数据库检查出模型实例
            $this->topic = $topic;
        }

        // handle 方法会在队列任务执行时被调用，调用方法如：dispatch(new TranslateSlug($topic));
        public function handle()
        {
            // 请求百度 API 接口进行翻译
            $slug = app(SlugTranslateHandler::class)->translate($this->topic->title);

            // 如果将来是在模型观察器中「分发job任务」
            // 为了避免模型监控器「死循环调用」，任务里不能再有模型的操作，我们使用 DB 类直接对数据库进行操作
            // 否则会陷入调用死循环 —— 模型监控器分发任务，任务触发模型监控器，模型监控器再次分发任务，任务再次触发模型监控器…. 死循环
            \DB::table('topics')->where('id', $this->topic->id)->update(['slug' => $slug]);       
        }
    }
    ```
    - 注意：job任务类，尽量用 DB 类来操作操作，避免「模型观察器死循环」。
  - 3.任务分发，在 app/Observers/TopicObserver.php 中分发：
    ```
    public function saving(Topic $topic)
    {
        // XSS 过滤
        $topic->body = clean($topic->body, 'user_topic_body');

        // 生成话题摘录
        $topic->excerpt = make_excerpt($topic->body);

        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $topic->slug) {

            // 推送任务到队列
            dispatch(new TranslateSlug($topic));
        }
    }
    ```
    **问题：**以上代码有问题，因为分发任务 `dispatch(new TranslateSlug($topic));` 需要传一个 $topic 实例参数，而saving()的时候，$topic->id 还没生成呢，因此正确的做事是在 saved() 中分发任务，此时 $topic->id 已经生成。正确代码如下：
    ```
    // 数据写入数据库之前
    public function saving(Topic $topic)
    {
        // XSS过滤：使用「HTMLPurifier扩展」的 clean() 方法过滤用户提交内容，第二个参数是 config/purifier 中的配置项
        $topic->body = clean($topic->body, 'user_topic_body');

        // 生成话题摘录
        $topic->excerpt = make_excerpt($topic->body);
        
    }

    public function saved(Topic $topic)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $topic->slug) {
            // $topic->slug = app(SlugTranslateHandler::class)->translate($topic->title);

            // 模型观察器 分发任务 到队列。
            // 模型观察器分发任务，任务handle()中不能再有模型操作，否则又会触发模型观察器分发任务，从而进入死循环
            dispatch(new TranslateSlug($topic));
        }
    }
    ```
  - 4.队列监控 (命令行方式)
    - 在命令行启动队列系统，队列在启动完成后会进入监听状态：
    ```
    php artisan queue:listen
    ```
  - 5.队列监控（[Horizon](https://learnku.com/docs/laravel/6.x/horizon/5190)）
    - Horizon 简介
      - 是 Laravel 生态圈里的一员，为 Laravel Redis 队列提供了一个漂亮的仪表板，允许我们很方便地查看和管理 Redis 队列任务执行的情况。
    - 安装 Horizon
      ```
      composer require "laravel/horizon:~3.1"
      ```
    - 发布资源
      ```
      php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"
      ```
    - 打开仪表盘：larabbs.test/horizon 
    - 启动：Horizon 是一个监控程序，需要常驻运行，我们可以通过以下命令启动：
      ```
      php artisan horizon
      ```
      使用 horizon 命令来启动队列系统和任务监控，无需使用 queue:listen
  - 6.线上部署须知（进程管理工具）
    - 开发环境中：为了测试方便，直接在命令行里调用 artisan horizon 进行队列监控
    - 生产环境中：需要配置一个**进程管理工具**来监控 artisan horizon 命令的执行，以便在其意外退出时自动重启。当服务器部署新代码时，需要终止当前 Horizon 主进程，然后通过进程管理工具来重启，从而使用最新的代码。
    - 简而言之，生产环境下使用队列需要注意以下两个问题：
      - 1.使用 **Supervisor** 进程工具进行管理，配置和使用请参照 [文档](https://learnku.com/docs/laravel/6.x/horizon/5190#Supervisor-%E9%85%8D%E7%BD%AE) 进行配置；
      - 2.每一次部署代码时，需 `artisan horizon:terminate` 然后再 `artisan horizon` 重新加载代码。
    - 线上部署的话，还要注意一个权限控制的问题
  - 7.为了开发方便，将开发环境的队列驱动改回 sync 同步模式，就是说不使用任何队列，实时执行：
    .env
    ```
    QUEUE_CONNECTION=sync
    ```
## 7 [帖子回复](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 7.1 [生成回复假数据](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.代码生成 (用代码生成器)
    ```
    php artisan make:scaffold Reply --schema="topic_id:integer:unsigned:default(0):index,user_id:bigInteger:unsigned:default(0):index,content:text"
    ```
    对应的迁移文件如下：
    ```
    public function up()
    {
      Schema::create('replies', function(Blueprint $table) {
              $table->increments('id');
              $table->integer('topic_id')->unsigned()->default(0)->index();
              $table->bigInteger('user_id')->unsigned()->default(0)->index();
              $table->text('content');
              $table->timestamps();
          });
    }
    ```
  - 2.数据模型
    - 修改 app/Models/Reply.php
      ```
      class Reply extends Model
      {
          protected $fillable = ['content'];

          public function topic()
          {
              return $this->belongsTo(Topic::class);
          }

          public function user()
          {
              return $this->belongsTo(User::class);
          }
      }
      ```
    - 修改 app/Models/Topic.php
      ```
      public function replies()
      {
          return $this->hasMany(Reply::class);
      }
      ```
    - 修改 app/Models/User.php
      ```
      public function replies()
      {
          return $this->hasMany(Reply::class);
      }
      ```
  - 3.填充假数据
    - 1.定制模型工厂 database/factories/ReplyFactory.php
      ```
      use Faker\Generator as Faker;

      $factory->define(App\Models\Reply::class, function (Faker $faker) {
          // 随机取一个月以内的时间
          $time = $faker->dateTimeThisMonth();

          return [
              'content' => $faker->sentence(),
              'created_at' => $time,
              'updated_at' => $time,
          ];
      });
      ```
    - 2.填充文件 database/seeds/RepliesTableSeeder.php
      ```
      public function run()
      {
          // 所有用户 ID 数组，如：[1,2,3,4]
          $user_ids = User::all()->pluck('id')->toArray();

          // 所有话题 ID 数组，如：[1,2,3,4]
          $topic_ids = Topic::all()->pluck('id')->toArray();

          // 获取 Faker 实例
          $faker = app(Faker\Generator::class);

          $replies = factory(Reply::class)
                          ->times(1000)
                          ->make()
                          ->each(function ($reply, $index)
                              use ($user_ids, $topic_ids, $faker)
          {
              // 从用户 ID 数组中随机取出一个并赋值
              $reply->user_id = $faker->randomElement($user_ids);

              // 话题 ID，同上
              $reply->topic_id = $faker->randomElement($topic_ids);
          });

          // 将数据集合转换为数组，并插入到数据库中
          Reply::insert($replies->toArray());
      }
      ```
    - 3.注册填充文类 database/seeds/DatabaseSeeder.php
      ```
      public function run()
      {
          $this->call(UsersTableSeeder::class);
          $this->call(TopicsTableSeeder::class);
          $this->call(RepliesTableSeeder::class);
      }
      ```
    - 4.执行填充假数据
      ```
      php artisan migrate:refresh --seed
      ```
### 7.2 [回复列表](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 0.清理门户
    ```
    rm -rf resources/views/replies/
    ```
  - 1.话题下的回复列表
    - resources/views/topics/show.blade.php
      ```
      {{-- 用户回复列表 --}}
      <div class="card topic-reply mt-4">
          <div class="card-body">
              @includeWhen(Auth::check(), 'topics._reply_box', ['topic' => $topic])
              @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->get()])
          </div>
      </div>
      ```
      - 注意：@includeWhen($boolean, 'view.name', ['some' => 'data']) 『视条件加载子模板』

        ```
        @includeWhen(Auth::check(), 'topics._reply_box', ['topic' => $topic])
        ```
        话题回复功能我们只允许登录用户使用
      - 注意 wiht() 预加载，因为在话题下的回复列表中，要显示回复的「用户名」
        ```
        @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->get()])
        ``` 
    - 生成子视图
      ```
      touch resources/views/topics/_reply_box.blade.php
      touch resources/views/topics/_reply_list.blade.php
      ```
    - 编写 resources/views/topics/_reply_list.blade.php
      ```
      <ul class="list-unstyled">
        @foreach ($replies as $index => $reply)
          <li class=" media" name="reply{{ $reply->id }}" id="reply{{ $reply->id }}">
            <div class="media-left">
              <a href="{{ route('users.show', [$reply->user_id]) }}">
                <img class="media-object img-thumbnail mr-3" alt="{{ $reply->user->name }}" src="{{ $reply->user->avatar }}" style="width:48px;height:48px;" />
              </a>
            </div>

            <div class="media-body">
              <div class="media-heading mt-0 mb-1 text-secondary">
                <a href="{{ route('users.show', [$reply->user_id]) }}" title="{{ $reply->user->name }}">
                  {{ $reply->user->name }}
                </a>
                <span class="text-secondary"> • </span>
                <span class="meta text-secondary" title="{{ $reply->created_at }}">{{ $reply->created_at->diffForHumans() }}</span>

                {{-- 回复删除按钮 --}}
                <span class="meta float-right ">
                  <a title="删除回复">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </span>
              </div>
              <div class="reply-content text-secondary">
                {!! $reply->content !!}
              </div>
            </div>
          </li>

          @if ( ! $loop->last)
            <hr>
          @endif

        @endforeach
      </ul>
      ```
      - 注意：此处回复内容显示时使用 {!! !!} Blade 表达式，意味着非转义打印数据，这是一个安全隐患，我们将在『发布回复』功能的开发中处理此问题。
    - 样式 resources/sass/app.scss
      ```
      /* 回复列表 */
      .topic-reply {
          a {
              color: inherit;
          }
          .meta {
              font-size: .9em;
              color: #b3b3b3;
          }
      }
      ```
  - 2.个人页面下的回复列表
    - resources/views/users/show.blade.php
      ```
      {{-- 用户发布的内容 --}}
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="{{ route('users.show', $user->id) }}" class="nav-link bg-transparent {{ active_class(if_query('tab', null)) }}">
                Ta 的话题
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('users.show', [$user->id, 'tab' => 'replies']) }}" class="nav-link bg-transparent {{ active_class(if_query('tab', 'replies')) }}">
                Ta 的回复
              </a>
            </li>
          </ul>
          @if (if_query('tab', 'replies'))
            @include('users._replies', ['replies' => $user->replies()->with('topic')->recent()->paginate(5)])
          @else
            @include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
          @endif
        </div>
      </div>
      ```
      - recent() 方法在数据模型基类 app/Models/Model.php 中定义，并且使用了 本地作用域 的方式进行定义
      - with('topic') 预加载，因为在个人页面的回复列表中，要显示回复的是哪一个 帖子$topic，所以预加载 $topic
        ```
        @include('users._replies', ['replies' => $user->replies()->with('topic')->recent()->paginate(5)])
        ```
    - 子视图 resources/views/users/_replies.blade.php
      ```
      @if (count($replies))
        <ul class="list-group mt-4 border-0">
          @foreach ($replies as $reply)
            <li class="list-group-item pl-2 pr-2 border-right-0 border-left-0 @if($loop->first) border-top-0 @endif">
              <a href="{{ $reply->topic->link(['#reply' . $reply->id]) }}">
                {{ $reply->topic->title }}
              </a>

              <div class="reply-content text-secondary mt-2 mb-2">
                {!! $reply->content !!}
              </div>

              <div class="text-secondary" style="font-size:0.9em;">
                <i class="far fa-clock"></i> 回复于 {{ $reply->created_at->diffForHumans() }}
              </div>
            </li>
          @endforeach
        </ul>

      @else
        <div class="empty-block">暂无数据 ~_~ </div>
      @endif

      {{-- 分页 --}}
      <div class="mt-4 pt-1">
        {!! $replies->appends(Request::except('page'))->render() !!}
      </div>
      ```
      - 注意：$topic->link()
        ```
        <a href="{{ $reply->topic->link(['#reply' . $reply->id]) }}">
        ```
      - 注意：appends() 方法可以使 URI 中的请求参数得到继承。
        ```
        {!! $replies->appends(Request::except('page'))->render() !!}
        ```
### 7.3 [发表回复](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 0.『视条件加载子模板』 resources/views/topics/show.blade.php
    ```
    {{-- 用户回复列表 --}}
    <div class="card topic-reply mt-4">
        <div class="card-body">
            @includeWhen(Auth::check(), 'topics._reply_box', ['topic' => $topic])
            @include('topics._reply_list', ['replies' => $topic->replies()->with('user')->get()])
        </div>
    </div>
    ```
  - 1.子模板 resources/views/topics/_reply_box.blade.php
    ```
    @include('shared._errors')

    <div class="reply-box">
      <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
        <div class="form-group">
          <textarea class="form-control" rows="3" placeholder="分享你的见解~" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share mr-1"></i> 回复</button>
      </form>
    </div>
    <hr>
    ```
  - 2.整理路由 routes/web.php
    ```
    Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]); // 只保留2个方法
    ```
  - 3.控制器 app/Http/Controllers/RepliesController.php
    ```
    public function __construct()
    {
        $this->middleware('auth');
    }

		public function store(ReplyRequest $request, Reply $reply)
		{
				$reply->content = $request->content;
				$reply->user_id = Auth::id();
				$reply->topic_id = $request->topic_id;
				$reply->save();

				return redirect()->to($reply->topic->link())->with('success', '评论创建成功！');
		}

		public function destroy(Reply $reply)
		{
				$this->authorize('destroy', $reply);
				$reply->delete();

				return redirect()->to($reply->topic->link())->with('success', '评论删除成功！');
		}
    ```
  - 4.表单验证 app/Http/Requests/ReplyRequest.php
    ```
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }
    ```
  - 5.话题回复数 app/Observers/ReplyObserver.php
    ```
    public function created(Reply $reply)
    {
        // 方法一：自增。不建议用此法
        // $reply->topic->increment('reply_count', 1);

        // 方法二：先计算总数，再赋值、保存。推荐此法
        $reply->topic->reply_count = $reply->topic->replies()->count();
        $reply->topic->save();
    }
    ```
  - 6.处理 XSS 问题（HTMLPurifier）
    - 在显示回复内容时，使用了 Blade 模板的 {!! !!} 『非转义打印』语法，这会是一个 XSS 安全威胁。
    - 处理 XSS 问题，在 app/Observers/ReplyObserver.php 中：
      ```
      public function creating(Reply $reply)
      {
          // 使用「HTMLPurifier扩展」的 clean() 方法过滤用户提交内容，第二个参数是 config/purifier 中的配置项
          $reply->content = clean($reply->content, 'user_topic_body');
      }
      ```
### 7.4 [消息通知(Database通知)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.准备数据库
    生成迁移文件
    ```    
    php artisan notifications:table
    ```
    执行迁移，生成 notification 表
    ```
    php artisan migrate 
    ```
  - 2.在 users 表中新增 `notification_count` 字段，表示用户有多少「未读通知」
    ```
    php artisan make:migration add_notification_count_to_users_table --table=users
    ```
    ```
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('notification_count')->unsigned()->default(0);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('notification_count');
        });
    }
    ```
    再次执行迁移
    ```
    php artisan migrate
    ```
  - 3.生成通知类
    ```
    php artisan make:notification TopicReplied
    ```
  - 4.编写通知类（通知频道） app/Notifications/TopicReplied.php
    ```
    class TopicReplied extends Notification
    {
        use Queueable;

        public $reply;

        public function __construct(Reply $reply)
        {
            // 注入回复实体，方便 toDatabase 方法中的使用
            $this->reply = $reply;
        }

        public function via($notifiable)
        {
            // 开启通知的频道
            return ['database'];
        }

        public function toDatabase($notifiable)
        {
            $topic = $this->reply->topic;
            $link =  $topic->link(['#reply' . $this->reply->id]);

            // 存入数据库里的数据
            return [
                'reply_id' => $this->reply->id,
                'reply_content' => $this->reply->content,
                'user_id' => $this->reply->user->id,
                'user_name' => $this->reply->user->name,
                'user_avatar' => $this->reply->user->avatar,
                'topic_link' => $link,
                'topic_id' => $topic->id,
                'topic_title' => $topic->title,
            ];
        }
    }
    ```
    - **通知频道**
      - Laravel 自带的有数据库、邮件、短信（通过 Nexmo）以及 Slack。
      - 每个通知类都有个 via() 方法，它决定了通知在哪个频道上发送
  - 5.触发通知 app/Observers/ReplyObserver.php
    ```
    use App\Notifications\TopicReplied;
    class ReplyObserver
    {
        public function created(Reply $reply)
        {
            $reply->topic->reply_count = $reply->topic->replies->count();
            $reply->topic->save();

            // 通知话题作者有新的评论
            $reply->topic->user->notify(new TopicReplied($reply));
        }
        ...
    }
    ```
    - 默认的 `User` 模型中使用了 trait —— Notifiable，它包含着一个可以用来发通知的方法 `notify()` ，此方法接收一个通知实例做参数。
  - 6.重写 notify() 方法，
    - 虽然 notify() 已经很方便，但是我们还需要对其进行定制
    - 我们希望每一次在调用 $user->notify() 时，顺便做点别的事情，如：自动将 users 表里的 notification_count +1 ，这样我们就能跟踪用户未读通知了。
    - 在 app/Models/User.php中：
      ```
      use Auth;

      class User extends Authenticatable implements MustVerifyEmailContract
      {
          use MustVerifyEmailTrait;

          use Notifiable {
              notify as protected laravelNotify;
          }
          public function notify($instance)
          {
              // 如果要通知的人是当前用户，就不必通知了！
              if ($this->id == Auth::id()) {
                  return;
              }

              // 只有数据库类型通知才需提醒，其他频道如 Email、短信、Slack 都略过
              if (method_exists ($instance, 'toDatabase')) {
                  $this->increment('notification_count', 1);
              }

              $this->laravelNotify($instance);
          }
          ...
      }
      ```
### 7.5 [消息列表](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.新建路由 routes/web.php
    ```
    Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);
    ```
  - 2.顶部导航入口
    ```
    <li class="nav-item notification-badge">
      <a class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white" href="{{ route('notifications.index') }}">
        {{ Auth::user()->notification_count }}
      </a>
    </li>
    ```
    - 样式 resources/sass/app.scss
      ```
      /* 消息通知 */
      .notification-badge {
        .badge {
          font-size: 12px;
          margin-top: 14px;
        }

        .badge-secondary {
          background-color: #EBE8E8;
        }

        .badge-hint {
          background-color: #d15b47 !important;
        }
      }
      ```
  - 3.控制器 
    ```
    php artisan make:controller NotificationsController
    ```
    app/Http/Controllers/NotificationsController.php
    ```
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // 获取登录用户的所有通知
        $notifications = Auth::user()->notifications()->paginate(20);
        // 标记为已读，未读数量清零
        Auth::user()->markAsRead();
        return view('notifications.index', compact('notifications'));
    }
    ```
  - 4.模型方法 markAsRead()： app/Models/User.php
    ```
    public function markAsRead()
    {
        $this->notification_count = 0;
        $this->save();
        $this->unreadNotifications->markAsRead();
    }
    ```
  - 5.视图 resources/views/notifications/index.blade.php
    ```
    @extends('layouts.app')

    @section('title', '我的通知')

    @section('content')
      <div class="container">
        <div class="col-md-10 offset-md-1">
          <div class="card ">

            <div class="card-body">

              <h3 class="text-xs-center">
                <i class="far fa-bell" aria-hidden="true"></i> 我的通知
              </h3>
              <hr>

              @if ($notifications->count())

                <div class="list-unstyled notification-list">
                  @foreach ($notifications as $notification)
                    @include('notifications.types._' . Str::snake(class_basename($notification->type)))
                  @endforeach

                  {!! $notifications->render() !!}
                </div>

              @else
                <div class="empty-block">没有消息通知！</div>
              @endif

            </div>
          </div>
        </div>
      </div>
    @stop
    ```
    - 通知数据库表的 `Type` 字段保存的是通知类全称，如 ：App\Notifications\TopicReplied 。 
    - Str::snake(class_basename($notification->type)) 渲染以后会是 —— `topic_replied`。`class_basename()` 方法会取到 `TopicReplied`，Laravel 的辅助方法 Str::snake() 会字符串格式化为**下划线命名**。
    - 子视图：resources/views/notifications/types/_topic_replied.blade.php
      ```
      <li class="media @if ( ! $loop->last) border-bottom @endif">
        <div class="media-left">
          <a href="{{ route('users.show', $notification->data['user_id']) }}">
            <img class="media-object img-thumbnail mr-3" alt="{{ $notification->data['user_name'] }}" src="{{ $notification->data['user_avatar'] }}" style="width:48px;height:48px;" />
          </a>
        </div>

        <div class="media-body">
          <div class="media-heading mt-0 mb-1 text-secondary">
            <a href="{{ route('users.show', $notification->data['user_id']) }}">{{ $notification->data['user_name'] }}</a>
            评论了
            <a href="{{ $notification->data['topic_link'] }}">{{ $notification->data['topic_title'] }}</a>

            <span class="meta float-right" title="{{ $notification->created_at }}">
              <i class="far fa-clock"></i>
              {{ $notification->created_at->diffForHumans() }}
            </span>
          </div>
          <div class="reply-content">
            {!! $notification->data['reply_content'] !!}
          </div>
        </div>
      </li>
      ```
      - $notification->data 拿到在通知类 toDatabase() 里构建的数组。
### 7.6 [邮件通知](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.[邮箱配置](https://learnku.com/courses/laravel-intermediate-training/6.x/mail-notification/5583#a96fb2) `.env` 中：
    ```
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.qq.com
    MAIL_PORT=25
    MAIL_USERNAME=xxxxxxxxxxxxxx@qq.com
    MAIL_PASSWORD=xxxxxxxxx
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=xxxxxxxxxxxxxx@qq.com
    MAIL_FROM_NAME=LaraBBS
    ```
  - 2.添加邮件通知频道 app/Notifications/TopicReplied.php
    ```
     public function via($notifiable)
    {
        // 开启通知的频道
        return ['database', 'mail'];
    }
    public function toMail($notifiable)
    {
        $url = $this->reply->topic->link(['#reply' . $this->reply->id]);

        return (new MailMessage)
                    ->line('你的话题有新回复！')
                    ->action('查看回复', $url);
    }
    ```
  - 3.[使用队列发送邮件](https://learnku.com/courses/laravel-intermediate-training/6.x/mail-notification/5583#9386ac)
    - TopicReplied.php 中把
      ```
      class TopicReplied extends Notification
      ```
      修改为：
      ```
      class TopicReplied extends Notification implements ShouldQueue
      ```
    - 测试下队列
      - 在 `.env` 中开启队列驱动 
        ```
        QUEUE_CONNECTION=redis
        ```
      - 运行队列监控
        ```
        php artisan horizon
        ```
      - 测试成功后，在 `` 中改为原来的 sync 实时模式：
        ```
        QUEUE_CONNECTION=sync
        ```
### 7.7 [删除回复](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.删除按钮 resources/views/topics/_reply_list.blade.php
    ```
    {{-- 回复删除按钮 --}}
    @can('destroy', $reply)
      <span class="meta float-right">
        <form action="{{ route('replies.destroy', $reply->id) }}"
            onsubmit="return confirm('确定要删除此评论？');"
            method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-default btn-xs pull-left text-secondary">
            <i class="far fa-trash-alt"></i>
          </button>
        </form>
      </span>
    @endcan
    ```
  - 2.控制器处理
    ```
    public function destroy(Reply $reply)
    {
        $this->authorize('destroy', $reply);
        $reply->delete();

        return redirect()->to($reply->topic->link())->with('success', '评论删除成功！');
    }
    ```
  - 3.授权策略 app/Policies/ReplyPolicy.php
    ```
    public function destroy(User $user, Reply $reply)
    {
        return $user->isAuthorOf($reply)  || $user->isAuthorOf($reply->topic);
    }
    ```
  - 4.删除回复时更新回复数 app/Observers/ReplyObserver.php
    ```
    public function created(Reply $reply)
    {
        // 方法一：自增。不建议用此法
        // $reply->topic->increment('reply_count', 1);

        // 方法二：先计算总数，再赋值、保存。推荐此法
        // $reply->topic->reply_count = $reply->topic->replies()->count();
        // $reply->topic->save();
        $reply->topic->updateReplyCount();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }

    public function deleted(Reply $reply)
    {
        // $reply->topic->reply_count = $reply->topic->replies()->count();
        // $reply->save();
        $reply->topic->updateReplyCount();
    }
    ```
    - 抽象出话题数更新函数：app/Models/Topic.php
      ```
      public function updateReplyCount()
      {
          $this->reply_count = $this->replies->count();
          $this->save();
      }
      ```
  - 5.话题连带删除(模型观察器中慎用模型，用DB) app/Observers/TopicObserver.php
    ```
    // 删除话题时，连带删除话题的回复
    // 在模型监听器中，数据库操作需避免再次触发 Eloquent 事件，以免造成联动逻辑冲突。所以这里我们使用了 DB 类进行操作。
    public function deleted(Topic $topic)
    {
        \DB::table('replies')->where('topic_id', $topic->id)->delete();
    }
    ```
## 8 [角色权限和后台管理](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 8.1 [多角色用户权限](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.安装 [Laravel-permission](https://github.com/spatie/laravel-permission) 扩展包
    ```
    composer require "spatie/laravel-permission:~3.0"
    ```
    发布文件(生成迁移文件和配置文件)
    ```
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
    ```
    执行迁移
    ```
    php artisan migrate
    ```
  - 2.加载 HasRoles
    - 我们还需在 User 中使用 laravel-permission 提供的 Trait —— HasRoles，此举能让我们获取到扩展包提供的所有权限和角色的操作方法。
    app/Models/User.php
    ```
    use Spatie\Permission\Traits\HasRoles;

    class User extends Authenticatable implements MustVerifyEmailContract
    {
        use HasRoles;
        ...
    }
    ```
  - 3.初始化角色和权限
    用迁移文件来初始化数据
    ```
    php artisan make:migration seed_roles_and_permissions_data
    ```
    ```
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    use Illuminate\Database\Eloquent\Model;
    use Spatie\Permission\Models\Role;
    use Spatie\Permission\Models\Permission;

    class SeedRolesAndPermissionsData extends Migration
    {
        public function up()
        {
            // 需清除缓存，否则会报错
            app(Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

            // 先创建权限
            Permission::create(['name' => 'manage_contents']);
            Permission::create(['name' => 'manage_users']);
            Permission::create(['name' => 'edit_settings']);

            // 创建站长角色，并赋予权限
            $founder = Role::create(['name' => 'Founder']);
            $founder->givePermissionTo('manage_contents');
            $founder->givePermissionTo('manage_users');
            $founder->givePermissionTo('edit_settings');

            // 创建管理员角色，并赋予权限
            $maintainer = Role::create(['name' => 'Maintainer']);
            $maintainer->givePermissionTo('manage_contents');
        }

        public function down()
        {
            // 需清除缓存，否则会报错
            app(Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

            // 清空所有数据表数据
            $tableNames = config('permission.table_names');

            Model::unguard();
            DB::table($tableNames['role_has_permissions'])->delete();
            DB::table($tableNames['model_has_roles'])->delete();
            DB::table($tableNames['model_has_permissions'])->delete();
            DB::table($tableNames['roles'])->delete();
            DB::table($tableNames['permissions'])->delete();
            Model::reguard();
        }
    }
    ```
    - 为了测试的方便，我们需要在生成用户填充数据以后，为 1 号和 2 号用户分别指派角色，修改 run() 方法 ：
      database/seeds/UsersTableSeeder.php
      ```
      public function run()
      {
          ...
          // 初始化用户角色，将 1 号用户指派为『站长』
          $user->assignRole('Founder');

          // 将 2 号用户指派为『管理员』
          $user = User::find(2);
          $user->assignRole('Maintainer');
      }
      ```
  - 4.刷新数据库
    ```
    php artisan migrate:refresh --seed
    ```
  - 5.关于 [laravel-permission 的一些简单用法](https://learnku.com/courses/laravel-intermediate-training/6.x/multi-role-user-rights/5586#294419)
    ```
    $role = Role::create(['name' => 'Founder']);
    $role->givePermissionTo('manage_contents');
    $user->assignRole('Founder');
    $user->assignRole('writer', 'admin');
    $user->assignRole(['writer', 'admin']);
    $user->hasRole('Founder');
    $user->hasAnyRole(Role::all());
    $user->hasAllRoles(Role::all());
    $user->can('manage_contents');
    $role->hasPermissionTo('manage_contents');
    $user->givePermissionTo('manage_contents');
    $user->getDirectPermissions()
    ```
### 8.2 [站点权限部署(sudo-su用户切换)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.内容管理权限 app/Policies/Policy.php
    ```
    public function before($user, $ability)
    {
          // 如果用户拥有管理内容权限的话，即授权通过
          if ($user->can('manage_contents')) {
              return true;
          }
    }
    ```
    - 返回 true 是直接通过授权；
    - 返回 false，会拒绝用户所有的授权；
    - 如果返回的是 null，则通过其它的策略方法来决定授权通过与否。
  - 2.用户切换工具 sudo-su
    - 2.1 安装
      ```
      composer require "viacreative/sudo-su:~1.1"
      ```
    - 2.2 添加注册 Provider
      我们只在开发环境中加载此扩展包：app/Providers/AppServiceProvider.php
      ```
      public function register()
      {
          if (app()->isLocal()) {
              $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
          }
      }
      ```
    - 2.3 发布资源文件
      ```
      php artisan vendor:publish --provider="VIACreative\SudoSu\ServiceProvider"
      ```
    - 2.4 修改配置文件
      ```
      <?php

      return [

          // 允许使用的顶级域名
          'allowed_tlds' => ['dev', 'local', 'test'],

          // 用户模型
          'user_model' => App\Models\User::class
      ];
      ```
      - Sudosu 为了避免开发者在生产环境下误开启此功能，在配置选项 allowed_tlds 里做了域名后缀的限制，tld 为 Top Level Domain 的简写。此处因我们的项目域名为 larabbs.test，故将 test 域名后缀添加到 allowed_tlds 数组中。
    - 2.5 模板植入 resources/views/layouts/app.blade.php
      ```
      @if (app()->isLocal())
        @include('sudosu::user-selector')
      @endif

      <!-- Scripts -->
      ```
  - 3.Horizon 访问权限
    - Horizon 控制面板页面的路由是 /horizon ，默认只能在 local 环境中访问仪表盘。我们可以使用 Horizon::auth 方法定义更具体的访问策略。auth 方法能够接受一个回调函数，此回调函数需要返回 true 或 false ，从而确认当前用户是否有权限访问 Horizon 仪表盘。接下来我们定义 /horizon 的访问权限，只有 站长 才有权限查看：
    app/Providers/AuthServiceProvider.php
    ```
    public function boot()
    {
        ...
        \Horizon::auth(function ($request) {
            // 是否是站长
            return \Auth::user()->hasRole('Founder');
        });
    }
    ```
    测试一下，一般用户访问会返回 403 报错页面，只有当我们使用 ID 为 1 的 Summer 用户访问时，才能顺利显示页面：
### 8.3 [用户后台-初始化（Laravel Administrator）](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.安装 [Laravel Administrator](https://learnku.com/courses/laravel-intermediate-training/6.x/admin-dashboard/5588)
    ```
    composer require "summerblue/administrator:6.*"
    ```
  - 2.发布资源
    ```
    php artisan vendor:publish --provider="Frozennode\Administrator\AdministratorServiceProvider"
    ```
  - 3.配置讲解 config/administrator.php
    ```
    <?php
    return array(

        // 后台的 URI 入口
        'uri' => 'admin',

        // 后台专属域名，没有的话可以留空
        'domain' => '',

        // 应用名称，在页面标题和左上角站点名称处显示
        'title' => env('APP_NAME', 'Laravel'),

        // 模型配置信息文件存放目录
        'model_config_path' => config_path('administrator'),

        // 配置信息文件存放目录
        'settings_config_path' => config_path('administrator/settings'),

        /*
        * 后台菜单数组，多维数组渲染结果为多级嵌套菜单。
        *
        * 数组里的值有三种类型：
        * 1. 字符串 —— 子菜单的入口，不可访问；
        * 2. 模型配置文件 —— 访问 `model_config_path` 目录下的模型文件，如 `users` 访问的是 `users.php` 模型配置文件；
        * 3. 配置信息 —— 必须使用前缀 `settings.`，对应 `settings_config_path` 目录下的文件，如：默认设置下，
        *              `settings.site` 访问的是 `administrator/settings/site.php` 文件
        * 4. 页面文件 —— 必须使用前缀 `page.`，如：`page.pages.analytics` 对应 `administrator/pages/analytics.php`
        *               或者是 `administrator/pages/analytics.blade.php` ，两种后缀名皆可
        *
        * 示例：
        *  [
        *      'users',
        *      'E-Commerce' => ['collections', 'products', 'product_images', 'orders'],
        *      'Settings'  => ['settings.site', 'settings.ecommerce', 'settings.social'],
        *      'Analytics' => ['E-Commerce' => 'page.pages.analytics'],
        *  ]
        */
        'menu' => [
            '用户与权限' => [
                'users',
            ],
        ],

        /*
        * 权限控制的回调函数。
        *
        * 此回调函数需要返回 true 或 false ，用来检测当前用户是否有权限访问后台。
        * `true` 为通过，`false` 会将页面重定向到 `login_path` 选项定义的 URL 中。
        */
        'permission' => function () {
            // 只要是能管理内容的用户，就允许访问后台
            return Auth::check() && Auth::user()->can('manage_contents');
        },

        /*
        * 使用布尔值来设定是否使用后台主页面。
        *
        * 如值为 `true`，将使用 `dashboard_view` 定义的视图文件渲染页面；
        * 如值为 `false`，将使用 `home_page` 定义的菜单条目来作为后台主页。
        */
        'use_dashboard' => false,

        // 设置后台主页视图文件，由 `use_dashboard` 选项决定
        'dashboard_view' => '',

        // 用来作为后台主页的菜单条目，由 `use_dashboard` 选项决定，菜单指的是 `menu` 选项
        'home_page' => 'users',

        // 右上角『返回主站』按钮的链接
        'back_to_site_path' => '/',

        // 当选项 `permission` 权限检测不通过时，会重定向用户到此处设置的路径
        'login_path' => 'login',

        // 允许在登录成功后使用 Session::get('redirect') 将用户重定向到原本想要访问的后台页面
        'login_redirect_key' => 'redirect',

        // 控制模型数据列表页默认的显示条目
        'global_rows_per_page' => 20,

        // 可选的语言，如果不为空，将会在页面顶部显示『选择语言』按钮
        'locales' => [],
    );
    ```
  - 4.创建必要文件夹
    Administrator 会监测 `settings_config_path` 和 `model_config_path` 选项目录是否能正常访问，否则会报错，故我们先使用以下命令新建目录
    ```
    mkdir -p config/administrator/settings
    touch config/administrator/settings/.gitkeep
    ```
    在空文件夹中放置 .gitkeep 保证了 Git 会将此文件夹纳入版本控制器中。
  - 5.导航入口 resources/views/layouts/_header.blade.php
    ```
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      @can('manage_contents')
        <a class="dropdown-item" href="{{ url(config('administrator.uri')) }}">
          <i class="fas fa-tachometer-alt mr-2"></i>
          管理后台
        </a>
        <div class="dropdown-divider"></div>
      @endcan
      <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
        <i class="far fa-user mr-2"></i>
        个人中心
      </a>
    ```
### 8.4 [用户后台-用户](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.用户模型配置users : config/administrator/users.php
    ```
    <?php
    use App\Models\User;

    return [
        // 页面标题
        'title'   => '用户',

        // 模型单数，用作页面『新建 $single』
        'single'  => '用户',

        // 数据模型，用作数据的 CRUD
        'model'   => User::class,

        // 设置当前页面的访问权限，通过返回布尔值来控制权限。
        // 返回 True 即通过权限验证，False 则无权访问并从 Menu 中隐藏
        'permission'=> function()
        {
            return Auth::user()->can('manage_users');
        },

        // 字段负责渲染『数据表格』，由无数的『列』组成，
        'columns' => [

            // 列的标示，这是一个最小化『列』信息配置的例子，读取的是模型里对应
            // 的属性的值，如 $model->id
            'id',

            'avatar' => [
                // 数据表格里列的名称，默认会使用『列标识』
                'title'  => '头像',

                // 默认情况下会直接输出数据，你也可以使用 output 选项来定制输出内容
                'output' => function ($avatar, $model) {
                    return empty($avatar) ? 'N/A' : '<img src="'.$avatar.'" width="40">';
                },

                // 是否允许排序
                'sortable' => false,
            ],

            'name' => [
                'title'    => '用户名',
                'sortable' => false,
                'output' => function ($name, $model) {
                    return '<a href="/users/'.$model->id.'" target=_blank>'.$name.'</a>';
                },
            ],

            'email' => [
                'title' => '邮箱',
            ],

            'operation' => [
                'title'  => '管理',
                'sortable' => false,
            ],
        ],

        // 『模型表单』设置项
        'edit_fields' => [
            'name' => [
                'title' => '用户名',
            ],
            'email' => [
                'title' => '邮箱',
            ],
            'password' => [
                'title' => '密码',

                // 表单使用 input 类型 password
                'type' => 'password',
            ],
            'avatar' => [
                'title' => '用户头像',

                // 设置表单条目的类型，默认的 type 是 input
                'type' => 'image',

                // 图片上传必须设置图片存放路径
                'location' => public_path() . '/uploads/images/avatars/',
            ],
            'roles' => [
                'title'      => '用户角色',

                // 指定数据的类型为关联模型
                'type'       => 'relationship',

                // 关联模型的字段，用来做关联显示
                'name_field' => 'name',
            ],
        ],

        // 『数据过滤』设置
        'filters' => [
            'id' => [

                // 过滤表单条目显示名称
                'title' => '用户 ID',
            ],
            'name' => [
                'title' => '用户名',
            ],
            'email' => [
                'title' => '邮箱',
            ],
        ],
    ];
    ```
  - 2.修改密码([Eloquent 修改器](https://learnku.com/docs/laravel/6.x/eloquent-mutators/5179))
    app/Models/User.php
    ```
    // Eloquent 修改器
    public function setPasswordAttribute($value)
    {
        // 如果值的长度等于 60，则认为是已经做过加密的情况
        if (strlen($value) != 60) {
            // 这么做，是要排除「修改密码时已经加密过的密码，再加密」
            $value = bcrypt($value);
        }
        $this->attributes['password'] = $value;
    }
    ```
    「修改器」命名规范是 set{属性的驼峰式命名}Attribute，当我们给属性赋值时，如 $user->password = 'password'，该修改器将被自动调用
  - 3.修改器头像([Eloquent 修改器](https://learnku.com/docs/laravel/6.x/eloquent-mutators/5179)) 
    app/Models/User.php
    ```
    public function setAvatarAttribute($path)
    {
        // 如果不是 `http` 子串开头，那就是从后台上传的，需要补全 URL
        if ( ! \Str::startsWith($path, 'http')) {
            $path = config('app.url') . "/uploads/images/avatars/$path";
        }
        $this->attributes['avatar'] = $path;
    }
    ```
### 8.5 [管理后台-角色权限](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改菜单 config/administrator.php
    ```
    'menu' => [
        '用户与权限' => [
            'users',
            'roles',
            'permissions',
        ],
    ],
    ```
  - 2.新建「角色」模型配置 config/administrator/roles.php
    ```
    <?php

    use Spatie\Permission\Models\Role;

    return [
        'title'   => '角色',
        'single'  => '角色',
        'model'   => Role::class,

        'permission'=> function()
        {
            return Auth::user()->can('manage_users');
        },

        'columns' => [
            'id' => [
                'title' => 'ID',
            ],
            'name' => [
                'title' => '标识'
            ],
            'permissions' => [
                'title'  => '权限',
                'output' => function ($value, $model) {
                    $model->load('permissions');
                    $result = [];
                    foreach ($model->permissions as $permission) {
                        $result[] = $permission->name;
                    }

                    return empty($result) ? 'N/A' : implode(' | ', $result);
                },
                'sortable' => false,
            ],
            'operation' => [
                'title'  => '管理',
                'output' => function ($value, $model) {
                    return $value;
                },
                'sortable' => false,
            ],
        ],

        'edit_fields' => [
            'name' => [
                'title' => '标识',
            ],
            'permissions' => [
                'type' => 'relationship',
                'title' => '权限',
                'name_field' => 'name',
            ],
        ],

        'filters' => [
            'id' => [
                'title' => 'ID',
            ],
            'name' => [
                'title' => '标识',
            ]
        ],

        // 新建和编辑时的表单验证规则
        'rules' => [
            'name' => 'required|max:15|unique:roles,name',
        ],

        // 表单验证错误时定制错误消息
        'messages' => [
            'name.required' => '标识不能为空',
            'name.unique' => '标识已存在',
        ]
    ];
    ```
  - 3.新建「权限」模型配置
    ```
    <?php

    use Spatie\Permission\Models\Permission;

    return [
        'title'   => '权限',
        'single'  => '权限',
        'model'   => Permission::class,

        'permission' => function () {
            return Auth::user()->can('manage_users');
        },

        // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
        'action_permissions' => [
            // 控制『新建按钮』的显示
            'create' => function ($model) {
                return true;
            },
            // 允许更新
            'update' => function ($model) {
                return true;
            },
            // 不允许删除
            'delete' => function ($model) {
                return false;
            },
            // 允许查看
            'view' => function ($model) {
                return true;
            },
        ],

        'columns' => [
            'id' => [
                'title' => 'ID',
            ],
            'name' => [
                'title'    => '标示',
            ],
            'operation' => [
                'title'    => '管理',
                'sortable' => false,
            ],
        ],

        'edit_fields' => [
            'name' => [
                'title' => '标示（请慎重修改）',

                // 表单条目标题旁的『提示信息』
                'hint' => '修改权限标识会影响代码的调用，请不要轻易更改。'
            ],
            'roles' => [
                'type' => 'relationship',
                'title' => '角色',
                'name_field' => 'name',
            ],
        ],

        'filters' => [
            'name' => [
                'title' => '标示',
            ],
        ],
    ];
    ```
### 8.6 [管理后台-内容](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.修改 menu 选项，新增内容管理子菜单 config/administrator.php
    ```
    'menu' => [
        '用户与权限' => [
            'users',
            'roles',
            'permissions',
        ],
        '内容管理' => [
            'categories',
            'topics',
            'replies',
        ],
    ],
    ```
  - 2.新建分类模型配置文件 config/administrator/categories.php
    ```
    <?php

    use App\Models\Category;

    return [
        'title'   => '分类',
        'single'  => '分类',
        'model'   => Category::class,

        // 对 CRUD 动作的单独权限控制，其他动作不指定默认为通过
        'action_permissions' => [
            // 删除权限控制
            'delete' => function () {
                // 只有站长才能删除话题分类
                return Auth::user()->hasRole('Founder');
            },
        ],

        'columns' => [
            'id' => [
                'title' => 'ID',
            ],
            'name' => [
                'title'    => '名称',
                'sortable' => false,
            ],
            'description' => [
                'title'    => '描述',
                'sortable' => false,
            ],
            'operation' => [
                'title'  => '管理',
                'sortable' => false,
            ],
        ],
        'edit_fields' => [
            'name' => [
                'title' => '名称',
            ],
            'description' => [
                'title' => '描述',
                'type'  => 'textarea',
            ],
        ],
        'filters' => [
            'id' => [
                'title' => '分类 ID',
            ],
            'name' => [
                'title' => '名称',
            ],
            'description' => [
                'title' => '描述',
            ],
        ],
        'rules'   => [
            'name' => 'required|min:1|unique:categories'
        ],
        'messages' => [
            'name.unique'   => '分类名在数据库里有重复，请选用其他名称。',
            'name.required' => '请确保名字至少一个字符以上',
        ],
    ];
    ```
  - 3.新建话题模型配置 config/administrator/topics.php
    ```
    <?php

    use App\Models\Topic;

    return [
        'title'   => '话题',
        'single'  => '话题',
        'model'   => Topic::class,

        'columns' => [

            'id' => [
                'title' => 'ID',
            ],
            'title' => [
                'title'    => '话题',
                'sortable' => false,
                'output'   => function ($value, $model) {
                    return '<div style="max-width:260px">' . model_link($value, $model) . '</div>';
                },
            ],
            'user' => [
                'title'    => '作者',
                'sortable' => false,
                'output'   => function ($value, $model) {
                    $avatar = $model->user->avatar;
                    $value = empty($avatar) ? 'N/A' : '<img src="'.$avatar.'" style="height:22px;width:22px"> ' . $model->user->name;
                    return model_link($value, $model->user);
                },
            ],
            'category' => [
                'title'    => '分类',
                'sortable' => false,
                'output'   => function ($value, $model) {
                    return model_admin_link($model->category->name, $model->category);
                },
            ],
            'reply_count' => [
                'title'    => '评论',
            ],
            'operation' => [
                'title'  => '管理',
                'sortable' => false,
            ],
        ],
        'edit_fields' => [
            'title' => [
                'title'    => '标题',
            ],
            'user' => [
                'title'              => '用户',
                'type'               => 'relationship',
                'name_field'         => 'name',

                // 自动补全，对于大数据量的对应关系，推荐开启自动补全，
                // 可防止一次性加载对系统造成负担
                'autocomplete'       => true,

                // 自动补全的搜索字段
                'search_fields'      => ["CONCAT(id, ' ', name)"],

                // 自动补全排序
                'options_sort_field' => 'id',
            ],
            'category' => [
                'title'              => '分类',
                'type'               => 'relationship',
                'name_field'         => 'name',
                'search_fields'      => ["CONCAT(id, ' ', name)"],
                'options_sort_field' => 'id',
            ],
            'reply_count' => [
                'title'    => '评论',
            ],
            'view_count' => [
                'title'    => '查看',
            ],
        ],
        'filters' => [
            'id' => [
                'title' => '内容 ID',
            ],
            'user' => [
                'title'              => '用户',
                'type'               => 'relationship',
                'name_field'         => 'name',
                'autocomplete'       => true,
                'search_fields'      => array("CONCAT(id, ' ', name)"),
                'options_sort_field' => 'id',
            ],
            'category' => [
                'title'              => '分类',
                'type'               => 'relationship',
                'name_field'         => 'name',
                'search_fields'      => array("CONCAT(id, ' ', name)"),
                'options_sort_field' => 'id',
            ],
        ],
        'rules'   => [
            'title' => 'required'
        ],
        'messages' => [
            'title.required' => '请填写标题',
        ],
    ];
    ```
    - 自定义辅助函数 `model_link 和` `model_admin_link`
      app/helpers.php
      ```
      function model_admin_link($title, $model)
      {
          return model_link($title, $model, 'admin');
      }

      function model_link($title, $model, $prefix = '')
      {
          // 获取数据模型的复数蛇形命名
          $model_name = model_plural_name($model);

          // 初始化前缀
          $prefix = $prefix ? "/$prefix/" : '/';

          // 使用站点 URL 拼接全量 URL
          $url = config('app.url') . $prefix . $model_name . '/' . $model->id;

          // 拼接 HTML A 标签，并返回
          return '<a href="' . $url . '" target="_blank">' . $title . '</a>';
      }

      function model_plural_name($model)
      {
          // 从实体中获取完整类名，例如：App\Models\User
          $full_class_name = get_class($model);

          // 获取基础类名，例如：传参 `App\Models\User` 会得到 `User`
          $class_name = class_basename($full_class_name);

          // 蛇形命名，例如：传参 `User`  会得到 `user`, `FooBar` 会得到 `foo_bar`
          $snake_case_name = Str::snake($class_name);

          // 获取子串的复数形式，例如：传参 `user` 会得到 `users`
          return Str::plural($snake_case_name);
      }
      ```
  - 4.新建回复模型配置 config/administrator/replies.php
    ```
    <?php

    use App\Models\Reply;

    return [
        'title'   => '回复',
        'single'  => '回复',
        'model'   => Reply::class,

        'columns' => [

            'id' => [
                'title' => 'ID',
            ],
            'content' => [
                'title'    => '内容',
                'sortable' => false,
                'output'   => function ($value, $model) {
                    return '<div style="max-width:220px">' . $value . '</div>';
                },
            ],
            'user' => [
                'title'    => '作者',
                'sortable' => false,
                'output'   => function ($value, $model) {
                    $avatar = $model->user->avatar;
                    $value = empty($avatar) ? 'N/A' : '<img src="'.$avatar.'" style="height:22px;width:22px"> ' . $model->user->name;
                    return model_link($value, $model->user);
                },
            ],
            'topic' => [
                'title'    => '话题',
                'sortable' => false,
                'output'   => function ($value, $model) {
                    return '<div style="max-width:260px">' . model_admin_link($model->topic->title, $model->topic) . '</div>';
                },
            ],
            'operation' => [
                'title'  => '管理',
                'sortable' => false,
            ],
        ],
        'edit_fields' => [
            'user' => [
                'title'              => '用户',
                'type'               => 'relationship',
                'name_field'         => 'name',
                'autocomplete'       => true,
                'search_fields'      => array("CONCAT(id, ' ', name)"),
                'options_sort_field' => 'id',
            ],
            'topic' => [
                'title'              => '话题',
                'type'               => 'relationship',
                'name_field'         => 'title',
                'autocomplete'       => true,
                'search_fields'      => array("CONCAT(id, ' ', title)"),
                'options_sort_field' => 'id',
            ],
            'content' => [
                'title'    => '回复内容',
                'type'     => 'textarea',
            ],
        ],
        'filters' => [
            'user' => [
                'title'              => '用户',
                'type'               => 'relationship',
                'name_field'         => 'name',
                'autocomplete'       => true,
                'search_fields'      => array("CONCAT(id, ' ', name)"),
                'options_sort_field' => 'id',
            ],
            'topic' => [
                'title'              => '话题',
                'type'               => 'relationship',
                'name_field'         => 'title',
                'autocomplete'       => true,
                'search_fields'      => array("CONCAT(id, ' ', title)"),
                'options_sort_field' => 'id',
            ],
            'content' => [
                'title'    => '回复内容',
            ],
        ],
        'rules'   => [
            'content' => 'required'
        ],
        'messages' => [
            'content.required' => '请填写回复内容',
        ],
    ];
    ```
### 8.7 [后台管理-站点配置](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.新增『站点管理』子菜单 config/administrator.php
    ```
    'menu' => [
        '用户与权限' => [
            'users',
            'roles',
            'permissions',
        ],
        '内容管理' => [
            'categories',
            'topics',
            'replies',
        ],
        '站点管理' => [
            'settings.site',
        ],
    ],
    ```
    - 需要注意的是此类后台，需要在菜单里使用 settings. 前缀，并且将文件放置于 settings_config_path 定义的目录中。
  - 2.新增配置信息：config/administrator/settings/site.php
    ```
    <?php

    return [
        'title' => '站点设置',

        // 访问权限判断
        'permission'=> function()
        {
            // 只允许站长管理站点配置
            return Auth::user()->hasRole('Founder');
        },

        // 站点配置的表单
        'edit_fields' => [
            'site_name' => [
                // 表单标题
                'title' => '站点名称',

                // 表单条目类型
                'type' => 'text',

                // 字数限制
                'limit' => 50,
            ],
            'contact_email' => [
                'title' => '联系人邮箱',
                'type' => 'text',
                'limit' => 50,
            ],
            'seo_description' => [
                'title' => 'SEO - Description',
                'type' => 'textarea',
                'limit' => 250,
            ],
            'seo_keyword' => [
                'title' => 'SEO - Keywords',
                'type' => 'textarea',
                'limit' => 250,
            ],
        ],

        // 表单验证规则
        'rules' => [
            'site_name' => 'required|max:50',
            'contact_email' => 'email',
        ],

        'messages' => [
            'site_name.required' => '请填写站点名称。',
            'contact_email.email' => '请填写正确的联系人邮箱格式。',
        ],

        // 数据即将保存时触发的钩子，可以对用户提交的数据做修改
        'before_save' => function(&$data)
        {
            // 为网站名称加上后缀，加上判断是为了防止多次添加
            if (strpos($data['site_name'], 'Powered by LaraBBS') === false) {
                $data['site_name'] .= ' - Powered by LaraBBS';
            }
        },

        // 你可以自定义多个动作，每一个动作为设置页面底部的『其他操作』区块
        'actions' => [

            // 清空缓存
            'clear_cache' => [
                'title' => '更新系统缓存',

                // 不同状态时页面的提醒
                'messages' => [
                    'active' => '正在清空缓存...',
                    'success' => '缓存已清空！',
                    'error' => '清空缓存时出错！',
                ],

                // 动作执行代码，注意你可以通过修改 $data 参数更改配置信息
                'action' => function(&$data)
                {
                    \Artisan::call('cache:clear');
                    return true;
                }
            ],
        ],
    ];
    ```
    - 设置信息存储位置
      - 打开设置页面 domain/administrator/settings/site.php 页面保存设置信息后，设置信息会存储在 `storage/administrator_settings/site.josn` 文件中
  - 3.使用配置信息
    - Administrator 自带了一个`辅助函数 setting()` 允许我们来获取设置信息
      ```
      setting($key, $default = '', $setting_name = 'site');
      $site_name = setting('site_name'); // 获取『站点名称』的例子
      $site_name = setting('site_name', '默认站点名称'); // 此方法允许传入默认值：
      ```
    - 使用「联系人邮箱」
      resources/views/layouts/_footer.blade.php
      ```
      <p class="float-right"><a href="mailto:{{ setting('contact_email') }}">联系我们</a></p>
      ```
    - 使用「SEO信息」
      resources/views/layouts/app.blade.php
      ```
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>@yield('title', 'LaraBBS') - {{ setting('site_name', 'Laravel 进阶教程') }}</title>
      <meta name="description" content="@yield('description', setting('seo_description', 'LaraBBS 爱好者社区。'))" />
      <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'LaraBBS,社区,论坛,开发者论坛'))" />

      <!-- Styles -->
      ```
### 8.8 [后台范围权限](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - Denied 页面
    - 新建路由 routes/web.php
      ```
      Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');
      ```
    - Administrator 配置修改 config/administrator.php
      ```
      // 当选项 `permission` 权限检测不通过时，会重定向用户到此处设置的路径
      'login_path' => 'permission-denied',
      ```
    - 新增控制器方法 app/Http/Controllers/PagesController.php
      ```
      public function permissionDenied()
      {
          // 如果当前用户有权限访问后台，直接跳转访问
          // 这个判断的必要性：未登录时(无权)→登录后(有权)->跳转访问
          if (config('administrator.permission')()) {
              return redirect(url(config('administrator.uri')), 302);
          }

          // 否则使用「拒绝」视图
          return view('pages.permission-denied');
      }
      ```
    - 视图文件 resources/views/pages/permission_denied.blade.php
      ```
      @extends('layouts.app')
      @section('title', '无权限访问')

      @section('content')
        <div class="col-md-4 offset-md-4">
          <div class="card ">
            <div class="card-body">
              @if (Auth::check())
                <div class="alert alert-danger text-center mb-0">
                  当前登录账号无后台访问权限。
                </div>
              @else
                <div class="alert alert-danger text-center">
                  请登录以后再操作
                </div>

                <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
                  <i class="fas fa-sign-in-alt"></i>
                  登 录
                </a>
              @endif
            </div>
          </div>
        </div>
      @stop
      ```
    - 测试一下
      ```
      未登录用户；
      登录无权限用户；
      最后是站长访问。
      ```
  - 后台部分可见(解决无限302跳转死循环问题)
    - 死循环问题：
      - 我们的 1 号用户 Summer 的角色是站长，拥有所有权限，2 号用户是管理员，只拥有管理内容的权限，没有『用户管理』权限，可以理解为，只有站长才能删除用户、修改用户组权限和修改站点配置。接下来我们使用 2 号用户来访问后台：Chrome 浏览器会报错 ERR_TOO_MANY_REDIRECTS，意为太多跳转死循环，页面无法渲染
    - 原因
      - administrator.php 中，我们将 home_page 选项设置为 users 页面，当我们使用 2 号用户访问 /admin 时，会自动跳转到 users 页面，users 页面检测到 2 号用户没有访问权限，遂重定向到后台首页 /admin 中，访问首页又会重定向到 users 中，所以就是死循环。
    - 解决方法
      - 将 home_page 选项改为访问权限较低的页面如 topics，这个页面是所有进入后台的用户都有权限访问的
      config/administrator.php
      ```
      // 用来作为后台主页的菜单条目，由 `use_dashboard` 选项决定，菜单指的是 `menu` 选项
      'home_page' => 'topics',
      ```
## 9 [杂项](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
### 9.1 [边栏活跃用户](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.活跃用户算法 Trait
    - 系统 每一个小时 计算一次，统计 最近 7 天 所有用户发的 帖子数 和 评论数，用户每发一个帖子则得 4 分，每发一个回复得 1 分，计算出所有人的『得分』后再倒序，排名前 6 的用户将会显示在「活跃用户」列表里
    - 算法代码 app/Models/Traits/ActiveUserHelper.php
      ```
      <?php

      namespace App\Models\Traits;

      use App\Models\Topic;
      use App\Models\Reply;
      use Carbon\Carbon;
      use Cache;
      use DB;
      use Arr;

      trait ActiveUserHelper
      {
        // 用于存放临时用户数据
        /**
        * [
        *  'user_id' => ['score' => 20],
        *  '1' => ['score' => 20],
        *  '4' => ['score' => 16],
        *  ...
        * ]
        */
        protected $users = [];

        // 配置信息
        protected $topic_weight = 4; // 话题权重
        protected $reply_weight = 1; // 回复权重
        protected $pass_days = 7;    // 多少天内发表过内容
        protected $user_number = 6;  // 取出来多少用户
        
        // 缓存相关配置
        protected $cache_key = 'larabbs_active_users';
        protected $cache_expire_in_seconds = 65 * 60;

        public function getActiveUsers()
        {
          // 尝试从缓存中去除 cache_key 对应的数据。 如果能取到，便直接返回数据。
          // 否则运行匿名函数中的代码取出活跃用户数据，返回的同时做了缓存。
          return Cache::remember($this->cache_key, $this->cache_expire_in_seconds, function(){
            return $this->calculateActiveUsers();
          });
        }

        public function calculateAndCacheActiveUsers()
        {
          // 取得活跃用户列表
          $active_users = $this->calculateActiveUsers();
          // 并加以缓存
          $this->cacheActiveUsers($active_users);
        }

        private function calculateActiveUsers()
        {
          $this->calculateTopicScore();
          $this->calculateReplyScore();

          // 数组按照得分排序（顺序）
          $users = Arr::sort($this->users, function($user) {
            return $user['score'];
          });

          // 我们需要的是倒序，高分靠前，第二个参数为保持数组的 KEY 不变（此处 KEY 为 user_id）
          $users = array_reverse($users, true);

          // 只获取我们想要的数量
          $users = array_slice($users, 0, $this->user_number, true);

          // 新建一个空集合
          $active_users = collect();

          foreach($users as $user_id => $user) {
            // 寻找下是否可以找到用户
            $user = $this->find($user_id);

            // 如果数据库里有该用户的话
            if ($user) {
              // 将此用户实体放入集合的末尾
              $active_users->push($user);
            }
          }

          // 返回数据
          return $active_users;
        }

        private function calculateTopicScore()
        {
          // 从话题数据表里面取出限定时间范围（$pass_days）内，有发表过话题的用户
          // 并且同时取出用户此段时间内发布话题的数量
          $topic_users = Topic::query()->select(DB::raw('user_id, count(*) as topic_count'))
                                      ->where('created_at', '>=', Carbon::now()->subDays($this->pass_days))
                                      ->groupBy('user_id')
                                      ->get();
          // 根据话题数量计算得分
          foreach($topic_users as $value) {
            $this->users[$value->user_id]['score'] = $value->topic_count * $this->topic_weight;
          }
        }

        private function calculateReplyScore()
        {
          // 从回复数据表里取出限定时间范围（$pass_days）内，有发表过回复的用户
          // 并且同时取出用户此段时间内发布回复的数量
          $reply_users = Reply::query()->select(DB::raw('user_id, count(*) as reply_count'))
                                      ->where('created_at', '>=', Carbon::now()->subDays($this->pass_days))
                                      ->groupBy('user_id')
                                      ->get();
          // 根据回复数量计算得分
          foreach ($reply_users as $value) {
            $reply_score = $value->reply_count * $this->reply_weight;
            if (isset($this->users[$value->user_id])) {
              $this->users[$value->user_id]['score'] += $reply_score; 
            } else {
              $this->users[$value->user_id]['score'] = $reply_score;
            }
          }
        }

        private function cacheActiveUsers($active_users)
        {
          // 将数据放入缓存中
          Cache::put($this->cache_key, $active_users, $this->cache_expire_in_seconds);
        }
      }
      ```
    - 缓存驱动 .env
      ```
      CACHE_DRIVER=redis
      ```
  - 2.新建 Artisan 命令 (make:command)
    ```
    php artisan make:command CalculateActiveUser --command=larabbs:calculate-active-user
    ```
    - 参数 --command 是指定 Artisan 调用的命令，一般情况下，我们推荐为命令加上命名空间，如本项目的 larabbs:
    - 打开生成的 CalculateActiveUser 命令类文件，填入以下内容：
      app/Console/Commands/CalculateActiveUser.php
      ```
      <?php

      namespace App\Console\Commands;

      use Illuminate\Console\Command;
      use App\Models\User;

      class CalculateActiveUser extends Command
      {
          // 供我们调用命令
          protected $signature = 'larabbs:calculate-active-user';

          // 命令的描述
          protected $description = '生成活跃用户';

          // 最终执行的方法
          public function handle(User $user)
          {
              // 在命令行打印一行信息
              $this->info("开始计算...");

              $user->calculateAndCacheActiveUsers();

              $this->info("成功生成！");
          }
      }
      ```
      - 此刻使用 `php artisan list` 即可看到我们的命令行
    - 执行此命令生成『活跃用户』数据：
      ```
      php artisan larabbs:calculate-active-user
      ```
  - 3.读取缓存数据 
    - app/Http/Controllers/TopicsController.php
      ```
      public function index(Request $request, Topic $topic, User $user)
      {
          $topics = $topic->withOrder($request->order)
                          ->with('user', 'category')  // 预加载防止 N+1 问题
                          ->paginate(20);
          $active_users = $user->getActiveUsers();
          // dd($active_users);
          return view('topics.index', compact('topics', 'active_users'));
      }
      ```
    - app/Http/Controllers/CategoriesController.php
      ```
      public function show(Category $category, Request $request, Topic $topic, User $user)
      {
          // 读取分类 ID 关联的话题，并按每 20 条分页
          $topics = $topic->withOrder($request->order)
                          ->where('category_id', $category->id)
                          ->with('user', 'category')   // 预加载防止 N+1 问题
                          ->paginate(20);
          // 活跃用户列表
          $active_users = $user->getActiveUsers();

          // 传参变量话题和分类到模板中
          return view('topics.index', compact('topics', 'category', 'active_users'));
      }
      ```
  - 4.页面展示 resources/views/topics/_sidebar.blade.php
    ```
    <div class="card ">
      <div class="card-body">
        <a href="{{ route('topics.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
          <i class="fas fa-pencil-alt mr-2"></i> 新建帖子
        </a>
      </div>
    </div>

    @if (count($active_users))
      <div class="card mt-4">
        <div class="card-body active-users pt-2">
          <div class="text-center mt-1 mb-0 text-muted">活跃用户</div>
          <hr class="mt-2">
          @foreach ($active_users as $active_user)
            <a class="media mt-2" href="{{ route('users.show', $active_user->id) }}">
              <div class="media-left media-middle mr-2 ml-1">
                <img src="{{ $active_user->avatar }}" width="24px" height="24px" class="media-object">
              </div>
              <div class="media-body">
                <small class="media-heading text-secondary">{{ $active_user->name }}</small>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    @endif
    ```
  - [5.计划任务](https://learnku.com/courses/laravel-intermediate-training/6.x/active-users/5595#23e57e)
    - 5.1 修改系统的 Cron 计划任务配置信息
      ```
      export EDITOR=vi && crontab -e
      ```
      添加下面这一行：
      ```
      * * * * * php /home/vagrant/Code/larabbs/artisan schedule:run >> /dev/null 2>&1
      ```
      系统的 Cron 已经设定好了，现在 Cron 软件将会每分钟调用一次 Laravel 命令调度器，当 schedule:run 命令执行时， Laravel 会评估你的计划任务并运行预定任务。
    - 5.2 注册 Laravel 的调度任务 app/Console/Kernel.php
      ```
      protected function schedule(Schedule $schedule)
      {
          // 一小时执行一次『活跃用户』数据生成的命令
          $schedule->command('larabbs:calculate-active-user')->hourly();
      }
      ```
      - 请记得测试调度任务是否执行成功，可以缩短时间来观察,如
        ```
        $schedule->command('larabbs:calculate-active-user')->hourly();
      ```
  - 6.清空缓存，可以看到没有缓存时，页面需要请求 18 条 SQL ，有了缓存只需要 5 条：
    ```
    php artisan cache:clear
    ```
### 9.2 [边栏资源推荐（Observer）](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.生成数据模型
    ```
    php artisan make:model Models/Link -m
    ```
    修改 {timestamp}_create_links_table
    ```
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('资源的描述')->index();
            $table->string('link')->comment('资源的链接')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
    ```
    执行数据库迁移
    ```
    php artisan migrate
    ```
    修改模型的 $fillable 字段：app/Models/Link.php
    ```
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Link extends Model
    {
        protected $fillable = ['title', 'link'];
    }
    ```
  - 2.生成假数据
    生成模型工厂
    ```
    php aritsan make:factory LinkFactory
    ```
    修改模型工厂：database/factories/LinkFactory.php
    ```
    <?php

    use Faker\Generator as Faker;

    $factory->define(App\Models\Link::class, function (Faker $faker) {
        return [
            'title' => $faker->name,
            'link' => $faker->url,
        ];
    });
    ```
    生成填充类
    ```
    php artisan make:seeder LinksTableSeeder
    ```
    修改填充类：database/seeds/LinksTableSeeder.php
    ```
    <?php

    use Illuminate\Database\Seeder;
    use App\Models\Link;

    class LinksTableSeeder extends Seeder
    {
        public function run()
        {
            // 生成数据集合
            $links = factory(Link::class)->times(6)->make();

            // 将数据集合转换为数组，并插入到数据库中
            Link::insert($links->toArray());
        }
    }
    ```
    注册 DatabaseSeeder : database/seeds/DatabaseSeeder.php
    ```
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
    }
    ```
    生成假数据
    ```
    php artisan migrate:refresh --seed
    ```
  - 3.资源链接管理后台
    - 3.1 后台『站点管理』子菜单下新增 links 入口：config/administrator.php
      ```
      'menu' => [
          '用户与权限' => [
              'users',
              'roles',
              'permissions',
          ],
          '内容管理' => [
              'categories',
              'topics',
              'replies',
          ],
          '站点管理' => [
              'settings.site',
              'links',
          ],
      ],
      ```
    - 3.2 新建模型配置信息：config/administrator/links.php
      ```
      <?php

      use App\Models\Link;

      return [
          'title'   => '资源推荐',
          'single'  => '资源推荐',

          'model'   => Link::class,

          // 访问权限判断
          'permission'=> function()
          {
              // 只允许站长管理资源推荐链接
              return Auth::user()->hasRole('Founder');
          },

          'columns' => [
              'id' => [
                  'title' => 'ID',
              ],
              'title' => [
                  'title'    => '名称',
                  'sortable' => false,
              ],
              'link' => [
                  'title'    => '链接',
                  'sortable' => false,
              ],
              'operation' => [
                  'title'  => '管理',
                  'sortable' => false,
              ],
          ],
          'edit_fields' => [
              'title' => [
                  'title'    => '名称',
              ],
              'link' => [
                  'title'    => '链接',
              ],
          ],
          'filters' => [
              'id' => [
                  'title' => '标签 ID',
              ],
              'title' => [
                  'title' => '名称',
              ],
          ],
      ];
      ```
  - 4.页面渲染
    - 4.1 修改话题列表 app/Http/Controllers/TopicsController.php
      ```
      public function index(Request $request, Topic $topic, User $user, Link $link)
      {
          $topics = $topic->withOrder($request->order)
                          ->with('user', 'category')  // 预加载防止 N+1 问题
                          ->paginate(20);
          $active_users = $user->getActiveUsers();
          $links = $link->getAllCached();

          return view('topics.index', compact('topics', 'active_users', 'links'));
      }
      ```
    - 4.2 增加模型方法 app/Models/Link.php
      ```
      <?php

      namespace App\Models;

      use Illuminate\Database\Eloquent\Model;
      use Cache;

      class Link extends Model
      {
          protected $fillable = ['title', 'link'];

          public $cache_key = 'larabbs_links';
          protected $cache_expire_in_seconds = 1440 * 60;

          public function getAllCached()
          {
              // 尝试从缓存中取出 cache_key 对应的数据。如果能取到，便直接返回数据。
              // 否则运行匿名函数中的代码来取出 links 表中所有的数据，返回的同时做了缓存。
              return Cache::remember($this->cache_key, $this->cache_expire_in_seconds, function(){
                  return $this->all();
              });
          }
      }
      ```
    - 4.3 修改边栏模板 resources/views/topics/_sidebar.blade.php
      ```
      ...
      @if (count($links))
        <div class="card mt-4">
          <div class="card-body pt-2">
            <div class="text-center mt-1 mb-0 text-muted">资源推荐</div>
            <hr class="mt-2 mb-3">
            @foreach ($links as $link)
              <a class="media mt-1" href="{{ $link->link }}">
                <div class="media-body">
                  <span class="media-heading text-muted">{{ $link->title }}</span>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      @endif
      ```
    - 4.4 修改分类列表 app/Http/Controllers/CategoriesController.php
      ```
      public function show(Category $category, Request $request, Topic $topic, User $user, Link $link)
      {
          // 读取分类 ID 关联的话题，并按每 20 条分页
          $topics = $topic->withOrder($request->order)
                          ->where('category_id', $category->id)
                          ->with('user',  'category')  // 预加载防止 N+1 问题
                          ->paginate(20);
          // 活跃用户列表
          $active_users = $user->getActiveUsers();
          // 资源链接
          $links = $link->getAllCached();
          // 传参变量到模板中
          return view('topics.index', compact('topics', 'category', 'active_users', 'links'));
      }
      ```
  - 5.自动更新缓存（Observer）
    - 缓存问题
      尝试在后台修改链接的内容，然后查看前台页面，发现资源推荐并未发生修改。这是因为我们做了缓存，页面读取的是缓存里的信息，而后台更新的是数据库里的数据。
    - 5.1 新建监控器（模型观察器）
      ```
      php artisan make:observer LinkObserver
      ```
      修改：app/Observers/LinkObserver.php
      ```
      <?php

      namespace App\Observers;

      use App\Models\Link;
      use Cache;

      class LinkObserver
      {
          // 在保存时清空 cache_key 对应的缓存
          public function saved(Link $link)
          {
              Cache::forget($link->cache_key);
          }
      }
      ```
    - 5.2 注册监控器 app/Providers/AppServiceProvider.php
      ```
      public function boot()
      {
          \App\Models\User::observe(\App\Observers\UserObserver::class);
          \App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
          \App\Models\Topic::observe(\App\Observers\TopicObserver::class);
          \App\Models\Link::observe(\App\Observers\LinkObserver::class);
      }
      ```
### 9.3 [级联删除 (外键约束)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 1.数据损坏
    ```
    这是数据损坏所致 —— 我们删除了用户，却没有删除用户发布的话题，此部分话题变成了遗留数据。话题列表中渲染到这些遗留数据时，因为不存在作者，却取作者的 avatar 头像属性，故报错。
    ```
  - 2.两种解决方法
    - 代码监听器 —— 利用 Eloquent 监控器 的 deleted 事件连带删除，好处是灵活、扩展性强，不受底层数据库约束，坏处是当删除时不添加监听器，就会出现漏删；
    - 外键约束 —— 利用 MySQL 自带的外键约束功能，好处是数据一致性强，基本上不会出现漏删，坏处是有些数据库不支持，如 SQLite。
  - 3.添加三个外键约束
    ```
    1.当用户删除时，删除其发布的话题；
    2.当用户删除时，删除其发布的回复；
    3.当话题删除时，删除其所属的回复
    ```
    用迁移文件来添加表的「外键约束」
    ```
    php artisan make:migration add_references
    ```
    database/migrations/{timestamp}_add_references.php
    ```
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {

            // 当 user_id 对应的 users 表数据被删除时，删除词条
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('replies', function (Blueprint $table) {

            // 当 user_id 对应的 users 表数据被删除时，删除此条数据
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // 当 topic_id 对应的 topics 表数据被删除时，删除此条数据
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            // 移除外键约束
            $table->dropForeign(['user_id']);
        });

        Schema::table('replies', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['topic_id']);
        });

    }
    ```
    运行迁移
    ```
    php artisan migrate
    ```
    数据表info如下：
    ```
    CREATE TABLE `replies` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
      `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
      `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
      `created_at` timestamp NULL DEFAULT NULL,
      `updated_at` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`),
      KEY `replies_topic_id_index` (`topic_id`),
      KEY `replies_user_id_index` (`user_id`),
      CONSTRAINT `replies_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE,
      CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ```
### 9.4 [用户最后活跃时间 (中间件)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - [中间件介绍](https://learnku.com/courses/laravel-intermediate-training/6.x/user-last-logon-time/5598#5c350f)
    - Laravel 的中间件从执行时机上分『前置中间件』和『后置中间件』，前置中间件是应用初始化完成以后立刻执行，此时控制器路由还未分配、控制器还未执行、视图还未渲染。后置中间件是即将离开应用的响应，此时控制器已将渲染好的视图返回，我们可以在后置中间件里修改响应。两者的区别在于书写方式的不同：
    - 前置中间件：
      ```
      <?php

      namespace App\Http\Middleware;

      use Closure;

      class BeforeMiddleware
      {
          public function handle($request, Closure $next)
          {
              // 这是前置中间件，在还未进入 $next 之前调用

              return $next($request);
          }
      }
      ```
    - 后置中间件：
      ```
      <?php

      namespace App\Http\Middleware;

      use Closure;

      class AfterMiddleware
      {
          public function handle($request, Closure $next)
          {
              $response = $next($request);

              // 这是后置中间件，$next 已经执行完毕并返回响应 $response，
              // 我们可以在此处对响应进行修改。

              return $response;
          }
      }
      ```
  - 基本思路如下：
    - 记录 - 通过中间件过滤用户所有请求，记录用户访问时间到 Redis 按日期区分的哈希表；
    - 同步 - 新建命令，计划任务每天运行一次此命令，将昨日哈希表里的数据同步到数据库中，并删除；
    - 读取 - 优先读取当日哈希表里 Redis 里的数据，无数据则使用数据库中的值。
  - 1.创建中间件
    ```
    php artisan make:middleware RecordLastActivedTime
    ```
  - 2.注册中间件 app/Http/Kernel.php
    ```
    <?php

    namespace App\Http;

    use Illuminate\Foundation\Http\Kernel as HttpKernel;

    class Kernel extends HttpKernel
    {
        // 全局中间件 These middleware are run during every request to your application.
        protected $middleware = [
            // 修正代理服务器的服务器参数
            \App\Http\Middleware\TrustProxies::class,
            // 检测应用是否进入「维护模式」
            // 见 https://learnku.com/docs/laravel/5.7/configuration#maintenance-mode
            \App\Http\Middleware\CheckForMaintenanceMode::class,
            // 检测表单请求的数据是否过大
            \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
            // 对提交请求参数进行 PHP 函数 `trim()` 处理
            \App\Http\Middleware\TrimStrings::class,
            // 将提交清除参数中空子串转换为 null
            \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        ];

        // The application's route middleware groups.
        protected $middlewareGroups = [
            // Web 中间件组，应用于 routes/wep.php  路由文件
            // 在 RouteServiceProvider 中设定
            'web' => [
                // Cookie 加密解密
                \App\Http\Middleware\EncryptCookies::class,
                // 将 Cookie 添加到响应中
                \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
                // 开启会话
                \Illuminate\Session\Middleware\StartSession::class,
                // \Illuminate\Session\Middleware\AuthenticateSession::class,
                // 将系统的错误数据注入到视图变量 $errors 中
                \Illuminate\View\Middleware\ShareErrorsFromSession::class,
                // 检验 CSRF ，防止跨站请求伪造的安全威胁
                // 见：https://learnku.com/docs/laravel/5.7/csrf
                \App\Http\Middleware\VerifyCsrfToken::class,
                // 处理路由绑定
                // 见：https://learnku.com/docs/laravel/5.7/routing#route-model-binding
                \Illuminate\Routing\Middleware\SubstituteBindings::class,
                // 强制用户邮箱认证
                \App\Http\Middleware\EnsureEmailIsVerified::class,
                // 记录用户最后活跃时间
                \App\Http\Middleware\RecordLastActivedTime::class,
            ],

            // API ˙中间件组，应用于 routes/api.php 路由文件，
            // 在 RouteServiceProvider 中设定
            'api' => [
                // 使用别名来调用中间件
                // 请见：https://learnku.com/docs/laravel/5.7/middleware#为路由分配中间件
                'throttle:60,1',
                'bindings',
            ],
        ];
        
        // The application's route middleware.    
        // These middleware may be assigned to groups or used individually. 
        // 中间件别名设置，允许你使用别名调用中间件，例如上面的 api 中间件组调用
        protected $routeMiddleware = [
            // 只有登录用户才能访问，我们在控制器的构造方法中大量使用
            'auth' => \App\Http\Middleware\Authenticate::class,
            // HTTP Basic Auth 认证
            'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
            // 处理路由绑定
            // 见：https://learnku.com/docs/laravel/5.7/routing#route-model-binding
            'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
            // 
            'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
            // 用户授权功能
            'can' => \Illuminate\Auth\Middleware\Authorize::class,
            // 只有游客才能访问，在 register 和 login 请求中使用，只有未登录用户才能访问这些页面
            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            //
            'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
            // URL签名认证，在找回密码章节里我们讲过
            'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
            // 访问节流，类似于 『1 分钟只能请求 10 次』的需求，一般在 API 中使用
            'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
            // Laravel 自带的强制用户邮箱认证的中间件，为了更加贴近我们的逻辑，已被重写
            'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        ];

        // 设定中间件优先级，此数组定义了除『全局中间件』以外的中间件执行顺序
        // 可以看到 StartSession 永远是最开始执行的，因为 StartSession 后，
        // 我们才能在程序中使用 Auth 等用户认证的功能。
        protected $middlewarePriority = [
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\Authenticate::class,
            \Illuminate\Routing\Middleware\ThrottleRequests::class,
            \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Illuminate\Auth\Middleware\Authorize::class,
        ];
    }
    ```
  - 3.书写中间件 app/Http/Middleware/RecordLastActivedTime.php
    ```
    <?php

    namespace App\Http\Middleware;

    use Closure;
    use Auth;

    class RecordLastActivedTime
    {
        public function handle($request, Closure $next)
        {
            // 如果是登录用户的话
            if (Auth::check()) {
                // 记录最后登录时间
                Auth::user()->recordLastActivedAt();
            }

            return $next($request);
        }
    }
    ```
  - 4.将业务逻辑封装于 User 类中
    app/Models/Traits/LastActivedAtHelper.php
    ```
    <?php
    namespace App\Models\Traits;

    use Illuminate\Support\Facades\Redis;
    use Carbon\Carbon;

    trait LastActivedAtHelper
    {
      // 缓存相关
      protected $hash_prefix = 'larabbs_last_actived_at_';
      protected $field_prefix = 'user_';

      public function recordLastActivedAt()
      {
        // 获取今天的日期
        $date = Carbon::now()->toDateString();

        // Redis 哈希表的命名，如：larabbs_last_actived_at_2017-10-21
        $hash = $this->hash_prefix . $date;

        // 字段名称，如：user_1
        $field = $this->field_prefix . $this->id;

        // dd(Redis::hGetAll($hash)); // 测试用

        // 当前时间，如：2017-10-21 08:35:15
        $now = Carbon::now()->toDateTimeString();

        // 数据写入 Redis，字段已经存在会被更新
        Redis::hSet($hash, $field, $now);    
      }
    ```
    app/Models/User.php 中引用
    ```
    class User extends Authenticatable implements MustVerifyEmailContract
    {
        use Traits\LastActivedAtHelper;
        ...
    }
    ```
  - 5.同步到数据库中
    - 5.1 数据库添加字段
      ```
      php artisan make:migration add_last_actived_at_to_users_table --table=users
      ```
      database/migrations/{timestamp}_add_last_actived_at_to_users_table.php
      ```
      public function up()
      {
          Schema::table('users', function (Blueprint $table) {
              $table->timestamp('last_actived_at')->nullable();
          });
      }

      public function down()
      {
          Schema::table('users', function (Blueprint $table) {
              $table->dropColumn('last_actived_at');
          });
      }
      ```
      执行迁移
      ```
      php artisan migrate
      ```
    - 5.2 新建 Artisan 命令
      ```
      php artisan make:command SyncUserActivedAt --command=larabbs:sync-user-actived-at
      ```
      编辑命令类 app/Console/Commands/SyncUserActivedAt.php
      ```
      <?php
      namespace App\Console\Commands;

      use Illuminate\Console\Command;
      use App\Models\User;

      class SyncUserActivedAt extends Command
      {
          protected $signature = 'larabbs:sync-user-actived-at';
          protected $description = '将用户最后登录时间从 Redis 同步到数据库中';

          public function handle(User $user)
          {
              $user->syncUserActivedAt();
              $this->info("同步成功！");
          }
      }
      ```
    - 5.3 同步到数据库的方法 app/Models/Traits/LastActivedAtHelper.php
      ```
      trait LastActivedAtHelper
      {
          ...
          public function syncUserActivedAt()
          {
              // 获取昨天的日期，格式如：2017-10-21
              $yesterday_date = Carbon::yesterday()->toDateString();

              // Redis 哈希表的命名，如：larabbs_last_actived_at_2017-10-21
              $hash = $this->hash_prefix . $yesterday_date;

              // 从 Redis 中获取所有哈希表里的数据
              $dates = Redis::hGetAll($hash);

              // 遍历，并同步到数据库中
              foreach ($dates as $user_id => $actived_at) {
                  // 会将 `user_1` 转换为 1
                  $user_id = str_replace($this->field_prefix, '', $user_id);

                  // 只有当用户存在时才更新到数据库中
                  if ($user = $this->find($user_id)) {
                      $user->last_actived_at = $actived_at;
                      $user->save();
                  }
              }

              // 以数据库为中心的存储，既已同步，即可删除
              Redis::del($hash);
          }
      }
      ```
    - 5.3 测试 Artisan 命令
      临时修改为今天的日期，这样就能将我们的上一个测试制造的数据获取到：
      ```
      $yesterday_date = Carbon::now()->toDateString();
      ```
      修改完成后，执行命名
      ```
      php artisan larabbs:sync-user-actived-at
      ```
      执行成功后，打开数据库可看到用户的 `last_actived_at` 字段有数据
    - 5.4 任务调度
      前面开发活跃用户章节中我们已经做了 Cron 设置，此处我们只需在 Kernel.php 的 schedule() 方法中新增任务调度即可：
      app/Console/Kernel.php
      ```
      protected function schedule(Schedule $schedule)
      {
          // 每隔一个小时执行一遍
          $schedule->command('larabbs:calculate-active-user')->hourly();
          // 每日零时执行一次
          $schedule->command('larabbs:sync-user-actived-at')->dailyAt('00:00');
      }
      ```
  - 6.读取数据
    使用 Eloquent 的 访问器 来实现此功能
    app/Models/Traits/LastActivedAtHelper.php
    ```
    trait LastActivedAtHelper
    {
        ...
        public function getLastActivedAtAttribute($value)
        {
            // 获取今天的日期
            $date = Carbon::now()->toDateString();

            // Redis 哈希表的命名，如：larabbs_last_actived_at_2017-10-21
            $hash = $this->hash_prefix . $date;

            // 字段名称，如：user_1
            $field = $this->field_prefix . $this->id;

            // 三元运算符，优先选择 Redis 的数据，否则使用数据库中
            $datetime = Redis::hGet($hash, $field) ? : $value;

            // 如果存在的话，返回时间对应的 Carbon 实体
            if ($datetime) {
                return new Carbon($datetime);
            } else {
            // 否则使用用户注册时间
                return $this->created_at;
            }
        }
    }
    ```
  - 7.抽象可复用的方法，重构整个 LastActivedAtHelper 类
    app/Models/Traits/LastActivedAtHelper.php
    ```
    <?php
    namespace App\Models\Traits;

    use Illuminate\Support\Facades\Redis;
    use Carbon\Carbon;

    trait LastActivedAtHelper
    {
        // 缓存相关
        protected $hash_prefix = 'larabbs_last_actived_at_';
        protected $field_prefix = 'user_';

        public function recordLastActivedAt()
        {
            // 获取今日 Redis 哈希表名称，如：larabbs_last_actived_at_2017-10-21
            $hash = $this->getHashFromDateString(Carbon::now()->toDateString());

            // 字段名称，如：user_1
            $field = $this->getHashField();

            // dd(Redis::hGetAll($hash)); // 测试用

            // 当前时间，如：2017-10-21 08:35:15
            $now = Carbon::now()->toDateTimeString();

            // 数据写入 Redis ，字段已存在会被更新
            Redis::hSet($hash, $field, $now);
        }

        public function syncUserActivedAt()
        {
            // 获取昨日的哈希表名称，如：larabbs_last_actived_at_2017-10-21
            $hash = $this->getHashFromDateString(Carbon::yesterday()->toDateString());

            // 从 Redis 中获取所有哈希表里的数据
            $dates = Redis::hGetAll($hash);

            // 遍历，并同步到数据库中
            foreach ($dates as $user_id => $actived_at) {
                // 会将 `user_1` 转换为 1
                $user_id = str_replace($this->field_prefix, '', $user_id);

                // 只有当用户存在时才更新到数据库中
                if ($user = $this->find($user_id)) {
                    $user->last_actived_at = $actived_at;
                    $user->save();
                }
            }

            // 以数据库为中心的存储，既已同步，即可删除
            Redis::del($hash);
        }

        public function getLastActivedAtAttribute($value)
        {
            // 获取今日对应的哈希表名称
            $hash = $this->getHashFromDateString(Carbon::now()->toDateString());

            // 字段名称，如：user_1
            $field = $this->getHashField();

            // 三元运算符，优先选择 Redis 的数据，否则使用数据库中
            $datetime = Redis::hGet($hash, $field) ? : $value;

            // 如果存在的话，返回时间对应的 Carbon 实体
            if ($datetime) {
                return new Carbon($datetime);
            } else {
            // 否则使用用户注册时间
                return $this->created_at;
            }
        }

        public function getHashFromDateString($date)
        {
            // Redis 哈希表的命名，如：larabbs_last_actived_at_2017-10-21
            return $this->hash_prefix . $date;
        }

        public function getHashField()
        {
            // 字段名称，如：user_1
            return $this->field_prefix . $this->id;
        }
    }
    ```
  - 8.页面显示 resources/views/users/show.blade.php
    ```
    <h5><strong>注册于</strong></h5>
    <p>{{ $user->created_at->diffForHumans() }}</p>
    <hr>
    <h5><strong>最后活跃</strong></h5>
    <p title="{{  $user->last_actived_at }}">{{ $user->last_actived_at->diffForHumans() }}</p>
    ```
### 9.5 [首页](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 修改首页路由 routes/web.php
    ```
    Route::get('/', 'PagesController@root')->name('root');
    ```
    改为
    ```
    Route::get('/', 'TopicsController@index')->name('root');
    ```
  - 修改样式
    样式有些问题，那是因为我们的话题列表页面是使用『路由专属样式类』区分的，新增路由样式类到原有的样式上即可。
    resources/sass/app.scss
    ```
    /* Topic Index Page */
    .topics-index-page, .categories-show-page { }
    ```
    修改为
    ```
    /* Topic Index Page */
    .topics-index-page, .categories-show-page, .root-page { }
    ```
### 9.6 [用户默认头像 (模型监控器)](https://github.com/andy-love-coding/laravel2.2#%E7%9B%AE%E5%BD%95)
  - 目前通过我们的站点注册页面加入的用户，默认是没有头像的：
    app/Observers/UserObserver.php
    ```
    <?php
    namespace App\Observers;

    use App\Models\User;

    class UserObserver
    {
        public function saving(User $user)
        {
            // 这样写扩展性更高，只有空的时候才指定默认头像
            if (empty($user->avatar)) {
                $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/30/1/TrJS40Ey5k.png';
            }
        }
    }
    ```