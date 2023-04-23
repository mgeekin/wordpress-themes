<div id="postgrid" class="postgrid container">


    <div class="postgrid-item">
        <div class="postgrid-item-image">
            <img loading="lazy" src="https://images.pexels.com/photos/941159/pexels-photo-941159.jpeg" alt="image">
        </div>
        <div class="postgrid-item-content">
            <h3 class="postgrid-item-title">Title</h3>
            <p class="postgrid-item-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod,
                voluptate, voluptatem, quae, quia voluptates quibusdam quos quas nesciunt quidem.</p>
            <span class="postgrid-cost">INR 5000</span>
            <a href="#" class="postgrid-item-link">Read more</a>
        </div>
    </div>
</div>

<script>
var per_page = 10;
var page = 1;
var restUrl = `/wp-json/wp/v2/posts?per_page=${per_page}&page=${page}`;
fetch(restUrl)
    .then(response => response.json())
    .then(posts => {
        // log(posts)
        posts.forEach(post => {
            displayPost(post)

        })

    })







imageUrl = [
    "https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg",
    "https://images.pexels.com/photos/3008509/pexels-photo-3008509.jpeg",
    "https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg",
    "https://images.pexels.com/photos/941159/pexels-photo-941159.jpeg",
    "https://upload.wikimedia.org/wikipedia/commons/6/6b/Mt._Kilimanjaro_12.2006.JPG",
    "https://upload.wikimedia.org/wikipedia/commons/3/3f/Puncakjaya.jpg",
    "https://images.pexels.com/photos/941159/pexels-photo-941159.jpeg",
    "https://upload.wikimedia.org/wikipedia/commons/6/6b/Mt._Kilimanjaro_12.2006.JPG",
    "https://upload.wikimedia.org/wikipedia/commons/3/3f/Puncakjaya.jpg"
]

for (var count = 0; count < imageUrl.length; count++) {

    var imgurl = imageUrl[count];
    var postId = `post${count}`;
    var contentID = "content" + count;

    append(`#postgrid`, gen('div', postId, "", `postgrid-item`));
    append(`#${postId}`, gen('figure', '', gen(img, "", "", "", {
        "loading": "eager",
        "src": imgurl,
        "alt": "image"
    }), `postgrid-item-image`));
    append(`#${postId}`, gen('div', contentID, gen(h2, "", `Hotel ${count+1}`, "postgrid-item-title"),
        `postgrid-item-content`));
    append(`#${contentID}`, gen(p, "",
        "Hotel location and other features, consectetur adipisicing elit. Quisquam, quod, voluptate, voluptatem, quae, quia voluptates quibusdam quos quas nesciunt quidem.",
        "postgrid-item-excerpt"));
    append(`#${contentID}`, gen('span', "", "INR 5000", "postgrid-cost"));
    append(`#${contentID}`, gen('span', "", "MAP URL", "postgrid-map"));

}

// log("hi postappend")


function openUrl(postLink) {
    // log(postLink)
    window.open(postLink, "_blank")
}

function displayPost(post) {

    var postId = post.id;
    var postTitle = post.title.rendered;
    var postExcerpt = post.excerpt.rendered;
    var postLink = post.link;
    var postImage = post.featured_media;
    var postImageURL = `/wp-json/wp/v2/media/${postImage}`;

    var imgurl = imageUrl[count];
    var postId = `post${count}`;
    var contentID = "content" + count;

    append(`#postgrid`, gen('div', postId, "", `postgrid-item`, {
        "onclick": `openUrl("${postLink}")`
    }), 'before');
    append(`#${postId}`, gen('figure', '', gen(img, "", "", "", {
        "loading": "eager",
        "src": imgurl,
        "alt": "image"
    }), `postgrid-item-image`));
    append(`#${postId}`, gen('div', contentID, gen(h2, "", postTitle, "postgrid-item-title"),
        `postgrid-item-content`));
    append(`#${contentID}`, gen(p, "",
        postExcerpt,
        "postgrid-item-excerpt"));
    append(`#${contentID}`, gen('span', "", "INR 5000", "postgrid-cost"));
    append(`#${contentID}`, gen('span', "", "MAP URL", "postgrid-map"));

}
</script>