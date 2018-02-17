.PHONY: build
build:
	hexo clean
	hexo algolia
	hexo generate
