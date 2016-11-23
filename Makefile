all:
	git pull
	git push
	npm install
	gulp
	composer install
deploy: all
	rsync -av --exclude ".git" --exclude "node_modules" --exclude "bootstrap/cache" --exclude "storage/framework/cache" --exclude "storage" * git@backup.bency.org:/var/www/traffic
	@echo "Deploy done!"
