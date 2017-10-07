#! /bin/bash

# This is for controlling mplayer from webserver/php
mkfifo /tmp/mplayer.pipe
chmod a+w /tmp/mplayer.pipe

# dimm mplayer volume, so airplay can be boosted by phone
amixer -q sset 'PCM' 90%


while :
do

    mplayer -really-quiet -slave -idle -input file=/tmp/mplayer.pipe "http://wdr-1live-live.icecast.wdr.de/wdr/1live/live/mp3/128/stream.mp3"

    sleep 2s

done


