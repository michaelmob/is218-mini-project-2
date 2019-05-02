default: dump open serve

open:
	open 'http://localhost:8080'

serve:
	php -S localhost:8080 -t src/

dump:
	composer dump-autoload -o
