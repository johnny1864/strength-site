module.exports = {
    plugins: {
        'postcss-url': {
            url: 'copy',
            basePath: [
                path.resolve('assets/*'),
                path.resolve('node_modules/@fortawesome/fontawesome-pro/*')
            ],
            assetsPath: './',
            useHash: false,
        }
    }
}
