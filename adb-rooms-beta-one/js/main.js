// init GeneratorJs
window.$ = GeneratorJs()
$.init()

window.DEBUT = 1;
log();

const themeUri = myTheme.uri;
var scssuri = themeUri + "/mainstyle.scss";
load(scssuri);