// init GeneratorJs
window.$ = GeneratorJs()
$.init()

window.DEBUT = 1;
// log();

const themeUri = myTheme.uri;
var scssuri = themeUri + "/mainstyle.scss";

load(scssuri);





var imageUrl = ["https://painrelieffoundation.org.uk/wp-content/uploads/2020/10/corporate-image-2.jpg",
    "http://clipart-library.com/images_k/city-scape-silhouette/city-scape-silhouette-8.png",
    "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg/1024px-Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg",
    "https://en.wikipedia.org/wiki/File:Mt._Kilimanjaro_12.2006.JPG",
    "https://en.wikipedia.org/wiki/File:Puncakjaya.jpg",
    "https://en.wikipedia.org/wiki/File:080103_hakkai_fuji.jpg",
    "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.a20Rx0lnOyPXgCS3MjbpJgHaEK%26pid%3DApi&f=1&ipt=f675c2b238bf953d0b87ed8cf8d628efa355fe67ffdbf7130ea8206767f1351b&ipo=images",
    "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.TOBF1OMA2asBS2WFRF_qdAHaEK%26pid%3DApi&f=1&ipt=2871770a776964b2ff677ae2daa26de36ffc81a3eeb8ed2214fa0d1735ee5fca&ipo=images"
]

for (var count = 0; count < 6; count++) {
    var imgurl = imageUrl[count];
    console.log(count)
    var postId = `post${count}`;
    append(".postgrid", gen('div', postId, "", `postgrid-item`), 'before');
    append(`#${postId}`, gen('div', '', gen(img, "", "", "", {
        "loading": "eager",
        "src": imgurl,
        // "alt": "image"
    }), `postgrid-item-image`));
    var contentID = "content" + count;
    append(`#${postId}`, gen('div', contentID, gen(h1, "", "Heading", "postgrid-item-title"), `postgrid-item-content`));
    append(`#${contentID}`, gen(p, "",
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod, voluptate, voluptatem, quae, quia voluptates quibusdam quos quas nesciunt quidem.",
        "postgrid-item-excerpt"));


};
