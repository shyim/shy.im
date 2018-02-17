.PHONY: build
build:
	hexo clean
	hexo generate
	hexo algolia