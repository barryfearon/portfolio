import '../modernizr';

import 'bootstrap';

import './scss/app.scss';

import 'lazysizes';

import './scripts/custom';

//Image imports: https://medium.com/front-end-weekly/webpack-and-dynamic-imports-doing-it-right-72549ff49234
import(/* webpackMode: "eager" */ `./assets/images/${'blank'}.gif`);
import(/* webpackMode: "eager" */ `./assets/images/${'barry-fearon'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/${'linked-in'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/${'phone'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/${'plane'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'greysnow-poker-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'greysnow-desktop-01'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'greysnow-desktop-small'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'greysnow-group-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'gs-group-devices'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'gs-group-devices-small'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'desktop-gs-poker'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'laptop-gs-poker'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'mobile-gs-poker'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'desktop-gs-group'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'laptop-gs-group'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'mobile-gs-group'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'desktop-midway'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'laptop-midway'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'mobile-midway'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'desktop-cimarron'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'laptop-cimarron'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'mobile-cimarron'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/email/${'email-design-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/email/${'email-design'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/email/${'email-design-small'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'midway-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'midway-devices'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'midway-devices-small'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'cimarron-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'cimarron-devices'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'cimarron-devices-small'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'crazy-8-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'crazy8-template'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'crazy8-template-small'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'utmost-thumb'}.jpg`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'desktop-utmost-01'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'laptop-utmost-01'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'mobile-utmost-01'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'utmost-wealth-devices'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'utmost-devices-small'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/websites/${'mobile-devices-fallback-01'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'bootstrap5'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'html5'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'css3'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'react'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'mjml'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'php'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'wordpress'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'chrome-logo'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'firefox-logo'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'microsoft_edge-logo'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'safari-logo'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/${'undo'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/logos/${'Adobe_XD_CC_icon'}.svg`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'apple-touch-icon'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-32'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-72'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-128'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-144'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-152'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-167'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-180'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-192'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-196'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'icon-512'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'android-chrome-192x192'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'android-chrome-512x512'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'favicon-16x16'}.png`);
import(/* webpackMode: "eager" */ `./assets/images/icons/${'favicon-32x32'}.png`);


