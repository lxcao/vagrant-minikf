###
 # @Author: clingxin
 # @Date: 2021-05-30 08:44:25
 # @LastEditors: clingxin
 # @LastEditTime: 2021-05-31 09:31:47
 # @FilePath: /vagrant/vagrant101/scripts.sh
###
cd vagrant101
vagrant init ubuntu/trusty64
-- modify the Vagrantfile accordingly
vagrant up

-- modify the Vagrantfile
vagrant reload

vagrant ssh

?? once I modify some configure, for example, add some provisioning content or change the netowrk, 
?? and reload, occured Connection reset error
?? have to destroy and init again
vagrant destroy
vagrant init

--after init with bootstrap.sh
vagrant ssh
    mysql -u root -p   -- password is root
    create database test;
    use test;
    create table posts(id INT AUTO_INCREMENT, text VARCHAR(250) NOT NULL, primary key (id));
    show tables;
    insert into posts(text) values('Hello World');
    insert into posts(text) values('Test Post');
    select * from posts;
    quit;

?? PHP install failed, no package found php7.2
# resume after suspend on any directory, it works without provisioning
vagrant suspend
vagrant resume
# add ssh username and password in Vagrantfile
#only in the Vagrantfile folder, it works
vagrant up --no-provision 50eea50
