const Encore = require('@symfony/webpack-encore');

//dossier contetnant tous les fichiers accessible pour l'App = public/sous-dossier
Encore  .setOutputPath('public/build')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .addEntry('js/app',[
            'node_modules/jquery/dist/jquery.js',
            'node_modules/popper.js/dist/umd/popper.js',
            'node_modules/bootstrap/dist/js/bootstrap.js'
    ]);



module.exports = Encore.getWebpackConfig();