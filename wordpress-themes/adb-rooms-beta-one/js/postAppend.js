
imageUrl = ["https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg",
    "https://images.pexels.com/photos/3008509/pexels-photo-3008509.jpeg",
    "https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg",
    "https://images.pexels.com/photos/941159/pexels-photo-941159.jpeg",
    "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg/1024px-Everest_North_Face_toward_Base_Camp_Tibet_Luca_Galuzzi_2006.jpg",
    "https://en.wikipedia.org/wiki/File:Mt._Kilimanjaro_12.2006.JPG",
    "https://en.wikipedia.org/wiki/File:Puncakjaya.jpg",
    "https://en.wikipedia.org/wiki/File:080103_hakkai_fuji.jpg",
]

for (var count = 0; count < imageUrl.length; count++) {

    var imgurl = imageUrl[count];
    var postId = `post${count}`;
    append(postgrid, gen('div', postId, "", `postgrid-item`), 'before');
    append(postId, gen('figure', '', gen(img, "", "", "", {
        "loading": "eager",
        "src": imgurl,
        "alt": "image"
    }), `postgrid-item-image`));
    var contentID = "content" + count;
    append(postId, gen('div', contentID, gen(h2, , "Heading", "postgrid-item-title"), `postgrid-item-content`));
    append(contentID, gen(p, ,
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod, voluptate, voluptatem, quae, quia voluptates quibusdam quos quas nesciunt quidem.",
        "postgrid-item-excerpt"));


}

log("hi postappend")
