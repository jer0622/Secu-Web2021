var ESAPI = require('./node_modules/node-esapi/lib/esapi.js');
window.ESAPI =ESAPI;

ESAPI.encoder().encodeForHTML('<p>This is a test</p>');
