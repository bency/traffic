all:
	git pull
	npm install
	gulp
	composer install
deploy: all
	rsync -av --exclude ".git" --exclude "node_modules" --exclude "cache" --exclude "storage" * git@backup.bency.org:/var/www/traffic
	@echo "Deploy done!"
