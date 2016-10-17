list=`find | grep php | grep -v '/vendor/'`

for file in $list
do
	php_beautifier < $file > /tmp/beautify 2>/dev/null
	mv /tmp/beautify $file
	echo Formatted `echo $file | cut -f2- -d'/'`!
done
