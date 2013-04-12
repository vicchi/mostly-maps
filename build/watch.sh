#!/bin/bash

type -P compass &> /dev/null || { echo "Compass not found" ; exit 1; }
type -P coffee &> /dev/null || { echo "Coffee not found"; exit 1; }

BASEDIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd)"
DIR="$( cd $BASEDIR/.. && pwd)"

SASS_DIR="$DIR/stylesheets/scss"
CS_DIR="$DIR/javascripts/coffeescripts"
JS_DIR="$DIR/javascripts"

compass watch $DIR &
coffee -o $JS_DIR -cwl $CS_DIR &
wait