Project uses Codekit for compilation - https://codekitapp.com/
Use codekit 'add' in the theme root to use the codekit config file for base config

Including a few node modules, see package.json

Codekit will compile sass from node modules (you do not need to specify exact path to node modules - see examples in main.scss, the @import statement will check the node_modules folder automatically)


*** Notes on Bootstrap 5.3 ***

This theme uses a "lean" BS5 implementation and most components / modules are not included.  For optional sass packages, go to /assets/sass/main.scss and uncomment them as needed.

JS Modules are also not included by default but are a little more complex to include.

Make sure codekit is configured properly - https://codekitapp.com/help/rollup/ (this should be the case if using the included codekit.config file when adding project)

Ex. import for Modal - (double check js class name in appropriate npm vendor file)
import Modal from 'bootstrap/js/dist/modal';

follow BS 5 documentation for initializing modules if necessary


*** Notes on Beanstalk Deployments ***
Exclude Files & Directories List - The /resources folder is for development assets which will be compiled to the /assets folder so should be excluded from deployments to servers
.gitignore
.editorconfig
.npmrc
config.codekit3
package.json
package-lock.json
postcss.config.js
readme.md
readme.txt
/resources


*** Notes on other modules ***

Popper.js
"@popperjs/core"

    Including popper.js for use by bootstrap modules that require it. No action necessary, the bs module should pull it in if necessary when you activate the BS module. See BS docs for more info if necessary.


Animate on Scroll (simple animation library)
"aos"

    https://michalsnik.github.io/aos/
    Animate on scroll is a great, easy to use library for simple animations. Found it much better than WOW.js and CSS animate.


Underscore
"underscore"

    https://underscorejs.org/
    JS library for some useful functions like De-bounce (https://underscorejs.org/#debounce). Can include functions individually to maintain lightweight codebase.


