## Overview
This Genesis Child Theme Was Adopted From The Genesis Sample Theme: https://github.com/studiopress/genesis-sample/.
Browser Compatibility Checked on: Chrome version 74.0.3729.169 & Safari version 12.1.


## Git & Git Ignore
Git is used on this project, and there is a .gitignore file that contains exemptions for the node-packages.


## Functions.php
Functions.php contains all the structural changes to the theme as well as a code snippet to install Google Tag Manager.
Google Analytics has been installed through Google Tag Manager.


## Styling
Styling is done with Sass using Node-Sass (an NPM Package from NPM version v10.16.0). 
There’s a watch script in package.json to give somewhat hot reloading when the styles.scss file is saved.

To run Node-Sass, use command “npm run scss“ in the root folder of the theme.
Sass is organized into Components (Common, Atoms, Molecules, Organisms and Pages). 


## Code Quality, Formatting & Linting
Sass files were formatted with Visual Studio plugin Prettier Code formatter. 
Linting was done with ___________________.


################################ For Developers

The version of [Genesis Sample on GitHub](https://github.com/studiopress/genesis-sample/) includes tooling to check code against WordPress standards. To use it:

1. Install Composer globally on your development machine. [See Composer setup steps](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).
2. In the command line, change directory to the Genesis Sample folder.
3. Type the command `composer install` to install PHP development dependencies.
4. Type `composer phpcs` to run coding standards checks.

You'll see output highlighting issues with PHP files that do not conform to Genesis Sample coding standards.

Run `composer phpcbf` if you see “phpcbf can fix the x marked sniff violations automatically” in the output of `composer phpcs`.

### npm scripts

Scripts are also provided to help with CSS linting, CSS autoprefixing, and creation of pot language files. To use them:

1. Install [Node.js](https://nodejs.org/), which also gives you the Node Package Manager (npm).
2. In the command line, change directory to the Genesis Sample folder.
3. Type the command `npm install` to install dependencies.

You can then type any of these commands:

- `npm run autoprefixer` to add and remove vendor prefixes in `style.css`.
- `npm run makepot` to regenerate the `languages/genesis-sample.pot` file.
- `npm run lint:css` to generate a report of style violations for `style.css`.
- `npm run lint:js` to generate a report of style violations for JavaScript files.
- `npm run fix:js` to fix any JavaScript style violations that can be corrected automatically.
- `npm run zip` to create a genesis-sample.zip. Files in the `excludes` array in `scripts/makezip.js` are omitted.

### Packaging for distribution

1. Follow the install instructions for npm scripts above.
2. Switch to the git branch you plan to distribute.
3. Bump version numbers manually and commit those changes.
4. Type `npm run zip` to create `genesis-sample.zip`. Files in the `excludes` array in `scripts/makezip.js` are omitted from the zip. `filename.md` files will be renamed to `filename.txt`.
