Package.describe({name:"twbs:bootstrap",summary:"The most popular front-end framework for developing responsive, mobile first projects on the web.",version:"3.3.4",git:"https://github.com/twbs/bootstrap.git"}),Package.onUse(function(e){e.versionsFrom("METEOR@1.0"),e.use("jquery","client"),e.addFiles(["dist/fonts/glyphicons-halflings-regular.eot","dist/fonts/glyphicons-halflings-regular.svg","dist/fonts/glyphicons-halflings-regular.ttf","dist/fonts/glyphicons-halflings-regular.woff","dist/fonts/glyphicons-halflings-regular.woff2","dist/css/bootstrap.css","dist/js/bootstrap.js"],"client")});