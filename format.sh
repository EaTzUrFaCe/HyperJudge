#!/bin/bash

for file in `find $(dirname $0) | grep '\.php' | grep -v '/vendor/' | grep -v 'phptidybak'`
do
	[ -n "`bin/php-tidy replace $file`" ] && bin/php-tidy replace $file
	bin/php-cs-fixer fix $file --level=symfony --fixers=-psr0
	rm `dirname $file`/.`basename $file`'.phptidybak~'
done
