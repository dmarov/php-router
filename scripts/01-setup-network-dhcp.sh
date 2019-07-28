#!/bin/sh

IF=ifconfig | grep -Eo 'epair[[:digit:]]+b'


sysrc sshd_enable="YES";
sysrc "ifconfig_${IF}_name"="eth0";
sysrc ifconfig_eth0="SYNCDHCP";

service sshd start
