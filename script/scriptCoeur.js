const heartMaker = () => {

    const heart = document.createElement("span");

    heart.classList.add("heart");

    document.body.appendChild(heart);

    const size = Math.random() * 20 + 100 + "px";

    heart.style.height = size;
    heart.style.width = size;

    heart.style.top = Math.random() * 100 + 50 + "%";
    heart.style.left = Math.random() * 100 + "%";

    setTimeout(() => {
        heart.remove();
    }, 8000);
};

setInterval(heartMaker, 100);

setTimeout(function() {
    window.location.href = "./connexion.php";
}, 5000);

