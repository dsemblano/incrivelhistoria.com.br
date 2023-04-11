import domReady from '@roots/sage/client/dom-ready';
import 'flowbite/dist/flowbite.js';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faClock, faCalendarDays } from '@fortawesome/free-regular-svg-icons';
import { faFacebook, faInstagram, faYoutube } from '@fortawesome/free-brands-svg-icons';
import { faFireFlameCurved } from '@fortawesome/free-solid-svg-icons';
library.add(faClock, faCalendarDays, faFireFlameCurved, faFacebook, faInstagram, faYoutube);
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
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
