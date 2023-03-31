import domReady from '@roots/sage/client/dom-ready';
import 'flowbite/dist/flowbite.js';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faClock, faCalendarDays } from '@fortawesome/free-regular-svg-icons';
import { faFireFlameCurved } from '@fortawesome/free-solid-svg-icons';
library.add(faClock, faCalendarDays, faFireFlameCurved);
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
