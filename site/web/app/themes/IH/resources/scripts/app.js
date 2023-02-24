import domReady from '@roots/sage/client/dom-ready';
import 'flowbite/dist/flowbite.js';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faClock } from '@fortawesome/free-regular-svg-icons';
library.add(faClock);
dom.watch();

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
