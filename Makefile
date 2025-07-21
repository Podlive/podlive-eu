serve:
	hugo serve

publish:
	rsync -azP --delete --exclude meltmail site/ uberspace:/home/funken/web/podlive.eu/

.PHONY: serve publish
.DEFAULT_GOAL := serve
