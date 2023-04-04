#!/bin/bash

cd show/$1
git log --pretty=format:'{%n  "commit": "%H",%n  "author": "%an <%ae>",%n  "date": "%ai",%n  "message": "%f"%n},' --no-color | perl -pe 'BEGIN{print "["}; END{print "]\n"}' | perl -pe 's/},]/}]/' | php -r '$json = file_get_contents("php://stdin"); $data = json_decode($json); foreach ($data as &$commit) { $commit->date = date("M d, Y h:i:s A", strtotime(preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$1-$2-$3 $4:$5:$6", $commit->date))); } echo json_encode($data);'


