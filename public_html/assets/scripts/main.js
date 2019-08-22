import jQuery from 'jquery';
import 'picturefill';

import { example } from './includes/example';
import Placeholder from './components/Placeholder';

window.$ = window.jQuery = jQuery;

let ebExample = new example();
ebExample.init();

$('.placeholder-component').each((index, element) => new Placeholder(element));
