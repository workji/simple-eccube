help:
	@grep "^[0-9a-zA-Z\.\-]*:" Makefile | grep -v "grep" | sed -e 's/^/make /' | sed -e 's/://'

eccube:
	curl -vOL https://downloads.ec-cube.net/src/eccube-4.2.3.tar.gz
	tar -zxvf eccube-4.2.3.tar.gz
	rsync -av ec-cube/ www/html/
	rm -rf ec-cube
	rm eccube-4.2.3.tar.gz
	@echo "\n\n\nEC-CUBE4.2.3 Download Complete!!!\n\n\n"

clean:
	sudo rm -rf eccube
	sudo rm -rf www/eccube
	@echo "\n\n\nInitialized\n\n\n"