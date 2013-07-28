MYPHPFRAME目录是MYPHFRAME的底层开发框架；
project_DEMODEVFRAME目录是一个小的演示项目；

安装、测试project_DEMODEVFRAME步骤：
1、将MYPHPFRAME目录和project_DEMODEVFRAME目录部署在同一级目录下（也可根据需要部署在其他不同目录下，但是需要修改项目配置）；
2、配置hosts文件将demodevframe.com域名指向本机，并配置http服务使demodevframe.com域名指向project_DEMODEVFRAME/version0.1/www；
3、重启http服务；
4、在db中新建mpf_demodevframe_demo数据库，将project_DEMODEVFRAME\version0.1\document\dbdesign\mpf_demodevframe_demo_20100101.sql中的数据表和数据导入到mpf_demodevframe_demo数据库；
5、打开浏览器，访问demodevframe.com，输入帐号和密码（lgname1/f11）进行登录；

注意：project_DEMODEVFRAME目录是一个很小的演示项目，仅仅用于初学者对MYPHPFRAME的初步了解，请对照相关开发文档进行了解和熟悉！