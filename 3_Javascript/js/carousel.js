var images = ["https://cdn.pixabay.com/photo/2019/10/30/15/33/tajikistan-4589831__340.jpg", "https://cdn.pixabay.com/photo/2020/07/11/08/00/deer-5393082__340.jpg", "https://cdn.pixabay.com/photo/2020/07/11/06/36/poppies-5392907__340.jpg", "https://cdn.pixabay.com/photo/2020/06/14/22/46/the-caucasus-5299607__340.jpg", "https://cdn.pixabay.com/photo/2020/07/02/17/29/landscape-5363681__340.jpg", "https://cdn.pixabay.com/photo/2020/07/06/06/45/person-5375746__340.jpg", "https://cdn.pixabay.com/photo/2020/07/06/21/41/cat-5378453__340.jpg", "https://cdn.pixabay.com/photo/2020/07/10/17/52/bataille-de-reines-5391538__340.jpg", "https://cdn.pixabay.com/photo/2020/07/10/17/52/bataille-de-reines-5391538__340.jpg", "https://cdn.pixabay.com/photo/2020/07/10/17/52/herd-5391539__340.jpg"];
var imageElement = document.getElementById("carousel").getElementsByTagName("img")[0];
var intervalDisplay = document.getElementById("intervalDisplay");
var index = -1;
var interval = 1000;
var pause = true;
var secondsInput = document.getElementById("secondsInput");

function set() {
    var input = secondsInput.value;
    console.log(input)
    if(interval!=input){
        interval = input;
        if(interval>0){
            pause=false;
            clearTimeout();
            if(index==-1){
                slideShow()
            }
        }else{
            pause=true
            alert("Enter a valid value for time");
        }
    }
}

function slideShow() {
    index = (index + 1) % images.length;
    imageElement.src = images[index];
    if (!pause) {
        setTimeout(slideShow, interval);
    }
}