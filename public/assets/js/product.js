let comments = [];
refreshComments();
async function refreshComments() {
    let productId = document.querySelector('#hidden-product-id').getAttribute('data-product-id');
    comments = await fetch(API_URL+"/product/"+productId+"/comments")
    .then((response) => response.json());
    document.querySelector('#comments').innerHTML = "";
    comments.forEach((comment) => {
        document.querySelector('#comments').innerHTML += commentComponent(comment.user.first_name+" "+comment.user.last_name, comment.rating, comment.content)+"\r\n";
    });
}

function commentComponent(username, rating, content) {
    let ratingEmoji = ""
    for(let i = 0; i < rating; i++) {
        ratingEmoji += "⭐";
    }
    return `<div>
    <h4>${username}</h4>
    <p>${ratingEmoji}</p>
    <p>${content}</p>
</div>`;
}
