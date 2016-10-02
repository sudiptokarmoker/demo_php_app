#!/bin/bash

PATH_QUALITY=/mypath/
#tlsv1 is recommended to avoid problems with certificates
PARAMETERS="--local-to-remote-url-access=yes --ignore-ssl-errors=true --web-security=false --ssl-protocol=tlsv1"
cd $PATH_QUALITY

#echo "Debug param1=$1 param2=$2 param3=$3"

if [ -z "$3" ]
  then
    phantomjs $PARAMETERS quality.js $1 $2
  else
    echo "Launching phantomjs with debug. url=$1 quality=$2"
    phantomjs $PARAMETERS quality.js $1 $2 $3
fi
