import domReady from '@roots/sage/client/dom-ready';
import '@builder.io/partytown/integration';
import './arrowtop.js';
import 'flowbite/dist/flowbite.js';

const snippetText = partytownSnippet();

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
