window.comm100main = (function (filename) {
  window.Comm100API = window.Comm100API || {};
  var api = window.Comm100API;
  api.call = function (name) {
    return (new Function('return ' + name)).call();
  };
  api.chat_buttons = api.chat_buttons || [];
  return function (main, standby) {
    var iframe = document.createElement('iframe');
    iframe.style.display = 'none';
    iframe.id = 'comm100-iframe';
    document.body.appendChild(iframe);
    var innerDoc = iframe.contentDocument;
    function create(host) {
      innerDoc.open();
      innerDoc.write('<!doctype html><head><script src="' + host + filename + '" async type="text/javascript"></script></head><body></body>');
      innerDoc.close();
    }
    api.main = main;
    api.standby = standby;
    if (main) create(main+"/js/");
  };
}('bundle.039e03f5e5a8b3d7502d57c26bad53c1.js'));
window.comm100main('https://chatserver.comm100.com')