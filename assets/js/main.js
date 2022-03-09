let form = document.getElementById('form');

form.onsubmit = getlinks;

function getlinks(event) {
    let links = []

    var names = document.getElementsByClassName("playerinfo");

    Array.from(names).forEach((name) => {
        let link = "./assets/sounds/" + name.value.replace(" ", "").toLowerCase() + ".mp3";
        links.push(link);
    });

    let audioElements = []

    let opening = new Audio('./assets/sounds/opening.mp3')
    audioElements.push(opening);

    for (let i = 0; i < links.length; i++){
        var audio = new Audio(links[i]);
        audioElements.push(audio);

        if (i === 0){
            audioElements[i].play();
        } else {
            audioElements[i - 1].addEventListener('ended', function(){
                audioElements[i].play();
            });
        }
    }

    event.preventDefault();
}



