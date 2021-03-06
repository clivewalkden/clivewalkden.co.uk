# CliveWalkden Jigsaw site

A static version of my site for simpler hosting. 

## Local Building
Run `./vendor/bin/jigsaw serve` to have the files run locally. To compile the local tailwind files you'll need to run `npm run watch` as well.

To build the site files  you can run `./vendor/bin/jigsaw build` and it will produce the files ready for serving.

## Production Build
To produce the final production files you can run `./vendor/bin/jigsaw build production`. The files will be output in a public_html folder. Then run `rsync -avzr --delete public_html/* gclive:/var/www/clivewalkden.co.uk/html/` to upload them to the server.

## TODO
- Add build.sh to speed up the process.
- Finish working on the github deployment automation
- Add all blog articles
- Add all portfolio pieces
- Add scripts
- Update scripts content
- Sort out new content