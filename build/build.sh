#!/bin/bash

type -P juicer &> /dev/null || { echo "Juicer not found" ; exit 1; }

BASEDIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd)"
DIR="$( cd $BASEDIR/.. && pwd)"

SASS_DIR="$DIR/stylesheets/scss"
CS_DIR="$DIR/javascripts/coffeescripts"
JS_DIR="$DIR/javascripts"

juicer merge -i -s $JS_DIR/frank.slideshow.js \
	$JS_DIR/simplebox.js \
	$JS_DIR/main.js \
	--force \
	-o $JS_DIR/somerandomdude.js \
	-c none \
	-m closure_compiler
