// init GeneratorJs
window.$ = GeneratorJs()
$.init()

window.DEBUT = 1;
// log();

const themeUri = myTheme.uri;
var scssuri = themeUri + "/mainstyle.scss";

load(scssuri);

const svgBG = `<svg
width="100mm"
height="100mm"
viewBox="0 0 100 100"
version="1.1"
id="svg5"
xmlns="http://www.w3.org/2000/svg"
xmlns:svg="http://www.w3.org/2000/svg">
<defs
  id="defs2" />
<g
  id="layer1">
 <path
    id="rect241"
    style="fill:#de1268;stroke:none;stroke-width:2.00002;stroke-linejoin:round;paint-order:stroke fill markers"
    d="m 67.271695,77.41758 -9.265338,8.550863 -3.031765,-3.285029 -13.437301,12.401378 h 45.319856 l -8.32166,-12.298908 -3.884005,2.627902 z" />
</g>
</svg>`






