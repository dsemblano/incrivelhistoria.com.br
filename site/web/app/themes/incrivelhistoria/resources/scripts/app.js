import domReady from '@roots/sage/client/dom-ready';
import './arrowtop.js';
import 'flowbite/dist/flowbite.js';
import './logoscroll.js';
import FontFaceObserver from 'fontfaceobserver';


// Create an instance for Open Sans (variable font)
const openSans = new FontFaceObserver('Open Sans', {
  weight: 400,
  style: 'normal',
});

// Create an instance for Lato Bold (non-variable font)
const latoBold = new FontFaceObserver('Lato Bold', {
  weight: 900,
  style: 'normal',
});

const lato = new FontFaceObserver('Lato', {
  style: 'normal',
});

const jenson = new FontFaceObserver('Jenson', {
  style: 'normal',
});

// Use Promise.all to wait for all fonts to load
Promise.all([openSans.load(), latoBold.load(), lato.load(), jenson.load()])
  .then(() => {
    console.log('All fonts have loaded.');
  })
  .catch((error) => {
    console.log('One or more fonts failed to load:', error);
  });

// import { partytownSnippet } from '@builder.io/partytown/integration';
// const snippetText = partytownSnippet();

// import { copyLibFiles } from '@builder.io/partytown/utils'; // ESM
// const { copyLibFiles } = require('@builder.io/partytown/utils'); // CommonJS

// async function myBuildTask() {
//   await copyLibFiles('./public/~partytown');
// }

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
