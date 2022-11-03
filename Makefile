export APP := leetcode-php-tests

build:
	@echo "Building container..."
	docker build --pull -f ./docker/Dockerfile -t $(APP) --progress=plain .

run-tests:
	@echo "Running unit tests inside container..."
	docker run -v $(PWD):/var/www/app --rm $(APP) ./vendor/phpunit/phpunit/phpunit -c phpunit.xml
