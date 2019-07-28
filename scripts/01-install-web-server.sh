#!/bin/sh
# Installation script for FreeBSD 12.0-RELEASE
# web server nginx

export ASSUME_ALWAYS_YES="YES"

pkg install -y nginx
