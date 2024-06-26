import domReady from '@roots/sage/client/dom-ready';
import './arrowtop.js';
import 'flowbite/dist/flowbite.js';
import './logoscroll.js';

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
