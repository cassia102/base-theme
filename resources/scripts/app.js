import domReady from '@roots/sage/client/dom-ready';
import Test from './components/test';

/**
 * Application entrypoint
 */
domReady(async () => {

  new Test();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
