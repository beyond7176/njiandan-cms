<?php defined('SYSPATH') OR die('No direct access allowed.');
$lang = array
(
    'Install' => '安装',
    'Installation' => '安装',
    'Welcome to Njiandan. You need selected your default language.' => '欢迎使用N简单, 首先你需要选择使用的默认语言.',
    'Default language:' => '默认语言',

    'Sorry, I can&#8217;t write to these file or folder.' => '对不起, 以下文件或者文件夹没有写权限',
    'You&#8217;ll have to either change the permissions to writable on this list.' => '你需要将以下列表中的文件权限改为可写.',
    'Current status:' => '当前状态:',
    'can not write' => '不可写',
    'writable' => '可写',

    'Next' => '下一步',
    'Sorry, I can&#8217;t write to the www directory. You&#8217;ll have to either change the permissions on your Njiandan "www" directory.' => '对不起,www目录不可写,请将"www"目录改为可写，然后才能继续进行.',
    'Welcome to Njiandan. Before getting started, we need some information on the database. You will need to know the following items before proceeding.' => '欢迎使用N简单, 在使用之前,我们需要先对数据进行一些配置,您需要知道以下信息才可以进行.',
    'Database name' => '数据库名',
    'Database username' => '数据库用户名',
    'Database password' => '数据库密码',
    'Database host' => '数据库服务器地址',
    'Table prefix' => '数据库表前缀',
    'if you want to run more than one Njiandan in a single database' => '为了使N简单到数据库不与其它安装程序冲突.',
    'In all likelihood, these items were supplied to you by your ISP. If you do not have this information, then you will need to contact them before you can continue. If you&#8217;re all ready&hellip;' => '这些信息都是由你到服务器托管商提供的,如果你没有这些信息,请与他们联系让后再继续,如果你都填写好了...',
    'Let&#8217;s go!' => '开始安装吧!',
    'Below you should enter your database connection details. If you&#8217;re not sure about these, contact your host.' => '在填写以下数据库信息前,如果你不确定这些信息,请联系你到服务器托管商获取.',
    'Submit' => '提交',
    'The name of the database you want to run Njiandan in.' => '你要跑Njiandan用的那个数据库到名字',
    'Your MySQL username' => '你的MySQL数据库用户名',
    '...and MySQL password.' => '...还有你的MYSQL数据库密码.',
    '99% chance you won&#8217;t need to change this value.' => '99%的可能性你不需要改这个值',
    'If you want to run multiple Njiandan installations in a single database, change this.' => '如果你要安装多个程序在这个数据库中,你必须要设置唯一到表前缀',
    'All right sparky! You&#8217;ve made it through this part of the installation. Njiandan can now communicate with your database. If you are ready, time now to&hellip;' => '好了,数据库信息配置正确,成功连接上数据库了.你可以进行安装了.',
    'Run the install' => '开始安装',
    "<p>The file 'www/config/database.php' already exists. If you need to reset any of the configuration items in this file, please delete it first. You may try <a href='../../index.php/admin/install/'>installing now</a>.</p>" => "配置文件 'www/config/database.php' 已经存在, 如果你重新安装,请先删除该文件;如果你修改了手动配置文件要进行安装,请点击<a href='../../index.php/admin/install/'>开始安装</a>",
    "Database '%s' is not exists, Auto create it or input it again?" => "数据库 '%s' 不存在? 自动创建一个还是重新输入?",
    'Input again' => '重新输入',
    'Run auto create' => '执行自动创建',

    'Welcome' => '欢迎使用N简单',
    'Welcome to the famous five minute Njiandan installation process! Just fill in the information below and you&#8217;ll be on your way to using the most extendable and powerful personal publishing platform in the world.' => '欢迎使用N简单安装程序,只要再填写下面到这些站点信息,你就可以拥有自己发布向全世界的站点了.',
    'Information needed' => '需要填写的信息',
    'Please provide the following information.  Don&#8217;t worry, you can always change these settings later.' => '请填写以下信息,不过不用当心,这些信息以后可以修改的.',
    'Username' => '登录用户名',
    'Password' => '登录密码',
    'Password confirm' => '密码确认',
    'Site title' => '站点名称',
    'Your E-mail' => '你的邮箱',
    'Admin uri' => '后台管理网址',
    'Use this uri for admin login and manage.' => '使用该网址作为后台登陆和管理用.',
    'alphabetical characters, numbers, underscores and dashes only' => '仅可以使用数字,字母,下划线和中划线',

    'Double-check your email address before continuing.' => '请确认您的邮箱,以防忘记密码,重置密码时要用到.',
    'Install theme initial data' => '安装模板初始数据',
    'Initial data can help you view and use the template more easy.' => '安装模板初始数据可以方便你查看和使用该模板.',
    'Install Njiandan' => '安装N简单',
    'Njiandan has been installed. Were you expecting more steps? Sorry to disappoint.' => 'N简单安装成功!你以为还有更多安装步骤?对不起让您失望了.',
    'Log In' => '登录',
    'Username' => '登录用户名',

    'Already Installed' => '已经安装啦.',
    'You appear to have already installed Njiandan. To reinstall please clear your old database tables first.' => '您已经安装N简单啦,如果要重新安装,请删除旧的数据库先.',

    'ERROR: The username is empty.' => '错误: 用户名不能为空',
    'ERROR: Invalid username.' => '错误: 用户名不合法',
    'ERROR: The password is empty.' => '错误: 密码不能为空',
    'ERROR: The password not equal.' => '错误: 密码两次输入不一致',
    'ERROR: Invalid email.' => '错误: 邮箱格式不正确.',
    'ERROR: Admin uri is empty.' => '错误: 后台管理网址不能为空.',
    'ERROR: Invalid admin uri.' => '错误: 后台管理网址格式不正确.',
);
