#!/bin/sh

BASEDIR=$(dirname $0);
CONFIGS_DIR="$BASEDIR/../configs";

mkdir /usr/local/etc/pkg/repos
cp "$CONFIGS_DIR/FreeBSD.conf" /usr/local/etc/pkg/repos
cp "$CONFIGS_DIR/FreeBSD_latest.conf" /usr/local/etc/pkg/repos
